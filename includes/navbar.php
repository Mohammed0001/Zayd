<nav class="mainNav" id="mainNav">
    <div class="searchForm">
        <input type="search" name="search" id="searchInput" placeholder="Search..">
        <button>&#x1F50E;&#xFE0E;</button>
    </div>
    <a href="index.php"><img src="img/logo.png" alt="Zayed"></a>
    <div class="profileBtn">
        <?php if (isset($_COOKIE["SSN"])) {?>
         <a class="login-button" href="dashboard.php">Profile</a>
        <?php } else {?>
            
            <a class="login-button" href="login.php">Login</a>
            <a class="login-button" href="signup.php">Signup</a>
            
       <?php } ?> 
    </div>
</nav>
<div class="secondary-nav" id="secondary-nav">
    <ul>
        <li><a href="liveAuctions.php">Live Auctions</a></li>
        <li><a href="categories.php">Categories</a></li>
        <li><a href="index.php">Home</a></li>
        <li><a href="about.php">About-us</a></li>
        <li><a href="contact.php">Contact-us</a></li>
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
        <li><a href="liveAuctions.php">Live Auctions</a></li>
        <li><a href="categories.php">Categories</a></li>
        <li><a href="index.php">Home</a></li>
        <li><a href="about.php">About-us</a></li>
        <li><a href="contact.php">Contact-us</a></li>
    </ul>
    <div class="profileBtn">
         <?php if (isset($_COOKIE["SSN"])) {?>
         <a class="login-button" href="dashboard.php">Profile</a>
        <?php } else {?>
            <a class="login-button" href="login.php">Login</a>
            <a class="login-button" href="signup.php">Signup</a>
        <?php } ?> 
    </div>
</div>
<div class="search-nav hide" id="search-nav">
    <span class="exit" id="exit">&times;</span>
    <input type="search" name="search" id="searchInputMobile" placeholder="Search..">
    <button>&#x1F50E;&#xFE0E;</button>
</div>