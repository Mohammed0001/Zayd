<html>
        <?php include "../includes/navbar.php";
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
                <div class="productCard">
                    <div class="mainData">
                        <img src="https://americancollectors.com/wp-content/uploads/1st-article-photo-1-690x370-1.jpg" alt="MyProduct">
                        <div class="details">
                            <h3 class="pName">Antique Mahogany Writing Desk</h3>
                            <span class="price">1,000 EGP <span class="bidders"><i class="fa fa-gavel"></i> 10</span></span>
                        </div>
                    </div>
                    <div class="secondaryData hide">
                        <div class="details">
                            <h3 class="pName">Antique Mahogany Writing Desk</h3>
                            <p class="pDesc">Beautifully crafted antique writing desk made from solid mahogany wood. Features intricate
                                carvings and a leather writing surface. Ideal for collectors or antique enthusiasts.</p>
                            <span id="price">Starting Price: 1,000 EGP </span>
                            <span id="price">Min Bid: 150 EGP </span>
                            <span id="timeleft">Closure Time : April 30, 2024, 5:00 PM (EST) <i class="fa fa-hourglass-start"></i>
                            </span>
                            <button class="editProduct success">Accept</button>
                            <button class="editProduct danger">Reject</button>
                        </div>
                    </div>
                </div>
                <div class="productCard">
                    <div class="mainData">
                        <img src="https://americancollectors.com/wp-content/uploads/1st-article-photo-1-690x370-1.jpg" alt="MyProduct">
                        <div class="details">
                            <h3 class="pName">Antique Mahogany Writing Desk</h3>
                            <span class="price">1,000 EGP <span class="bidders"><i class="fa fa-gavel"></i> 10</span></span>
                        </div>
                    </div>
                    <div class="secondaryData hide">
                        <div class="details">
                            <h3 class="pName">Antique Mahogany Writing Desk</h3>
                            <p class="pDesc">Beautifully crafted antique writing desk made from solid mahogany wood. Features intricate
                                carvings and a leather writing surface. Ideal for collectors or antique enthusiasts.</p>
                            <span id="price">Starting Price: 1,000 EGP </span>
                            <span id="price">Min Bid: 150 EGP </span>
                            <span id="timeleft">Closure Time : April 30, 2024, 5:00 PM (EST) <i class="fa fa-hourglass-start"></i>
                            </span>
                            <button class="editProduct success">Accept</button>
                            <button class="editProduct danger">Reject</button>
                        </div>
                    </div>
                </div>
                <div class="productCard">
                    <div class="mainData">
                        <img src="https://americancollectors.com/wp-content/uploads/1st-article-photo-1-690x370-1.jpg" alt="MyProduct">
                        <div class="details">
                            <h3 class="pName">Antique Mahogany Writing Desk</h3>
                            <span class="price">1,000 EGP <span class="bidders"><i class="fa fa-gavel"></i> 10</span></span>
                        </div>
                    </div>
                    <div class="secondaryData hide">
                        <div class="details">
                            <h3 class="pName">Antique Mahogany Writing Desk</h3>
                            <p class="pDesc">Beautifully crafted antique writing desk made from solid mahogany wood. Features intricate
                                carvings and a leather writing surface. Ideal for collectors or antique enthusiasts.</p>
                            <span id="price">Starting Price: 1,000 EGP </span>
                            <span id="price">Min Bid: 150 EGP </span>
                            <span id="timeleft">Closure Time : April 30, 2024, 5:00 PM (EST) <i class="fa fa-hourglass-start"></i> </span>
                            <button class="editProduct success">Accept</button>
                            <button class="editProduct danger">Reject</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="js/main.js"></script>
    <script src="js/bakr.js"></script>

</body>

</html>