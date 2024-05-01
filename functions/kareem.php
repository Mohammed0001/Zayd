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


<?php
    session_start();
    require '../includes/db-connect.php';
    $duration = 86400 *30;
    if (isset($_GET["type"])) {
        if ($_GET["type"] == "updateAdmin") {
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