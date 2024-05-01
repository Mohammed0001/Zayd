<html>

<head>

    <title>Zayd | Payment</title>
    <link rel="stylesheet" href="css/master.css">
    <link rel="icon" type="image/x-icon" href="img/logo1.png">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="Stylesheet" href="css/kareem/kareemP.css">
    <script src="https://kit.fontawesome.com/af3e7165d7.js" crossorigin="anonymous"></script>

</head>

<body>

    <?php include "includes/navbar.php";?>


    <div class="mobile-nav">
        <div class="searchForm">
            <!-- <input type="search" name="search" id="searchInput" placeholder="Search.."> -->
            <button id="navigateToSearch">&#x1F50E;&#xFE0E;</button>
        </div>
        <a href="#"><img src="img/logo.png" alt="Zayed"></a>
        <div><button id="openNav">&#8801;</button></div>
    </div>

    <div class="mobile-menu hide-Nav" id="mobile-menu">
        <span id="closeNav">&times;</span>

        <ul>
            <li><a href="#">Live Auctions</a></li>
            <li><a href="#">Categories</a></li>
            <li><a href="#">Home</a></li>
            <li><a href="#">About-us</a></li>
            <li><a href="#">Contact-us</a></li>
        </ul>

        <div class="profileBtn">
            <button class="login-button">Login</button>
            <button class="login-button">Signup</button>
            <button class="login-button hide">Profile</button>
        </div>

    </div>

    <div class="search-nav hide" id="search-nav">
        <span class="exit" id="exit">&times;</span>
        <input type="search" name="search" id="searchInputMobile" placeholder="Search..">
        <button>&#x1F50E;&#xFE0E;</button>
    </div>

    <div class="wrapper">
        <div class="credit-card" id="card">
    
          <!-- Front Face Of Card -->
          <div class="card-front">
    
            <!-- Visa/Chip Logos -->
            <div class="logos">
              <img src="img/chip.png" class="chip-img" />
              <img src="img/visa.png" class="visa-logo" />
            </div>

            <div>           
                 <img src="img/wirless.png" class="wirless-logo" />
            </div>
    
            <!-- Card Number With 4 Spans[4 spaces] -->
            <div class="card-number">
    
              <!-- <div><span class="card-number-title">Card Number</span></div> -->
    
              <div>
                <span class="card-number-display">_</span>
                <span class="card-number-display">_</span>
                <span class="card-number-display">_</span>
                <span class="card-number-display">_</span>
              </div>
    
              <div>
                <span class="card-number-display">_</span>
                <span class="card-number-display">_</span>
                <span class="card-number-display">_</span>
                <span class="card-number-display">_</span>
              </div>
    
              <div>
                <span class="card-number-display">_</span>
                <span class="card-number-display">_</span>
                <span class="card-number-display">_</span>
                <span class="card-number-display">_</span>
              </div>
    
              <div>
                <span class="card-number-display">_</span>
                <span class="card-number-display">_</span>
                <span class="card-number-display">_</span>
                <span class="card-number-display">_</span>
              </div>
    
            </div>
    
            <!-- Card Details -->
            <div class="details">
    
              <!-- Card Holder Name -->
              <div>
    
                <span>CARD HOLDER NAME</span>
    
                <div>
                  <span id="card-holder-name">Your Name Here</span>
                </div>
    
              </div>
    
              <!-- Card Expiration Date -->
              <div>
    
                <span>VALID THRU</span>
    
                <div>
                  <span id="validity">00/00</span>
                </div>
    
              </div>
    
            </div>
    
            <div>           
              <img src="img/mastercard.png" class="mastercard-logo" />
            </div>
          
          </div>
    
          <!-- Back Face Of Card -->
          <div class="card-back">
    
            <!-- Black Strip -->
            <div class="black-strip"></div>
    
            <!-- White Strip and CVV -->
            <div class="white-strip">
              <span>CVV</span>
              <div id="cvv-display"></div>
            </div>
    
            <!-- Visa Logo -->
            <img src="img/visa.png" class="visa-logo" />
    
          </div>
    
        </div>
    
        <form method="post" action="functions/kareem.php?type=payment">

          <input type="hidden" name="PID" value="<?php echo $_GET['PID'];?>">

          <label for="card-number">Amount</label>
          <input type="text" name="amount" value="<?php echo $_GET['amount'];?>" disabled/>

          <label for="card-number">Card Number</label>
          <input type="number" name="card_number" id="card-number" placeholder="1234 1234 1234 1234" />

          <label for="card-holder">Card Holder</label>
          <input type="text" name="card_name" id="card-name-input" placeholder="Your Name" />
    
          <div class="date-cvv">
    
            <!-- Expiration Date -->
            <div>
              <label for="validity">Expires On:</label>
              <input type="date" name="date" id="validity-input" />
            </div>
    
            <!-- CVV -->
            <div>
              <label for="cvv">CVV</label>
              <input type="password" name="cvv" id="cvv" placeholder="***" />
            </div>
    
          </div>
          <br>
      <br>
      <br>
          <div>
          <button type="submit" class="pay-btn">Pay Now</button>
        </div>
        </form>
    
        

      </div>

   <?php include "includes/footer.php";?>

    <script src="js/kareem/kareemP.js"></script>
    <script src="js/main.js"></script>

</body>

</html>