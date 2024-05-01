<?php
session_start();
include "../includes/db-connect.php";

    //Payment
    if ($_GET["type"] == "payment") {

        $sql = "INSERT INTO `payment`(`card_number`, `card_name`, `date`, `cvv`, `productID`, `payerID`) VALUES ('".$_POST['card_number']."' ,'".$_POST['card_name']."','".$_POST['date']."' ,'".$_POST['cvv']."','".$_POST["PID"]."','".$_COOKIE['SSN']."')";
        if ($conn->query($sql)) {
            echo "DONE";
            $_SESSION["createdSession"] = "1";
            header("Location: ../liveAuctions.php");
        }else{
            $_SESSION["createdSession"] = "0";
            // header("Location: ../payment.php");
        }
    }
?>
