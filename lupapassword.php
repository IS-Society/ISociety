<?php 
//connecting database
include 'config.php';
error_reporting(0);
session_start();
 
if (isset($_SESSION['username'])) {
    header("Location: berhasil_login.php");
}
 
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = md5($_POST['password']);
 
    $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $row['username'];
        header("Location: berhasil_login.php");
    } else {
        echo "<script>alert('Link Reset Password sudah terkirim ke email!')</script>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <style>
        * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}
 
body {
    width: 100%;
    min-height: 100vh;
    background-image: linear-gradient(rgba(0,0,0,.5), rgba(0,0,0,.5)), url(bg.png);
    background-position: center;
    background-size: cover;
    display: flex;
    justify-content: center;
    align-items: center;
}
 
.container {
    width: 400px;
    min-height: 200px;
    background: #FFF;
    border-radius: 5px;
    box-shadow: 0 0 5px rgba(0,0,0,.3);
    padding: 40px 30px;
}
 
.container .login-text {
    color: #111;
    font-weight: 500;
    font-size: 1.1rem;
    text-align: center;
    margin-bottom: 20px;
    display: block;
    text-transform: capitalize;
}
 
.container .login-email .input-group {
    width: 100%;
    height: 50px;
    margin-bottom: 25px;
}
 
.container .login-email .input-group input {
    width: 100%;
    height: 100%;
    border: 2px solid #ffce09;
    padding: 15px 20px;
    font-size: 1rem;
    border-radius: 30px;
    background: transparent;
    outline: none;
    transition: .3s;
}
 
.container .login-email .input-group input:focus, .container .login-email .input-group input:valid {
    border-color: #ffce09;
}
 
.container .login-email .input-group .btn {
    display: block;
    width: 100%;
    padding: 15px 20px;
    text-align: center;
    border: none;
    background: #ffce09;
    outline: none;
    border-radius: 30px;
    font-size: 1.2rem;
    color: #FFF;
    cursor: pointer;
    transition: .3s;
}
 
.container .login-email .input-group .btn:hover {
    transform: translateY(-5px);
    background: #ffce09;
}
 
.login-register-text {
    color: #111;
    font-weight: 600;
}
 
.login-register-text a {
    text-decoration: none;
    color: #ffce09;
}
 
.container-logout {
    width: 500px;
    min-height: 200px;
    background: #FFF;
    border-radius: 5px;
    box-shadow: 0 0 5px rgba(0,0,0,.3);
    padding: 40px 30px;
}
 
.container-logout .login-email .input-group .btn {
    display: block;
    width: 100%;
    padding: 15px 20px;
    text-align: center;
    border: none;
    background: #ffce09;
    outline: none;
    border-radius: 30px;
    font-size: 1.2rem;
    color: #FFF;
    cursor: pointer;
    transition: .3s;
    margin-top: 20px;
}
 
.container-logout .login-email .input-group .btn:hover {
    transform: translateY(-5px);
    background: #ffce09;
}
 
@media (max-width: 430px) {
    .container {
        width: 300px;
    }
}
</style>
</head>

<body>
    <div class="alert alert-warning" role="alert">
        <?php echo $_SESSION['error']?>
    </div>

<!--Form Lupa Password-->
    <div class="container">
        <form action="" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Forgot Password</p>
            <div class="input-group">
                <input type="email" placeholder="Email" name="email" value="" required>
            </div>
            <div class="input-group">
                <button name="submit" class="btn">Reset Password</button>
            </div>
        </form>
    </div>
</body>
</html>

