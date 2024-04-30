<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>Zayd | Sign Up </title>
        <link rel="icon" type="image/x-icon" href="img/logo1.png">
        <link rel="stylesheet" href="css/master.css">
        <link rel="stylesheet" href="css/nashwa.css">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <?php
            session_start();
            if (isset($_SESSION["createdSession"])) {
                if ( $_SESSION["createdSession"] == "1") {
                   echo "<script>alert('Created Successfully!');</script>";
                }else{
                    echo "<script>alert('Error Creating!');</script>";
                }
                unset($_SESSION["createdSession"]);

            }
        ?>
    </head>
    <body>
    <?php include "includes/navbar.php";?>

        <div class="body">
            <div class="wrapper">
                <form action="functions/nashwa.php?type=signup" enctype="multipart/form-data" method="post" id="signupForm">
                <h1>SignUp</h1>
                <div class="input-box">
                        <input type="file" accept="Image/*" placeholder="pImage" name="pImage" id="pImage">
                        <i class='bx bx-id-card'></i>
                </div>
                <div class="input-box">
                        <input type="text" placeholder="SSN" name="SSN" id="ssn">
                        <i class='bx bx-id-card'></i>
                </div>
                <p style="color: red;" id="ssnMsg"></p>

                <div class="input-box">
                    <input type="text" placeholder="Name" name="name" id="name">
                    <i class='bx bx-rename'></i>
                </div>
                <p style="color: red;" id="nameMsg"></p>

                <div class="input-box">
                    <input type="text" placeholder="Email" name="email" id="email">
                    <i class='bx bx-envelope'></i>
                </div>
                <p style="color: red;" id="emailMsg"></p>

                <div class="input-box">
                    <input type="text" placeholder="Username" name="username" id="username">
                    <i class='bx bxs-user'></i>
                </div>
                <p style="color: red;" id="usernameMsg"></p>

                <div class="input-box">
                    <input type="date" placeholder="Date OF Birth" name="dateOfBirth" id="dob">
                    <i class='bx bxs-calendar'></i>
                </div>
                <p style="color: red;" id="dobMsg"></p>
                
                <div class="input-box">
                    <input type="text" placeholder="Password" name="password" id="password">
                    <i class='bx bxs-lock-alt'></i>
                </div>
                <p style="color: red;" id="passwordMessage"></p>
                <p style="color: red;" id="passwordMessage2"></p>
                <br>
                <button type="submit" class="btn">Signup</button>
                <div class="register-link">
                    <p>By Clicking the signup button you agree to <a href="terms.html">Terms and Condition</a> and <a href="privacy.html">Privacy Policy</a> </p>
                    <p>Already have an account? <a href="login.html">Login</a></p>
                </div>
                </form>
            </div>
        </div>
      <?php include "includes/footer.php";?>
    <script src="js/main.js"></script>
    <script src="js/Nashwa.js"></script>
    </body>
</html>