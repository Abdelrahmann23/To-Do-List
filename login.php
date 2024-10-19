<html>

<head>

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
    background: url('https://png.pngtree.com/background/20211217/original/pngtree-blue-fresh-geometric-education-background-design-picture-image_1598184.jpg')no-repeat;
    background-position: center;
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
    margin-top: 20px;
    font-size: 2.8em;
    color: #fff;
    text-align: center;
}
#signup{
    padding-top: 10px;
    padding-bottom: 10px;
    font-size: 2.9em;
    color: #fff;
    text-align: center;
    margin-top: 5px;
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

</style>

</head>


<body>
<section>
        <div class="form-box">
            <div class="form-value">
                <form name="loginform" action="" method="post">
                    <h2 class="h2-log">Login</h2>
                    <div class="inputbox">
                        <ion-icon name="mail-outline"></ion-icon>
                        <input type="email" id="email" name="email" required>
                        <label for="email">Email : </label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input type="password" id="password" name="password" required>
                        <label for="password">Password : </label>
                    </div>

                    <div class="remember">
                        <label for=""><input type="checkbox">Remember Me </label>
                    </div>

                    <button class="btnlog">Log in</button>
                    <div class="register">
                        <p>Don't have an account? <a href="register.php">Sign up </a></p>
                    </div>

                    <div class="plzsignup">
                        <!-- <p>in the backend if the zccount is not registerd </p> -->
                    </div>

                </form>
            </div>
        </div>
    </section>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>


</body>


</html>