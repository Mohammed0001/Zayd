<html>
      <?php  include "../includes/db-connect.php";
session_start();
    if (!isset($_COOKIE["SSN"])) {
        header("Location: ../login.php");
    }else{
        if ($_COOKIE["type"] == "user") {
            header("Location: ../dashboard.php");
        }
    }
?>
<head>
    <base href="../">
    <link rel="icon" type="image/x-icon" href="img/logo1.png">
    <title>Zayd | Manage Products</title>
    <link rel="stylesheet" href="css/master.css">
    <link rel="stylesheet" href="css/bakr.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/af3e7165d7.js" crossorigin="anonymous"></script>
</head>

<body>
   <?php include "../includes/navbar.php";?>

    <div class="dashboardNav web">
        <div class="profileImage">
            <img src="img/myPic.jpg" id="userImage" alt="MyProfilePicture">
        </div>
        <sapn class="profileDetails" id="userName">
            Hi! Mohammed
        </sapn>
        <div class="mainContent">
            <ul id="dashboardNav">
                <li><a href="admin/dashboard.php" style="color: #fff;"><i class="fa fa-user"></i> My Profile</a></li>
                <li class="active"><a style="color: #fff;"><i class="fa fa-list"></i> Manage Product Sell Requests</a></li>
                <li><a href="admin/addCategory.php" style="color: #fff;"><i class="fa fa-plus"></i>Add Category</a></li>
                <li><a href="admin/addAdmin.php" style="color: #fff;"><i class="fa fa-user-plus"></i> Add Admin</a></li>
                <li><a href="admin/viewAdmin.php" style="color: #fff;"><i class="fa fa-users"></i> View Admins</a></li>
                <!-- <li id="myProductsBtn" view-data="myProducts"><i class="fa fa-table"></i> Manage Products</li> -->
            </ul>
        </div>
        <div class="secondaryContent">
            <ul>
                <li><a href="index.php"><i class="fa fa-home"></i> Home</a></li>
                <li><a href="liveAuctions.php"><i class="fa fa-clock"></i> Live Auctions</a></li>
                <li><a href="categories.php"><i class="fa fa-layer-group"></i> Categories</a></li>
                <li><a href="about.php"><i class="fa fa-address-card"></i> About-us</a></li>
                <li><a href="contact.php"><i class="fa fa-phone"></i> Contact-us</a></li>
            </ul>
        </div>
        <div class="logoutBtn">
            <button id="logoutBtn"><i class="fa fa-sign-out"></i> Logout</button>
        </div>
    </div>

    <div class="dashboardNav mobile">
        
        <div class="mainContent">
            <ul id="dashboardNav">
                <li class="active"><a href="admin/dashboard.php" style="color: #fff;width: 100%;"><i class="fa fa-user"></i></a></li>
                <li><i class="fa fa-list"></i></li>
                <!-- <li id="myProductsBtnMob" view-data="myProducts"><i class="fa fa-table"></i></li> -->
           
            </ul>
        </div>
        <!-- <div class="secondaryContent">
            <ul>
                <li><a href="sellProduct.php"><i class="fa fa-plus"></i></a></li>
                <li><a href="index.php"><i class="fa fa-home"></i></a></li>
                <li><a href="liveAuctions.php"><i class="fa fa-clock"></i></a></li>
                <li><a href="categories.php"><i class="fa fa-layer-group"></i></a></li>
                <li><a href="about.php"><i class="fa fa-address-card"></i></a></li>
                <li><a href="contact.php"><i class="fa fa-phone"></i></a></li>
            </ul>
        </div> -->
        <div class="logoutBtn">
            <button id="logoutBtn"><i class="fa fa-sign-out"></i></button>
        </div>
    </div>

    <div class="dashboardContent">

        <div class="content">
            <h1>Manage Products</h1>
            <div class="productsContainer">

                        <?php
                //current bid , primary image , current price count bidders , 
                $sql = "SELECT p.*, 
                   (SELECT COUNT(DISTINCT userID) FROM bid WHERE productID = p.id) AS bidders_count,
                   (SELECT `file` FROM pimage WHERE pID = p.id AND isPrimary = '1') AS mainImage
            FROM product p  WHERE `status` = 'pending';";
                $result = $conn->query($sql); 
                $duration = 86400 * 30;
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo '
                                         <div class="productCard">
                    <div class="mainData">
                        <img src="'.$row["mainImage"].'" alt="MyProduct">
                        <div class="details">
                            <h3 class="pName">'.$row["name"].'</h3>
                            <span class="price">'.$row["currentBid"].'EGP <span class="bidders"><i class="fa fa-gavel"></i> '.$row["bidders_count"].'</span></span>
                        </div>
                    </div>
                    <div class="secondaryData hide">
                        <div class="details">
                            <h3 class="pName">'.$row["name"].'</h3>
                            <p class="pDesc">'.$row["description"].'.</p>
                            <span id="price">Starting Price: '.$row["currentBid"].' EGP </span>
                            <span id="price">Min Bid: '.$row["minBid"].' EGP </span>
                            <span id="timeleft">Closure Time : '.$row["bidExpiry"].' <i class="fa fa-hourglass-start"></i>
                            </span>
                            <button class="editProduct success" onclick="acceptProduct('.$row["id"].')">Accept</button>
                            <button class="editProduct danger" onclick="rejectProduct('.$row["id"].')">Reject</button>
                        </div>
                    </div>
                </div>';
                    }
                }else{echo "No Products to manage.";}
            ?>

            </div>
        </div>
    </div>
    <?php if (isset($_SESSION["pAcceptance"])) {
                if ($_SESSION["pAcceptance"] =="1") {?>
                <div class="alert success">
                    <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                    Accepted Successfully!
                </div>
        <?php }else if($_SESSION["pAcceptance"] =="2"){?>
            <div class="alert success">
                    <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                    Rejected Successfully!
                </div>
        <?php }else {?>
            <div class="alert danger">
                    <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                    Error ! Setting Status
                </div>
        <?php } unset($_SESSION["pAcceptance"]);
     } ?>
    <script src="js/main.js"></script>
    <script src="js/bakr.js"></script>

</body>

</html>