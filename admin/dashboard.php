<html>

<head>
    <base href="../">
    <link rel="icon" type="image/x-icon" href="img/logo1.png">
    <title>Zayd | Dashboard</title>
    <link rel="stylesheet" href="css/master.css">
    <link rel="stylesheet" href="css/bakr.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/af3e7165d7.js" crossorigin="anonymous"></script>
</head>

<body>
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

    <div class="dashboardNav web">
        <div class="profileImage">
            <img src="img/myPic.jpg" id="userImage" alt="MyProfilePicture">
        </div>
        <sapn class="profileDetails" id="userName">
            Hi! Mohammed
        </sapn>
        <div class="mainContent">
            <ul id="dashboardNav">
                <li id="myProfileBtn" class="active" view-data="myProfile"><i class="fa fa-user"></i> My Profile</li>
                <li><a href="admin/manageProducts.php" style="color: #fff;"><i class="fa fa-list"></i> Manage Product Sell Requests</a></li>
                <li><a href="admin/addCategory.php" style="color: #fff;"><i class="fa fa-plus"></i> Add Category</a></li>
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
                <li id="myProfileBtnMob"view-data="myProfile"><i class="fa fa-user"></i></li>
                <li><a href="admin/manageProducts.php" style="color: #fff;"><i class="fa fa-list"></i></a></li>
               
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
        <div class="content" id="myProfile">
            <h1>My Profile</h1>
            <form class="myProfileForm">
                    <div class="group">
                        <label class="small ifta-label" for="ssn">SSN</label>
                        <input type="number" class="ifta-field" id="ssn" disabled placeholder="12345678901234" />
                    </div>
                    <div class="group">
                        <label class="small ifta-label" for="name">Name</label>
                        <input type="text" name="name" class="ifta-field" id="name" placeholder="Bakr" />
                    </div>
                    <div class="group">
                        <label class="small ifta-label" for="username">Username</label>
                        <input type="text" name="username" class="ifta-field" id="username" placeholder="bakoor" />
                    </div>

                    <div class="group">
                        <label class="small ifta-label" for="email">Email</label>
                        <input type="email" name="email" class="ifta-field" id="email" placeholder="example@example.com" />
                    </div>

                    <!-- <div class="group">
                        <label class="small ifta-label" for="phonenumber">Phone Number</label>
                        <input type="text" class="ifta-field" id="phonenumber" placeholder="+20 100 379 4005" />
                    </div> -->

                    <div class="group">
                        <label class="small ifta-label" for="dateofbirth">Date Of Birth</label>
                        <input type="date" class="ifta-field" name="dateofbirth" id="dateofbirth" placeholder="24/5/2003"  />
                    </div>

                    <div class="group">
                        <label class="small ifta-label" for="password">Password</label>
                        <input type="password" name="password" class="ifta-field" id="password" disabled placeholder="••••••••••" />
                        <i id="showPassword" password-field="password" class="fa fa-eye"></i>
                    </div>
            
                    <div class="col-xs-12">
                        <button type="button" id="submitForm" class="updateDetails">Update Details</button>
                    </div>
            </form>
        </div>
       
        </div>
      

    <script src="js/main.js"></script>
    <script src="js/bakr.js"></script>
    
</body>

</html>