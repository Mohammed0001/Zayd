<?php
session_start();
include "../includes/db-connect.php";
if (isset($_GET["type"])) {
    if ($_GET["type"] == "login") {
        $sql = "SELECT * FROM users WHERE username = '" . $_POST["username"] . "' AND password = '" . $_POST["password"] . "'" ; 
        $result = $conn->query($sql); // result set 
        $duration = 86400 * 30;
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                    setcookie("image", $row["image"], time() + ($duration), "/");
                    setcookie("SSN", $row["SSN"], time() + ($duration), "/");
                    setcookie("name", $row["name"], time() + ($duration), "/");
                    setcookie("email", $row["email"], time() + ($duration), "/");
                    setcookie("password", $row["password"], time() + ($duration), "/");
                    setcookie("username", $row["username"], time() + ($duration), "/");
                    setcookie("dateOfBirth", $row["dateOfBirth"], time() + ($duration), "/");
                    setcookie("image", $row["image"], time() + ($duration), "/");
                    setcookie("type", $row["type"], time() + ($duration), "/");
                    // setcookie("uimg", base64_encode($row["uimg"]), time() + ($duration), "/");
                    header("Location: ../dashboard.php");
                    echo "VALID";
                //     break;
                // }else {
                    //     echo "INVALID";
                    // }
                }
            } else {
                $_SESSION["isNotValid"] = "1";
            echo "0 results";
            header("Location: ../login.php");
        }
        $conn->close();
    }
    else if ($_GET["type"] == "logout") {
        setcookie("SSN", "", time() - 3600 , "/");
        setcookie("name", "", time() - 3600, "/");
        setcookie("email", "", time() - 3600, "/");
        setcookie("password", "", time() - 3600, "/");
        setcookie("username", "", time() - 3600, "/");
        setcookie("dateOfBirth", "", time() - 3600, "/");
        setcookie("image", "", time() - 3600, "/");
        setcookie("type", "", time() - 3600, "/");
        header("Location: ../login.php");
    }
    else if ($_GET["type"] == "signup") {
        $target_dir = "img/uploads/pPic/";
        $randomNumber = rand();
        $_FILES['pImage']['name'] = $randomNumber .".png" ;
        $file_name = $_FILES['pImage']['name'];
        $file_size =$_FILES['pImage']['size'];
        $file_tmp =$_FILES['pImage']['tmp_name'];
        $file_type=$_FILES['pImage']['type'];
        $target_file = $target_dir . basename($_FILES["pImage"]["name"]);
        move_uploaded_file($file_tmp,"../img/uploads/pPic/".$file_name);
        $sql = "INSERT INTO  `users`(`SSN`, `name`, `email`, `password`, `username`, `dateOfBirth`, `image`, `type`) VALUES ('".$_POST['SSN']."' ,'".$_POST['name']."' ,'".$_POST['email']."','".$_POST['password']."' ,'".$_POST['username']."','".$_POST['dateOfBirth']."','".$target_file."','user')";
        if ($conn->query($sql)) {
            echo "DONE";
            $_SESSION["createUser"] = "1";
            header("Location: ../signup.php");
        }else{
            $_SESSION["createUser"] = "0";
            header("Location: ../signup.php");
        }
    }
    else if ($_GET["type"] == "") {
     
    }
}
?>
