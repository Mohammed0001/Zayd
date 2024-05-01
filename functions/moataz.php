<?php
session_start();
include "../includes/db-connect.php";
if ($_GET["type"] == "sellproduct") {
    $target_dir = "img/uploads/productPic/";
    $countfiles = count($_FILES['pImage']['name']);
    $isPrimary = 1;
    $sql = "INSERT INTO  `product`( `name`, `bidExpiry`, `minBid`,`currentBid` , `description`, `status`, `categoryName`, `userID`) VALUES ('".$_POST['name']."' ,'".$_POST['bidExpiry']."','".$_POST['minBid']."' ,'".$_POST['currentBid']."','Location : " . $_POST["location"].$_POST['description']."','pending','".$_POST['category']."','1234567')";
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
        // header("Location: ../sellproduct.php");
    }else{
        $_SESSION["createdSession"] = "0";
        echo "non";
        // header("Location: ../sellproduct.php");
    }
    
   
    
}

?>