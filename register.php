<html>

<head>
<script>

document.addEventListener("DOMContentLoaded", function () {
    var form = document.querySelector('form[name="registerform"]');

    form.addEventListener("submit", function (event) {
        event.preventDefault();

        var isValid = reg_validation(form);
        console.log("Form validity before: " + isValid);

        if (isValid) {
           //  form.submit(); // Uncomment this line to allow form submission
            console.log("Form validity after: " + isValid);
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
    var mobile = form.mobile.value.trim();
    var password = form.password.value.trim();
    var confpassword = form.confpassword.value.trim();

    var nameErr = true;
    var lastnameErr = true;
    var emailErr = true;
    var mobileErr = true;
    var passwordErr = true;
    var confpasswordErr = true;

    if (name === "") {
        displayerror("nameErr", "Your name is missing");
    } else {
        var pattern = /^[a-zA-Z\s]+$/;
        if (!pattern.test(name)) {
            displayerror("nameErr", "Please enter a valid name");
        } else {
            displayerror("nameErr", "");
            nameErr = false;
        }
    }

    if (lastname === "") {
        displayerror("lastnameErr", "Your last name is missing");
    } else {
        var pattern = /^[a-zA-Z\s]+$/;
        if (!pattern.test(lastname)) {
            displayerror("lastnameErr", "Please enter a valid name");
        } else {
            displayerror("lastnameErr", "");
            lastnameErr = false;
        }
    }

    if (email === "") {
        displayerror("emailErr", "Your email address is missing");
    } else {
        var pattern = /^\S+@\S+\.\S+$/;
        if (!pattern.test(email)) {
            displayerror("emailErr", "Please enter a valid email address");
        } else {
            displayerror("emailErr", "");
            emailErr = false;
        }
    }

    if (password === "") {
        displayerror("passwordErr", "Your password is missing");
    } else {
        var pattern = /^.{8,}$/;
        if (!pattern.test(password)) {
            displayerror("passwordErr", "Enter a valid password of at least 8 characters");
        } else {
            displayerror("passwordErr", "");
            passwordErr = false;
        }
    }

    if (confpassword === "") {
        displayerror("confpasswordErr", "Your password is missing");
    } else {
        if (confpassword !== password) {
            displayerror("confpasswordErr", "Your password doesn't match the original one");
        } else {
            displayerror("confpasswordErr", "");
            confpasswordErr = false;
        }
    }

    if (mobile === "") {
        displayerror("mobileErr", "Your mobile number is missing");
    } else {
        var pattern = /^[0]\d{10}$/;
        if (!pattern.test(mobile)) {
            displayerror("mobileErr", "Enter an 11 digit mobile number, starting with 0");
        } else {
            displayerror("mobileErr", "");
            mobileErr = false;
        }
    }

  

    if (nameErr || emailErr || mobileErr  || lastnameErr || passwordErr || confpasswordErr) {
        return false;
    } else {
        return true;
    }

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
    background: url('https://marketplace.canva.com/EAFI_DvPufs/1/0/1600w/canva-purple-and-blue-gradient-modern-desktop-wallpaper-2jA-xbTZ148.jpg')no-repeat;
    background-position: 70% 10%;
    background-size: cover;
}
.form-box{
    position: relative;
    width: 400px;
    height: 450px;
    background: transparent;
    border: 2px solid rgba(255,255,255,0.5);
    border-radius: 30px;
    backdrop-filter: blur(15px);
    display: flex;
    justify-content: center;
    align-items: center;

}

.form-box-reg{
    position: relative;
    width: 400px;
    margin: 50px auto 50px;
    background: transparent;
    border: 2px solid rgba(255,255,255,0.5);
    border-radius: 30px;
    backdrop-filter: blur(15px);
    display: flex;
    justify-content: center;
    align-items: center;

}



.h2-log{
    margin-top: 15px;
    font-size: 2.8em;
    color: #fff;
    text-align: center;
}
#signup{
    padding-top: 20px;
    padding-bottom: 10px;
    font-size: 2.9em;
    color: #fff;
    text-align: center;
    margin-top: 15px;
    margin-bottom: 30px;
}
.inputbox{
    position: relative;
     margin: 30px 0; 
    width: 310px;
    border-bottom: 2px solid #fff;
}
.inputbox label{
    position: absolute;
    top: 50%;
    left: 5px;
    color: #fff;
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
    color: #fff;
    font-size: 1.2em;
    top: -5px;
}

.btnlog{
    width: 100%;
    transition: 0.7 ease;
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
.remember{
        margin: -15px 0 15px ;
        font-size: .9em;
        color: #fff;
        display: flex;
        justify-content: space-between;  
    
}
.remember label input{
    margin-right: 3px;
    
}

.btnlog:hover{
    transform: scale(1.115);
background-color:blue;
}

.forget label input{
    margin-right: 3px;
    
}
.forget label a{
    color: #fff;
    text-decoration: none;
}
.forget label a:hover{
    text-decoration: underline;
}

.register{
    font-size: .9em;
    color: #fff;
    text-align: center;
    margin: 25px 0 10px;
}
.register p a{
    text-decoration: none;
    color: #fff;
    font-weight: 600;
}
.register p a:hover{
    text-decoration: underline;
    color: blue;
}

.error {
    color: red;
    font-size: 90%;
    margin-bottom: 20px;
}
</style>

</head>


<body>
<section>
        <div class="form-box-reg">
            <div class="form-value">
                <form name="registerform"  action="" method="post">
                    <h2 id="signup">Sign up</h2>

                    <div class="inputbox" style="margin-bottom: 0px;">
                        <ion-icon name="person-outline"></ion-icon>
                        <input type="text"  name="name" >
                        <label for="name">First name : </label>
                    </div>
                    <div class="error" id="nameErr"></div>


                    <div class="inputbox" style="margin-bottom: 0px;">
                        <ion-icon name="person-outline"></ion-icon>
                        <input type="text"  name="lastname" >
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
                        <input type="text" id="mobilenum" name="mobile" maxlength="11">
                        <label for="mobilenum">Mobile Number : </label>
                    </div>
                    <div class="error" id="mobileErr"></div>


                    <button class="btnlog">Sign up </button>
                    
                    
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