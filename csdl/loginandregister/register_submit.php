<?php
    include 'config.php';
    session_start();//phục hồi dữ liệu
    if(isset($_POST['submit']) ){
        if(empty($_POST['username']) && empty($_POST['password'])){
            echo '<script>alert("Bạn không được để trống")</script>';
        }
        // Thực hiện xử lí khi người dùng điền đầy đủ thông tin

        $username   =$_POST['username'];
        $password   =$_POST['password'];
        $repassword =$_POST['repassword'];
        $email      =$_POST['email'];
        $birthday   =$_POST['birthday'];
        $address    =$_POST['address'];
        
        if($password!=$repassword){
            header("location:register.php");
        }
        $checkemail="SELECT * from `infomation` WHERE `email`='".$email."'  ";
        $checkname="SELECT * from infomation WHERE `username`='".$username."'  ";
        $data=array();
        $data= mysqli_fetch_array(mysqli_query($conn,$checkemail));
        // $data2=array();
        // $data2= mysqli_fetch_array(mysqli_query($conn,$checkemail));
        if($data != null){
            header("Location: register.php");
        }
        
        //  if($data == null){
        //      header("Location: register.php");
        //  }
        //  else {
        //     echo "email đã tồn tại !! vui lòng chọn email khác";
        //     header("Location: register.php");
        //  }
        if($password==$repassword){
            echo $username." ".$password." ".$repassword." ".$email." ".$birthday." ".$address;
            $sql_dangky = mysqli_query($conn, "INSERT INTO `infomation`(`id`, `username`, `password`, `email`, `birthday`, `address`) VALUES (NULL,'$username','$password','$email','$birthday','$address')");
        }
        
        if($sql_dangky){
            echo '<h1>Đăng kí thành công</h1>';
            echo '<a class="nav-link" href="../mainpage/index.php">Nhấn vào đây để trở về trang chủ
                        <span class="sr-only">(current)</span>
                  </a>';
       
        }
        else{
            echo "<h2>thất bại</h2>";    
        }
    }
    else{
        // header("location:register.html");`
    }

?>
