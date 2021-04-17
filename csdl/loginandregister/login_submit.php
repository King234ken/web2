<?php
include 'config.php';
if(isset($_POST["submit"]) && $_POST["username"]!='' && $_POST["password"]!='' ){
    $username= mysqli_real_escape_string($conn,htmlspecialchars($_POST["username"]));//tấn công mysql
    $password= mysqli_real_escape_string($conn,trim($_POST["password"]));
    $sql="SELECT * FROM `infomation` WHERE 'name' = '$username' AND 'password' = '$password'" ;
    $reset=mysqli_query($conn,$sql);
    if ($reset != false)  {
        echo "<h1>Bạn đã đăng nhập</h1>";
    }
    else{
        echo "Bạn chưa thể đăng nhập";
    }
}
else{
    header("location: login.php");
}
?>