<?php
session_start();
include "../includes/db-connect.php";
if (isset($_GET["type"])) {
    if ($_GET["type"] == "login") {
        $sql = "SELECT * FROM users"; 
        $result = $conn->query($sql); // result set 
        $duration = 86400 * 30;
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                if ($_POST["username"] == $row["username"]  && $_POST["password"] == $row["password"]) {
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
                }else {
                    $_SESSION["isNotValid"] = "1";
                   header("Location: ../login.php");
                  echo "INVALID";
                }
            }
        } else {
            echo "0 results";
        }
        $conn->close();
    }
    if ($_GET["type"] == "logout") {
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
    if ($_GET["type"] == "signup") {
        $target_dir = "img/uploads/pPic/";
        $randomNumber = rand();
        $_FILES['pImage']['name'] = $randomNumber .".png" ;
        $file_name = $_FILES['pImage']['name'];
        $file_size =$_FILES['pImage']['size'];
        $file_tmp =$_FILES['pImage']['tmp_name'];
        $file_type=$_FILES['pImage']['type'];
        // $file_ext=strtolower(end(explode('.',$_FILES['fileToUpload']['name'])));
        $target_file = $target_dir . basename($_FILES["pImage"]["name"]);
        move_uploaded_file($file_tmp,"../img/uploads/pPic/".$file_name);
        //$img = $_FILES["uimg"];
        //$blob = addslashes(file_get_contents($img["tmp_name"]));  
        $sql = "INSERT INTO  `users`(`SSN`, `name`, `email`, `password`, `username`, `dateOfBirth`, `image`, `type`) VALUES ('".$_POST['SSN']."' ,'".$_POST['name']."' ,'".$_POST['email']."','".$_POST['password']."' ,'".$_POST['username']."','".$_POST['dateOfBirth']."','".$target_file."','user')";
        if ($conn->query($sql)) {
            echo "DONE";
            $_SESSION["createdSession"] = "1";
            header("Location: ../signup.php");
        }else{
            $_SESSION["createdSession"] = "0";
            header("Location: ../signup.php");
        }
    }
}
?>
