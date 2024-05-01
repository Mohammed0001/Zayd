<!DOCTYPE html>
<?php
            session_start();

    if (isset($_COOKIE["SSN"])) {
        header("Location: dashboard.php");
    }
?>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>Zayd | Login</title>
        <link rel="icon" type="image/x-icon" href="img/logo1.png">
        <link rel="stylesheet" href="css/master.css">
        <link rel="stylesheet" href="css/nashwa.css">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        
    </head>
    <body>
               <?php include "includes/navbar.php";?>

            
        <div class="body">
        <div class="wrapper">
            <form action="functions/nashwa.php?type=login" id="loginForm" method="post">
                <h1>Login</h1>
                <div class="input-box">
                    <input type="text" placeholder="Username" name="username" id="username">
                    <i class='bx bxs-user'></i>
                </div>
                <p style="color: red;" id="usernameMsg"></p>

                <div class="input-box">
                    <input type="password" name="password"
                    placeholder="Password" id="password">
                    <i class='bx bxs-lock-alt'></i>
                </div>
                <p style="color: red;" id="passwordMsg"></p>
                <br>
                <br>
                <div class="remember-forget">
                 <label><input type="checkbox"> Remember me</label>
                 <a href="#">Forgot password?</a>
                </div>
                <button type="submit" class="btn">Login</button>
                <div class="register-link">
                    <p>Don't have an account?  <a href="signup.html">Register</a></p>
                </div>
            </form>
        </div>
        <?php  if (isset($_SESSION["isNotValid"])) {
                if ( $_SESSION["isNotValid"] == "1") {?>
                    
                        <div class="alert">
                            <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                            Invalid Username or Password
                        </div>
               <?php 
                    unset($_SESSION["isNotValid"]);
                }
            }
            ?>
            
        </div>
        <?php include "includes/footer.php";?>
        <script src="js/Nashwa.js"></script>
        <script src="js/main.js"></script>
        
    </body>
</html>
