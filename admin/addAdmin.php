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
    <link rel="stylesheet" href="css/moataz/MoatazCSS2.css"> 
    <link rel="stylesheet" href="css/master.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/af3e7165d7.js" crossorigin="anonymous"></script>

     <style>
        .secondary-nav{display:none;}
    </style>

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
                <li><a href="admin/manageProducts.php" style="color: #fff;"><i class="fa fa-list"></i> Manage Product Sell Requests</a></li>
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
            <h1>Add Admin</h1>
            <form class="SellProductForm" action="functions/moataz.php?type=addAdmin" method="post" id="sellproductform" enctype="multipart/form-data">
           
           
    

        
                <p style="color: red;" id="titleMsg"></p>
    <div class="group" >
        <label class="small ifta-label" for="Image">Personal photo</label>
        <input type="file" accept="Image/*" style="background-color:white;" class="ifta-field" placeholder="pImage" name="pImage" id="pImage">
    </div>
    <div class="group">
        <label class="small ifta-label" for="SSN">SSN</label>
        <input type="text" class="ifta-field" id="title" name="SSN" placeholder="Enter Admin SSN..." />
    </div>


    <p style="color: red;" id="titleMsg"></p>
    <div class="group">
        <label class="small ifta-label" for="Name">Name</label>
        <input type="text" class="ifta-field" id="title" name="name" placeholder="Enter Admin Name..." />
    </div>

    <p style="color: red;" id="titleMsg"></p>
    <div class="group">
        <label class="small ifta-label" for="Email">Email</label>
        <input type="text" class="ifta-field" id="title" name="email" placeholder="Enter Email" />
    </div>

    <p style="color: red;" id="titleMsg"></p>
    <div class="group">
        <label class="small ifta-label" for="Password">Password</label>
        <input type="text" class="ifta-field" id="title" name="password" placeholder="Enter Password" />
    </div>

    <p style="color: red;" id="titleMsg"></p>
    <div class="group">
        <label class="small ifta-label" for="username">username</label>
        <input type="text" class="ifta-field" id="title" name="username" placeholder="Enter Username" />
    </div>

    <p style="color: red;" id="titleMsg"></p>
    <div class="group">
        <label class="small ifta-label" for="dateOfBirth">dateOfBirth</label>
        <input type="date" class="ifta-field" id="title" name="dateOfBirth" placeholder="Enter Admin date Of Birth" />
    </div>

    <div class="button">
        <button type="submit" id="submitForm" class="updateDetails">Add Admin</button>
    </div>

        </div>
    </div>

    </form>
    <?php  if (isset($_SESSION["createdSession"])) {
                if ( $_SESSION["createdSession"] == "1") {?>
                    
                        <div class="alert success">
                            <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                            Admin added Successfully!
                        </div>
               <?php } else{?>
                <div class="alert danger">
                            <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                            Error adding Admin!
                        </div>
               <?php }
                    unset($_SESSION["createdSession"]);
                }
            
            ?>

    <script src="js/main.js"></script>
    <script src="js/bakr.js"></script>

</body>

        </html>