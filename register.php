<?php
require 'config.php';

if (isset($_POST["submit"])) {
    $name = $_POST["name"];
    $lastname = $_POST["lastname"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confpassword = $_POST["confpassword"];
    $mobilenum = $_POST["mobilenum"];

    // Check for duplicate email
    $duplicate = mysqli_query($conn, "SELECT * FROM informations WHERE email='$email'");
    if (mysqli_num_rows($duplicate) > 0) {
        echo "<script>alert('Email is already taken');</script>";
    } else {
        if ($password === $confpassword) {
            // Prepare and bind SQL statement without hashing the password
            $stmt = $conn->prepare("INSERT INTO informations (name, lastname, email, password, mobilenum) VALUES (?, ?, ?, ?, ?)");
            $stmt->bind_param("sssss", $name, $lastname, $email, $password, $mobilenum);

            if ($stmt->execute()) {
                echo "<script>alert('Signup successful');</script>";
                // Redirect after successful signup
                header("Location: login.php");
                exit();
            } else {
                echo "<script>alert('Signup failed: " . $stmt->error . "');</script>";
            }

            $stmt->close();
        } else {
            echo "<script>alert('Passwords do not match');</script>";
        }
    }

    mysqli_close($conn);
}
?>


<html>
<link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
<head>
<script>

document.addEventListener("DOMContentLoaded", function () {
    var form = document.querySelector('form[name="registerform"]');

    form.addEventListener("submit", function (event) {
        if (!reg_validation(form)) {
            event.preventDefault(); // Prevent submission if validation fails
            console.log("Form is invalid.");
        } else {
            console.log("Form is valid, submitting...");
            form.submit(); // Proceed with submission if validation passes
        }
    });
});

function displayerror(elemId, errormsg) {
    document.getElementById(elemId).innerHTML = errormsg;
}

function reg_validation(form) {
    var name = form.name.value.trim();
    var lastname = form.lastname.value.trim();
    var email = form.email.value.trim();
    var mobile = form.mobilenum.value.trim();
    var password = form.password.value.trim();
    var confpassword = form.confpassword.value.trim();

    var nameErr = true;
    var lastnameErr = true;
    var emailErr = true;
    var mobileErr = true;
    var passwordErr = true;
    var confpasswordErr = true;

    // Validate Name
    if (name === "") {
        displayerror("nameErr", "Your name is missing");
    } else if (!/^[a-zA-Z\s]+$/.test(name)) {
        displayerror("nameErr", "Please enter a valid name");
    } else {
        displayerror("nameErr", "");
        nameErr = false;
    }

    // Validate Last Name
    if (lastname === "") {
        displayerror("lastnameErr", "Your last name is missing");
    } else if (!/^[a-zA-Z\s]+$/.test(lastname)) {
        displayerror("lastnameErr", "Please enter a valid last name");
    } else {
        displayerror("lastnameErr", "");
        lastnameErr = false;
    }

    // Validate Email
    if (email === "") {
        displayerror("emailErr", "Your email address is missing");
    } else if (!/^\S+@\S+\.\S+$/.test(email)) {
        displayerror("emailErr", "Please enter a valid email address");
    } else {
        displayerror("emailErr", "");
        emailErr = false;
    }

    // Validate Password
    if (password === "") {
        displayerror("passwordErr", "Your password is missing");
    } else if (password.length < 8) {
        displayerror("passwordErr", "Password must be at least 8 characters");
    } else {
        displayerror("passwordErr", "");
        passwordErr = false;
    }

    // Confirm Password
    if (confpassword === "") {
        displayerror("confpasswordErr", "Confirm your password");
    } else if (confpassword !== password) {
        displayerror("confpasswordErr", "Passwords do not match");
    } else {
        displayerror("confpasswordErr", "");
        confpasswordErr = false;
    }

    // Validate Mobile Number
    if (mobile === "") {
        displayerror("mobileErr", "Your mobile number is missing");
    } else if (!/^[0]\d{10}$/.test(mobile)) {
        displayerror("mobileErr", "Enter an 11-digit mobile number starting with 0");
    } else {
        displayerror("mobileErr", "");
        mobileErr = false;
    }

    // Return true if all validations pass
    return !(nameErr || lastnameErr || emailErr || mobileErr || passwordErr || confpasswordErr);
}



</script>


<style>

*{
    margin: 0;
    padding: 0;
    font-family: 'poppins',sans-serif;
}
section{
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    width: 100%;
    background: url('images/blu.jpg')no-repeat;
    background-position: 80% center;
    background-size: cover;
}

.logo-details i {
    font-size: 50px;
    color: #fff; 
}

.logo-name{
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
.logo-details:hover{
    transform: scale(1.115);

}

.logo-details a:hover{
    text-decoration: none;

}


.logo-details a {
    text-decoration: none; 
}


.form-box-reg{
    position: relative;
    width: 400px;
    margin: 110px auto 70px ;
    background: transparent;
    border: 3px solid rgba(255,255,255,0.5);
    border-radius: 30px;
    backdrop-filter: blur(25px);
    display: flex;
    justify-content: center;
    align-items: center;
    box-shadow: 0px 4px 25px rgba(0, 0, 0, 0.2)
}

#signup{
    padding-top: 20px;
    padding-bottom: 10px;
    font-size: 2.9em;
    color: #686868;
    text-align: center;
    margin-top: 15px;
    margin-bottom: 30px;
}
.inputbox{
    position: relative;
     margin: 30px 0; 
    width: 310px;
    border-bottom: 2px solid #FFF;
}
.inputbox label{
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
    padding:0 35px 0 5px;
    color: black;
    margin-top: 8px;
}
.inputbox ion-icon{
    position: absolute;
    right: 8px;
    color: #686868;
    font-size: 1.2em;
    top: -5px;
}

.btnlog{
    width: 100%;
    transition: 0.7 ease;
    height: 40px;
    border-radius: 40px;
    background: #FFF;
    border: none;
    outline: none;
    cursor: pointer;
    font-size: 1em;
    font-weight: 600;
    margin-bottom: 10px;
}
.remember{
        margin: -15px 0 15px ;
        font-size: .9em;
        color: #686868;
        display: flex;
        justify-content: space-between;  
    
}
.remember label input{
    margin-right: 3px;
    
}

.btnlog:hover{
    transform: scale(1.115);
background-color:#686868;
}

.forget label input{
    margin-right: 3px;
    
}
.forget label a{
    color: #686868;
    text-decoration: none;
}
.forget label a:hover{
    text-decoration: underline;
}

.register{
    font-size: .9em;
    color: #686868;
    text-align: center;
    margin: 25px 0 10px;
}
.register p a{
    text-decoration: none;
    color: #686868;
    font-weight: 600;
}
.register p a:hover{
    text-decoration: underline;
    color: WHITE;
}

.error {
    color: red;
    font-size: 90%;
    margin-bottom: 20px;
}

 /* Media Queries */
 @media screen and (max-width: 600px) {
            .logo-details i {
                font-size: 60px;
            }

            .logo-name {
                font-size: 20px;
            }

            .form-box-reg {
                width: 90%;
                padding: 15px;
            }

            #signup {
                font-size: 1.8em;
            }

            .btnlog {
                font-size: 0.9em;
            }
        }
    </style>

