<?php
    session_start();
    require '../includes/db-connect.php';
    $duration = 86400 *30;
    if (isset($_GET["type"])) {
        if ($_GET["type"] == "updateUser") {
            $sql = "UPDATE users SET username = '" . $_POST["username"] . "' , `name` =  '" . $_POST["name"] . "' , `email` =  '" . $_POST["email"] . "' , `dateofbirth` =  '" . $_POST["dateofbirth"] . "' WHERE SSN = '".$_COOKIE["SSN"]. "';"; 
            if($conn->query($sql)){
                setcookie("name", $_POST["name"], time() + ($duration), "/");
                setcookie("email", $_POST["email"] , time() + ($duration), "/");
                setcookie("username", $_POST["username"], time() + ($duration), "/");
                setcookie("dateOfBirth", $_POST["dateOfBirth"] , time() + ($duration), "/");
                $_SESSION["updatedS"] = "1";
                echo "0 results";
                header("Location: ../dashboard.php");
            }else{
                $_SESSION["updatedS"] = "0";
                echo "0 results";
                echo"msh done";

            }
        }
    }
?>