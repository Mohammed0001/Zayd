<?php
session_start();
include "../includes/db-connect.php";
if ($_GET["type"] == "sellproduct") {
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
    //".$_COOKIE["SSN"]."
    $sql = "INSERT INTO  `product`(`id`, `name`, `bidExpiry`, `minBid`,`currentBid` , `description`, `status`, `categoryName`, `userID`) VALUES ('".$_POST['id']."' ,'".$_POST['name']."' ,'".$_POST['bidExpiry']."','".$_POST['minBid']."' ,'".$_POST['currentBid']."','Location : " . $_POST["location"].$_POST['description']."','".$_POST['status']."','".$_POST['category']."','1234567')";
    if ($conn->query($sql)) {
        echo "DONE";
        $_SESSION["createdSession"] = "1";
        header("Location: ../sellproduct.php");
    }else{
        $_SESSION["createdSession"] = "0";
        header("Location: ../sellproduct.php");
    }
}

?>