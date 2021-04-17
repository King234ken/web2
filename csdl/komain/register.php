

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng kí thành viên</title>
</head>
<body align= "center";>
    <form action="register_submit.php" method="POST" >
           <h1>Tên đăng nhập</h1>
           <br/>
           
           <br/>
           Username: <input type="text" name="name">
           <br/>
           Email: <input type="text" name="email">
           <br/>
           Password: <input type="password" name="password">
           <br/>
           <h2>Nhập lại mật khẩu</h2>
           Password: <input type="password" name="repassword">
           <br/>
           <input type="submit" name="submit" value="Đăng kí">
           <button type="reset">Làm mới</button>
    </form>
</body>
</html>