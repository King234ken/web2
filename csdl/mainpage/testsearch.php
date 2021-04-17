<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h3 align="center">Danh sách sinh viên</h3>
    <table class="search-form">
        <tr>
            <td>
                <form action="" method="GET">
                    <input type="text" name="search" placeholder="Nhập từ khóa cần tìm" value="<?php if(isset($_GET["search"])){echo $_GET["search"];}?>">
                    <input type="submit" value="Tìm">
                    <input type="button" value="Tất cả" onclick="window.location.href='index.php'">
                </form>
            </td>
        </tr>
    </table>
    <?php
            // kết nối đến cơ sở dữ liệu
            $conn = mysqli_connect("localhost","root","","login");
            // truy vấn dữ liệu
            if(isset($_GET["search"]) && !empty($_GET["search"])){
                $key    =   $_GET["search"];
                $sql    =   "SELECT *   FROM mainuser   WHERE   `id` LIKE '%$key' OR `name` LIKE '%$key' OR `address` LIKE '%$key'";
            }
            else{
                $sql    ="SELECT * FROM `mainuser`";
            }
            $result =   mysqli_query($conn,$sql);
    ?>
    <table border="1" align="center" cellspacing ="0" cellpadding="5" width="850px">
        <tr>
            <th>Mã</th>
            <th>Họ và tên</th>
            <th>Ngày sinh</th>
            <th>Địa chỉ</th>
            <th>Email</th>
            <th></th>
            <th></th>
        </tr>
    <?php
    while($row= mysqli_fetch_all($result)){
        $id         =   $row["id"];
        $name       =   $row["name"];
        $birthday   =   $row["birthday"];
        $address    =   $row["address"];
        $email      =   $row["email"];
    
    
    
    echo '<tr>
        <td>'.$id.'</td>
        <td>'.$name.'</td>
        <td>'.$birthday.'</td>
        <td>'.$address.'</td>
        <td>'.$email.'</td>
        <td>
            <a href="">Sửa</a>
            <a href="">Xóa</a>
        </td>

    </tr>';
    }
    mysqli_close($conn);
    ?>
    <tr>
        <td colspan="5" align="center">
            <button type="button" onclick="myFuntion">Thêm mới</button>
        </td>
    </tr>
    </table>
</body>
</html>