

    <html>
    
    <head>
        <title>Zayd | Contact us</title>
        <link rel="icon" type="image/x-icon" href="img/logo1.png">
        <link rel="stylesheet" href="css/master.css">
        <link rel="stylesheet" href="css/khaled.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
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
        <br>
        <br>
        <br>
        <br><br>
            <div class="container">
                <h2>Contact Us</h2>
                <form id="contact-form">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" required>
            
                    <label for="email">Email</label>
                    <input type="text" id="email" name="email" required>
            
                    <label for="message">Message</label>
                    <textarea id="message" name="message" rows="5" required></textarea>
            
                    <input type="submit" value="Submit">
                </form>
                <div id="error-message" class="error"></div>
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
        <script src="js/main.js"></script>
        <script src="js/khaled.js"></script>
    
    </body>
    
    </html>