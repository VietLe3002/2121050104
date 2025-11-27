<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
    <style>
        .warning {
            color: red;
        }
    </style>
</head>
<body>
    <form action="login.php" method= "post">
    <h1>Đăng nhập</h1>
    <div>
        <input type="text" name="username" placeholder="Nhập tên">

    </div>
          
    <div>
         <input type="password" name="password" placeholder="Mật khẩu">
    </div>


    <div>
         <input type="submit" value = "Đăng nhập">
    </div>



    </form>

    <?php
    //Kiểm tra người dùng nhập đủ thông tin chưa
    if(isset($_POST['username']) && isset($_POST['password'])){
        $tenDangNhap = $_POST['username'];
        $matKhau = $_POST['password'];

        if($tenDangNhap == "admin" && $matKhau == "123"){
            session_start();
            $_SESSION['username'] = $tenDangNhap;
            header('location: trangchu.php');
        }
        else{
            echo "<p class='warning'>Tên đăng nhập hoặc mật khẩu không chính xác</p>";
        }
    }
    else{
        // empty($_POST['username']);
        echo "<p>Vui lòng nhập đầy đủ thông tin</p>";
    }
?>


</body>
</html>