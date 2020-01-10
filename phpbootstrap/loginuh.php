
<!DOCTYPE html>
<html lang="en">
<head>
     
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
    <pre>
        <h1 align="center"> Login Here .... </h1>
    <form action="" method="post">
    Email        : <input type="email" name="email" required>
    Password     : <input type="password" name="pass" required>
    <input type="submit" value="login" name="akses"> <br>
    </form>
    </pre>
</body>
</html>
<?php
    if (isset($_POST['akses'])) {
        $a = $_POST['email'];
        $b = $_POST['pass'];
        if ($a == "rifaramdani@gmail.com" && $b == "nonames") {
            $_SESSION['akseslogin'] = 'Admin';
            header("location:homeuh.php");
        }else {
            echo "Login Gagal";
        }
    }elseif ($_SESSION['akseslogin']) {
        echo"<script>alert('Anda Sudah Login');"
        ."window.location.href='homeuh.php'</script>";
    }
?>
<?php
  
    if (isset($_SESSION['akseslogin'])) {
        unset($_SESSION);
        session_destroy();
        header('location:homeuh.php');
    }
?>