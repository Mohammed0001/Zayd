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
   
    table {
        width: 100%;
        border-collapse: collapse; 
    }

   
    th {
        background-color: #122620; 
        color: #d6ad60; 
        font-weight: bold; 
        padding: 12px; 
        text-align: left; 
        border-bottom: 1px solid #ddd; 
    }

    
    td {
        padding: 8px;
        text-align: left; 
        border-bottom: 1px solid #ddd; 
    }

  
    tr:hover {
        background-color: #d6ad60; 
    }
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
                <li class="active"><a href="admin/viewAdmin.php" style="color: #fff;"><i class="fa fa-users"></i> View Admins</a></li>
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
            <h1>View Admins</h1>

            <table>
  <tr>
    <th>SSN</th>
    <th>Name</th>
    <th>Email</th>
    <th>Username</th>
    <th>Date of birth</th>
  </tr>
  <?php
  include "../includes/db-connect.php";
                //current bid , primary image , current price count bidders , 
                $sql = "SELECT * FROM users WHERE `type` = 'admin'";
                $result = $conn->query($sql); 
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo ' <tr>
                        <td>'.$row["SSN"].'</td>
                        <td>'.$row["name"].'</td>
                        <td>'.$row["email"].'</td>
                        <td>'.$row["username"].'</td>
                        <td>'.$row["dateOfBirth"].'</td>
                      </tr>';
                    }
                }
            ?>
  
</table>
           


    <script src="js/main.js"></script>
    <script src="js/bakr.js"></script>
    <script>
        document.getElementById("userDataScript").onload = function () { 
            if (userData["type"] == "user") {
                    window.location.href = 'admin/dashboard.html';
            };
         };
    </script>
</body>

</html>