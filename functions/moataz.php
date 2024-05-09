<?php
session_start();
include "../includes/db-connect.php";
if ($_GET["type"] == "sellproduct") {
    $target_dir = "img/uploads/productPic/";
    $countfiles = count($_FILES['pImage']['name']);
    $isPrimary = 1;
    $sql = "INSERT INTO  `product`( `name`, `bidExpiry`, `minBid`,`currentBid` , `description`, `status`, `categoryName`, `userID`) VALUES ('".$_POST['name']."' ,'".$_POST['bidExpiry']."','".$_POST['minBid']."' ,'".$_POST['currentBid']."','Location : " . $_POST["location"] . " ".$_POST['description']."','pending','".$_POST['category']."','".$_COOKIE["SSN"]."')";
    if ($conn->query($sql)) {
        $pid = $conn->insert_id;
        for ($i = 0; $i < $countfiles; $i++) {
            $randomNumber = rand();
            $_FILES['pImage']['name'][$i] = $randomNumber .".png" ;
            $file_name = $_FILES['pImage']['name'][$i];
            move_uploaded_file($_FILES['pImage']['tmp_name'][$i],"../img/uploads/productPic/".$file_name);
            $target_file = $target_dir . basename($_FILES["pImage"]["name"][$i]);
            $sqlImages = "INSERT INTO pimage (`pID`,`file` , `isPrimary`) VALUES ('$pid','$target_file' , '$isPrimary'); ";
            $isPrimary = 0;
            $conn->query($sqlImages);
        }
        echo "DONE";
        $_SESSION["createdSession"] = "1";
        header("Location: ../sellproduct.php");
    }else{
        $_SESSION["createdSession"] = "0";
        echo "non";
        header("Location: ../sellproduct.php");
    }
    
}else if($_GET["type"] == "categories"){
    $sql = "INSERT INTO  `category` (`name`, `iconCode`) VALUES ('".$_POST['name']."','".$_POST['iconCode']."')";
    if ($conn->query($sql)) {
    echo "DONE";
    $_SESSION["createdSession"] = "1";
    header("Location: ../admin/addCategory.php");
    }
    else{
    $_SESSION["createdSession"] = "0";
    echo "non";
    header("Location: ../admin/addCategory.php");
}
} else if ($_GET["type"] == "addAdmin") {
    $target_dir = "img/uploads/pPic/";
    $randomNumber = rand(); 
    $_FILES['pImage']['name'] = $randomNumber .".png" ;
    $file_name = $_FILES['pImage']['name'];
    $file_size =$_FILES['pImage']['size'];
    $file_tmp =$_FILES['pImage']['tmp_name'];
    $file_type=$_FILES['pImage']['type'];
    $target_file = $target_dir . basename($_FILES["pImage"]["name"]);
    move_uploaded_file($file_tmp,"../img/uploads/pPic/".$file_name);
    $sql = "INSERT INTO  `users`(`SSN`, `name`, `email`, `password`, `username`, `dateOfBirth`, `image`, `type`) VALUES ('".$_POST['SSN']."' ,'".$_POST['name']."' ,'".$_POST['email']."','".$_POST['password']."' ,'".$_POST['username']."','".$_POST['dateOfBirth']."','".$target_file."','admin')";
    if ($conn->query($sql)) {
        echo "DONE";
        $_SESSION["createdSession"] = "1";
        header("Location: ../admin/addAdmin.php");
    }else{
        $_SESSION["createdSession"] = "0";
        header("Location: ../admin/addAdmin.php");
    }
}
else if ($_GET["type"] == "") {
 
}


?>