<html>
<?php
include "includes/db-connect.php";
session_start();
    if (!isset($_COOKIE["SSN"])) {
        header("Location: login.php");
    }
?>
<head>
    <link rel="icon" type="image/x-icon" href="img/logo1.png">
    <title>Zayd | Dashboard</title>
    <link rel="stylesheet" href="css/master.css">
    <link rel="stylesheet" href="css/bakr.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/af3e7165d7.js" crossorigin="anonymous"></script>
</head>

<body>
    <?php include "includes/navbar.php";?>
   <?php if (isset($_COOKIE["SSN"])) {?>
        <div class="alert">
            <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
            Error ! Updating Your data
        </div>
    <?php } ?>
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
                <li id="myProductsBtn" view-data="myProducts"><i class="fa fa-table"></i> My Products</li>
                <li id="currentBiddingsBtn" view-data="currentBiddings"><i class="fa fa-gavel"></i> Current Biddings</li>
                <li id="awardedAuctionsBtn" view-data="awardedAuctions"><i class="fa fa-star"></i> Awarded Auctions</li>
            </ul>
        </div>
        <div class="secondaryContent">
            <ul>
                <li><a href="index.php"><i class="fa fa-home"></i> Home</a></li>
                <li><a href="sellProduct.php"><i class="fa fa-plus"></i> Sell Product</a></li>
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
                <li id="myProductsBtnMob" view-data="myProducts"><i class="fa fa-table"></i></li>
                <li id="currentBiddingsBtnMob" view-data="currentBiddings"><i class="fa fa-gavel"></i></li>
                <li id="awardedAuctionsBtnMob" view-data="awardedAuctions"><i class="fa fa-star"></i></li>
            </ul>
        </div>
        <div class="secondaryContent">
            <ul>
                <li><a href="sellProduct.php"><i class="fa fa-plus"></i></a></li>
                <!-- <li><a href="index.php"><i class="fa fa-home"></i></a></li>
                <li><a href="liveAuctions.php"><i class="fa fa-clock"></i></a></li>
                <li><a href="categories.php"><i class="fa fa-layer-group"></i></a></li>
                <li><a href="about.php"><i class="fa fa-address-card"></i></a></li>
                <li><a href="contact.php"><i class="fa fa-phone"></i></a></li> -->
            </ul>
        </div>
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
                        <input type="text" class="ifta-field" id="name" placeholder="Bakr" />
                    </div>
                    <div class="group">
                        <label class="small ifta-label" for="username">Username</label>
                        <input type="text" class="ifta-field" id="username"  placeholder="bakoor" />
                    </div>

                    <div class="group">
                        <label class="small ifta-label" for="email">Email</label>
                        <input type="email" class="ifta-field" id="email" placeholder="example@example.com" />
                    </div>

                    <!-- <div class="group">
                        <label class="small ifta-label" for="phonenumber">Phone Number</label>
                        <input type="text" class="ifta-field" id="phonenumber" placeholder="+20 100 379 4005" />
                    </div> -->

                    <div class="group">
                        <label class="small ifta-label" for="dateofbirth">Date Of Birth</label>
                        <input type="date" class="ifta-field"  id="dateofbirth" placeholder="24/5/2003"  />
                    </div>

                    <div class="group">
                        <label class="small ifta-label" for="password">Password</label>
                        <input type="password" class="ifta-field" id="password" disabled placeholder="••••••••••" />
                        <i id="showPassword" password-field="password" class="fa fa-eye"></i>
                    </div>
            
                    <div class="col-xs-12">
                        <button type="button" id="submitForm" class="updateDetails">Update Details</button>
                    </div>
            </form>
        </div>
         
        <div class="content hide" id="myProducts">
            <h1>My Products</h1>
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
                            <p class="pDesc">Beautifully crafted antique writing desk made from solid mahogany wood. Features intricate carvings and a leather writing surface. Ideal for collectors or antique enthusiasts.</p>
                            <span id="price">Current Price: 1,000 EGP </span>
                            <span id="price">Min Bid: 150 EGP </span>
                            <span id="bidders">Bidders: 10 <i class="fa fa-gavel"></i></span>
                            <span id="timeleft">Time Left: 10 Sec <i class="fa fa-hourglass-start"></i> </span>
                            <button class="editProduct">Edit Details</button>
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
                            <span id="price">Current Price: 1,000 EGP </span>
                            <span id="price">Min Bid: 150 EGP </span>
                            <span id="bidders">Bidders: 10 <i class="fa fa-gavel"></i></span>
                            <span id="timeleft">Time Left: 10 Sec <i class="fa fa-hourglass-start"></i> </span>
                            <button class="editProduct">Edit Details</button>

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
                            <span id="price">Current Price: 1,000 EGP </span>
                            <span id="price">Min Bid: 150 EGP </span>
                            <span id="bidders">Bidders: 10 <i class="fa fa-gavel"></i></span>
                            <span id="timeleft">Time Left: 10 Sec <i class="fa fa-hourglass-start"></i> </span>
                            <button class="editProduct">Edit Details</button>
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
                            <span id="price">Current Price: 1,000 EGP </span>
                            <span id="price">Min Bid: 150 EGP </span>
                            <span id="bidders">Bidders: 10 <i class="fa fa-gavel"></i></span>
                            <span id="timeleft">Time Left: 10 Sec<i class="fa fa-hourglass-start"></i> </span>
                            <button class="editProduct">Edit Details</button>
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
                            <span id="price">Current Price: 1,000 EGP </span>
                            <span id="price">Min Bid: 150 EGP </span>
                            <span id="bidders">Bidders: 10 <i class="fa fa-gavel"></i></span>
                            <span id="timeleft">Time Left: 10 Sec <i class="fa fa-hourglass-start"></i> </span>
                            <button class="editProduct">Edit Details</button>
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
                            <span id="price">Current Price: 1,000 EGP </span>
                            <span id="price">Min Bid: 150 EGP </span>
                            <span id="bidders">Bidders: 10 <i class="fa fa-gavel"></i></span>
                            <span id="timeleft">Time Left: 10 Sec <i class="fa fa-hourglass-start"></i> </span>
                            <button class="editProduct">Edit Details</button>
                        </div>
                    </div>
                </div>
                
                
            </div>
        </div>
        <div class="content hide" id="currentBiddings">
            <h1>Current Biddings</h1>
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
                            <span id="price">Current Price: 1,000 EGP </span>
                            <span id="price">Min Bid: 150 EGP </span>
                            <span id="bidders">Bidders: 10 <i class="fa fa-gavel"></i></span>
                            <span id="timeleft">Time Left: 10 Sec <i class="fa fa-hourglass-start"></i> </span>
                            <br>
                            <a class="editProduct" href="bidding.php?product=id">Let it be yours BID!</a>
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
                            <span id="price">Current Price: 1,000 EGP </span>
                            <span id="price">Min Bid: 150 EGP </span>
                            <span id="bidders">Bidders: 10 <i class="fa fa-gavel"></i></span>
                            <span id="timeleft">Time Left: 10 Sec <i class="fa fa-hourglass-start"></i> </span>
                            <br>
                            <a class="editProduct" href="bidding.php?product=id">Let it be yours BID!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content hide" id="awardedAuctions">
            <h1>Awarded Auctions</h1>
            <div class="productsContainer">
                <?php
                //current bid , primary image , current price count bidders , 
                // $sql = "SELECT product.* , file  FROM product, pImage bid, WHERE pImage.isPrimary = 1 AND "; 
                // $result = $conn->query($sql); 
                // $duration = 86400 * 30;
                // if ($result->num_rows > 0) {
                //     while($row = $result->fetch_assoc()) {
                //         echo '
                //         <div class="productCard">
                //             <div class="mainData">
                //                 <img src="https://americancollectors.com/wp-content/uploads/1st-article-photo-1-690x370-1.jpg" alt="MyProduct">
                //                 <div class="details">
                //                     <h3 class="pName">Antique Mahogany Writing Desk</h3>
                //                     <span class="price">1,000 EGP</span>
                //                 </div>
                //             </div>
                //             <div class="secondaryData hide">
                //                 <div class="details">
                //                     <h3 class="pName">Antique Mahogany Writing Desk</h3>
                //                     <p class="pDesc">Beautifully crafted antique writing desk made from solid mahogany wood. Features intricate
                //                         carvings and a leather writing surface. Ideal for collectors or antique enthusiasts.</p>
                //                     <span id="price">Awarded At: 1,000 EGP </span>
                //                 </div>
                //             </div>
                //         </div>
                //         ';
                //     }
                // }
            ?>
                
                <div class="productCard">
                    <div class="mainData">
                        <img src="https://americancollectors.com/wp-content/uploads/1st-article-photo-1-690x370-1.jpg" alt="MyProduct">
                        <div class="details">
                            <h3 class="pName">Antique Mahogany Writing Desk</h3>
                            <span class="price">1,000 EGP</span>
                        </div>
                    </div>
                    <div class="secondaryData hide">
                        <div class="details">
                            <h3 class="pName">Antique Mahogany Writing Desk</h3>
                            <p class="pDesc">Beautifully crafted antique writing desk made from solid mahogany wood. Features intricate
                                carvings and a leather writing surface. Ideal for collectors or antique enthusiasts.</p>
                            <span id="price">Awarded at: 1,000 EGP </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- <script src="js/userData.js"></script> -->
    <script src="js/main.js"></script>
    <script src="js/bakr.js"></script>
    <!-- <script>
        document.getElementById("userDataScript").onload = function () { 
            if (userData["type"] == "admin") {
                    window.location.href = 'admin/dashboard.php';
            };
         };
    </script> -->
</body>

</html>