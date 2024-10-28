<?php
require 'config.php';

if (isset($_POST["submit"])) {
    $email = $_POST["email"];
    $password = $_POST["password"];
    $result = mysqli_query($conn, "SELECT * FROM informations WHERE email='$email'");
    $row = mysqli_fetch_assoc($result);

    if (mysqli_num_rows($result) > 0) {
        if ($password == $row["password"]) {  // Fixed this line
            $_SESSION["login"] = true;
            $_SESSION["id"] = $row["id"];
            header("Location: dashboard.php");
            exit();  // Ensures no further code runs
        } else {
            echo "<script>alert('Password is incorrect');</script>";
        }
    } else {
        echo "<script>alert('User not registered');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <style>
        * {
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif;
        }
        section {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            width: 100%;
            background: url('images/blu.jpg') no-repeat;
            background-position: 1px -10px;
            background-size: cover;
        }
        .logo-details i {
            font-size: 50px;
            color: #fff; 
        }
        .logo-name {
            font-size: 40px;
            color: #fff; 
        }
        .logo-details {
            display: flex;  
            align-items: center;  
            position: absolute; 
            top: 20px; 
            left: 40px;
        }
        .logo-details:hover {
            transform: scale(1.115);
        }
        .logo-details a {
            text-decoration: none; 
        }
        .form-box {
            position: relative;
            width: 400px;
            height: 450px;
            background: transparent;
            border: 3px solid rgba(255, 255, 255, 0.5);
            border-radius: 30px;
            backdrop-filter: blur(25px);
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 80px;
            margin-bottom: 10px;
            box-shadow: 0px 4px 25px rgba(0, 0, 0, 0.2);
        }
        .h2-log {
            margin-top: 20px;
            font-size: 2.8em;
            color: #686868;
            text-align: center;
        }
        .inputbox {
            position: relative;
            margin: 30px 0; 
            width: 310px;
            border-bottom: 2px solid #fff;
        }
        .inputbox label {
            position: absolute;
            top: 50%;
            left: 5px;
            color: #686868;
            font-size: 1em;
            pointer-events: none;
        }
        input:focus ~ label,
        input:not(:placeholder-shown) ~ label {
            top: -10px;
        }
        .inputbox input {
            width: 100%;
            height: 50px;
            background: transparent;
            border: none;
            outline: none;
            font-size: 1em;
            padding: 0 35px 0 5px;
            color: black;
            margin-top: 8px;
        }
        .inputbox ion-icon {
            position: absolute;
            right: 8px;
            color: #686868;
            font-size: 1.2em;
            top: -5px;
        }
        .btnlog {
            width: 100%;
            transition: 0.7s ease;
            height: 40px;
            border-radius: 40px;
            background: #fff;
            border: none;
            outline: none;
            cursor: pointer;
            font-size: 1em;
            font-weight: 600;
            margin-bottom: 10px;
        }
        .remember {
            margin: -15px 0 15px;
            font-size: .9em;
            color: #686868;
            display: flex;
            justify-content: space-between;  
        }
        .btnlog:hover {
            transform: scale(1.115);
            background-color: #686868;
        }
        .register {
            font-size: .9em;
            color: #686868;
            text-align: center;
            margin: 25px 0 10px;
        }
        .register p a {
            text-decoration: none;
            color: #686868;
            font-weight: 600;
        }
        .register p a:hover {
            text-decoration: underline;
            color: #FFF;
        }
    </style>
</head>
<body>
<section>
    <div class="logo-details">
        <i class='bx bx-list-check' id="logo-btn"></i>
        <a href="#" class="logo-name"><span><b>T</b></span>o<span><b>D</b></span>o<span><b>L</b></span>ist</a>    
    </div>
    <div class="form-box">
        <div class="form-value">
            <form name="loginform" action="" method="post">
                <h2 class="h2-log">Login</h2>
                <div class="inputbox">
                    <ion-icon name="mail-outline"></ion-icon>
                    <input type="email" id="email" name="email" required>
                    <label for="email">Email :</label>
                </div>
                <div class="inputbox">
                    <ion-icon name="lock-closed-outline"></ion-icon>
                    <input type="password" id="password" name="password" required>
                    <label for="password">Password :</label>
                </div>
                <div class="remember">
                    <label><input type="checkbox">Remember Me</label>
                </div>
                <button type="submit" name="submit" class="btnlog">Log in</button>
                <div class="register">
                    <p>Don't have an account? <a href="register.php">Sign up</a></p>
                </div>
            </form>
        </div>
    </div>
</section>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>