</style>

</head>


<body>
<section>
<div class="logo-details">
            <i class='bx bx-list-check' id="logo-btn"></i>
            <a href= "home.php" class="logo-name"><span><b>T</b></span>o<span><b>D</b></span>o<span><b>L</b></span>ist</a>
    
        </div>
        <div class="form-box-reg">
            <div class="form-value">
        
                <form name="registerform"  action="" method="post" autocomplete="off">
                    <h2 id="signup">Sign up</h2>

                    <div class="inputbox" style="margin-bottom: 0px;">
                        <ion-icon name="person-outline"></ion-icon>
                        <input type="text"  name="name" id="name" >
                        <label for="name">First name : </label>
                    </div>
                    <div class="error" id="nameErr"></div>


                    <div class="inputbox" style="margin-bottom: 0px;">
                        <ion-icon name="person-outline"></ion-icon>
                        <input type="text"  name="lastname" id="lastname" >
                        <label for="lastname">Last Name : </label>
                    </div>
                    <div class="error" id="lastnameErr"></div>



                    <div class="inputbox"   style="margin-bottom: 0px;">
                        <ion-icon name="mail-outline"></ion-icon>
                        <input type="email" id="email"  name="email" >
                        <label for="email">Email : </label>
                    </div>
                    <div class="error" id="emailErr"></div>



                    <div class="inputbox"  style="margin-bottom: 0px;">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input type="password" id="password"  name="password" >
                        <label for="password">Password : </label>
                    </div>
                    <div class="error" id="passwordErr"></div>


                    <div class="inputbox"   style="margin-bottom: 0px;">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input type="password" id="confpassword"  name="confpassword" >
                        <label for="confpassword">Confirm Password : </label>
                    </div>
                    <div class="error" id="confpasswordErr"></div>


                    <div class="inputbox"  style="margin-bottom: 0px;">
                        <ion-icon name="call-outline"></ion-icon>
                        <input type="text" id="mobilenum" name="mobilenum" maxlength="11">
                        <label for="mobilenum">Mobile Number : </label>
                    </div>
                    <div class="error" id="mobileErr"></div>


                    <button type="submit" name="submit" class="btnlog">Sign up </button>
                    
                    
                    <div class="register">
                        <p>Already have an account? <a href="login.php">Log in </a></p>
                    </div>
                    <div class="alreadysigned">
                        <!-- <p>if the account is already registerd </p> -->
                    </div>

                </form>
            </div>
        </div>
    </section>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>




</body>


</html>