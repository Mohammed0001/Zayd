<?php
session_start();
include "../includes/db-connect.php";

$duration = 86400 *30;
if (isset($_GET["type"])) {
    //Payment
    if ($_GET["type"] == "payment") {

        $sql = "INSERT INTO `payment`(`card_number`, `card_name`, `date`, `cvv`, `productID`, `payerID`) VALUES ('".$_POST['card_number']."' ,'".$_POST['card_name']."','".$_POST['date']."' ,'".$_POST['cvv']."','".$_POST["PID"]."','".$_COOKIE['SSN']."')";
        if ($conn->query($sql)) {
            echo "DONE";
            $_SESSION["paidSuccessfully"] = "1";
            header("Location: ../liveAuctions.php");
        }else{
            $_SESSION["paidSuccessfully"] = "0";
            header("Location: ../payment.php");
        }
    }
        if ($_GET["type"] == "updateAdmin") {
            $sql = "UPDATE users SET username = '" . $_POST["username"] . "' , `name` =  '" . $_POST["name"] . "' , `email` =  '" . $_POST["email"] . "' , `dateofbirth` =  '" . $_POST["dateOfBirth"] . "' WHERE SSN = '".$_COOKIE["SSN"]. "';"; 
            if($conn->query($sql)){
                setcookie("name", $_POST["name"], time() + ($duration), "/");
                setcookie("email", $_POST["email"] , time() + ($duration), "/");
                setcookie("username", $_POST["username"], time() + ($duration), "/");
                setcookie("dateOfBirth", $_POST["dateOfBirth"] , time() + ($duration), "/");
                $_SESSION["updatedAdmin"] = "1";
                header("Location: ../admin/dashboard.php");
            }else{
                $_SESSION["updatedAdmin"] = "0";
                header("Location: ../admin/dashboard.php");

            }
        }
    }
?>