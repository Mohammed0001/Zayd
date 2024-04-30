<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Zayd | Categories</title>
    <link rel="icon" type="image/x-icon" href="img/logo1.png">

  <link rel="stylesheet" href="css/master.css">
  <link rel="stylesheet" href="css/nashwa.css">
  <script src="https://kit.fontawesome.com/af3e7165d7.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>


  <style>h2 {
    color: #122620;
    text-align: center;
    font-size: 30px;
    display: block;
    width: 100%;
  }</style>
</head>
<body>
    <nav class="mainNav" id="mainNav">
        <div class="searchForm">
            <input type="search" name="search" id="searchInput" placeholder="Search..">
            <button>&#x1F50E;&#xFE0E;</button>
        </div>
        <a href="index.html"><img src="img/logo.png" alt="Zayed"></a>
        <div class="profileBtn">
            <a class="login-button" href="login.html">Login</a>
            <a class="login-button" href="signup.html">Signup</a>
            <a class="login-button hide" href="dashboard.html">Profile</a>
        </div>
    </nav>
    <div class="secondary-nav" id="secondary-nav">
        <ul>
            <li><a href="liveAuctions.html">Live Auctions</a></li>
            <li><a href="categories.html">Categories</a></li>
            <li><a href="index.html">Home</a></li>
            <li><a href="about.html">About-us</a></li>
            <li><a href="contact.html">Contact-us</a></li>
        </ul>
    </div>
    <div class="mobile-nav">
        <div class="searchForm">
            <!-- <input type="search" name="search" id="searchInput" placeholder="Search.."> -->
            <button id="navigateToSearch">&#x1F50E;&#xFE0E;</button>
        </div>
        <a href="index.html"><img src="img/logo.png" alt="Zayed"></a>
        <div><button id="openNav">&#8801;</button></div>
    </div>
    <div class="mobile-menu hide-Nav" id="mobile-menu">
        <span id="closeNav">&times;</span>
        <ul>
            <li><a href="liveAuctions.html">Live Auctions</a></li>
            <li><a href="categories.html">Categories</a></li>
            <li><a href="index.html">Home</a></li>
            <li><a href="about.html">About-us</a></li>
            <li><a href="contact.html">Contact-us</a></li>
        </ul>
        <div class="profileBtn">
            <a class="login-button" href="login.html">Login</a>
            <a class="login-button" href="signup.html">Signup</a>
            <a class="login-button hide" href="dashboard.html">Profile</a>
        </div>
    </div>
    <div class="search-nav hide" id="search-nav">
        <span class="exit" id="exit">&times;</span>
        <input type="search" name="search" id="searchInputMobile" placeholder="Search..">
        <button>&#x1F50E;&#xFE0E;</button>
    </div>
    <div class="categCont">

    <h2>
        CATEGORIES
    </h2>
    <div class="categContent">

        <button id="prevBtn" class="navCatButton"><i class="fa fa-caret-left"></i></button>
        
        <div class="categContainer" >
            <a class="categCard"  href="liveAuctions.html?category=Cars">
                <i class="fa fa-car"></i>
                <h3>CARS</h3>
            </a>
            
            
            <a class="categCard" href="liveAuctions.html?category=plates">
                <i class="fa fa-id-card"></i>
                <h3>CAR PLATES</h3>
            </a>

            <a class="categCard" href="liveAuctions.html?category=apartment">
                <i class="fa fa-building"></i>
                <h3>APARTMENT</h3>
            </a>

            <a class="categCard"  href="liveAuctions.html?category=land">
                <i class="fa fa-mountain"></i>
                <h3>LAND</h3>
            </a>
            
            <a class="categCard"   href="liveAuctions.html?category=paints">
                <i class="fa fa-paint-roller"></i>
                <h3>PAINTINGS</h3>
            </a>
            
            <a class="categCard"   href="liveAuctions.html?category=paints">
                <i class="fa fa-chair"></i>
                <h3>Antiques</h3>
            </a>
            
            <a class="categCard"  href="liveAuctions.html?category=JEWELRY">
                <i class="fa fa-gem"></i>
                <h3>JEWELRY</h3>
            </a>
            
        </div>
        <button id="nextBtn" class="navCatButton"><i class="fa fa-caret-right"></i></button>
    </div>
    </div>

            <footer>
                <span>
                    <a href="faq.html">FAQs</a>
                </span>
                <p>
                    &copy; 2024 <a href="#">www.zayd.com</a>. All Rights Reserved
                </p>
                <span>
                    <a href="privacy.html">Privacy Policy</a> |
                    <a href="terms.html">Terms & Conditions</a>
                </span>
            </footer>
        <script src="js/Nashwa.js"></script>
        <script src="js/main.js"></script>
    </body>
    </html>