<html>
<head>
    <link rel="stylesheet" href="css/moataz/MoatazCSS.css">
    <link rel="stylesheet" href="css/master.css">
    <link rel="icon" type="image/x-icon" href="img/logo1.png">

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
<title>ZAYD | HOME</title>
</head>
<body>
        <?php include "includes/navbar.php" ?>

    <div class = "slideshow">
        
            <img class="slide-images" id="show"/>

    </div>
    

    
    
    
    
    <div class="container">
        <h1 class="note">Ending Soon!</h1>
        
        <div class="cards">
            
                        <?php
            include "includes/db-connect.php";
            
            $sql = "SELECT p.id , p.name, p.currentBid, p.bidExpiry, (SELECT COUNT(DISTINCT userID) FROM bid WHERE productID = p.id) AS bidders_count , (SELECT `file` FROM pimage  WHERE pID = p.id AND isPrimary = '1') AS mainImage FROM product p WHERE `status` = 'active' ORDER BY `bidExpiry` LIMIT 5";

            
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {

                    $datetime_from_database = $row["bidExpiry"];

                    // Convert the datetime from the database to a DateTime object
                    $database_datetime = new DateTime($datetime_from_database);

                    // Get the current datetime
                    $current_datetime = new DateTime();

                    // Calculate the difference
                    $time_left = $current_datetime->diff($database_datetime);

                    // Format the difference
                    $time_left_formatted = $time_left->format("%a D, %h H, %i M, %s S");


                    echo '<div class="product-card">
                            <div class="product-image">
                                <img src="' . $row["mainImage"] . '" alt="' . $row["name"] . '"/>
                            </div>
                            <div class="product-info">
                                    <p class="product-description">' . $row["name"] . '</p>
                                <strong class="product-price">
                                    <span>' . $row["currentBid"] . ' EGP</span>
                                    <button class="bid-now-btn" product-id="' . $row["id"] . '">Bid Now</button>
                                </strong>
                                <span class="bidders"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                            <path d="M144 0a80 80 0 1 1 0 160A80 80 0 1 1 144 0zM512 0a80 80 0 1 1 0 160A80 80 0 1 1 512 0zM0 298.7C0 239.8 47.8 192 106.7 192h42.7c15.9 0 31 3.5 44.6 9.7c-1.3 7.2-1.9 14.7-1.9 22.3c0 38.2 16.8 72.5 43.3 96c-.2 0-.4 0-.7 0H21.3C9.6 320 0 310.4 0 298.7zM405.3 320c-.2 0-.4 0-.7 0c26.6-23.5 43.3-57.8 43.3-96c0-7.6-.7-15-1.9-22.3c13.6-6.3 28.7-9.7 44.6-9.7h42.7C592.2 192 640 239.8 640 298.7c0 11.8-9.6 21.3-21.3 21.3H405.3zM224 224a96 96 0 1 1 192 0 96 96 0 1 1 -192 0zM128 485.3C128 411.7 187.7 352 261.3 352H378.7C452.3 352 512 411.7 512 485.3c0 14.7-11.9 26.7-26.7 26.7H154.7c-14.7 0-26.7-11.9-26.7-26.7z"/>
                        </svg> ' . $row["bidders_count"] . '</span>
                        <span class="timeLeft">' . $time_left_formatted . '</span>
                            </div>
                          </div>';
                }
            } else {
                echo '<p>No products found.</p>';
            }
            ?>
       
        
            <!-- <div class="product-card">
                <div class="product-image">
                    <img src="img/moataz/fs5.jpg" />
                </div>
                <div class="product-info">
                    <p class="product-description">Luxury Furniture
                    </p>
                    <strong class="product-price">
                        <span>1,500,000 EGP</span>
                        <button class="bid-now-btn">Bid Now</button>
                    </strong>
                    <span class="bidders"><svg xmlns="http://www.w3.org/2000/svg"viewBox="0 0 640 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M144 0a80 80 0 1 1 0 160A80 80 0 1 1 144 0zM512 0a80 80 0 1 1 0 160A80 80 0 1 1 512 0zM0 298.7C0 239.8 47.8 192 106.7 192h42.7c15.9 0 31 3.5 44.6 9.7c-1.3 7.2-1.9 14.7-1.9 22.3c0 38.2 16.8 72.5 43.3 96c-.2 0-.4 0-.7 0H21.3C9.6 320 0 310.4 0 298.7zM405.3 320c-.2 0-.4 0-.7 0c26.6-23.5 43.3-57.8 43.3-96c0-7.6-.7-15-1.9-22.3c13.6-6.3 28.7-9.7 44.6-9.7h42.7C592.2 192 640 239.8 640 298.7c0 11.8-9.6 21.3-21.3 21.3H405.3zM224 224a96 96 0 1 1 192 0 96 96 0 1 1 -192 0zM128 485.3C128 411.7 187.7 352 261.3 352H378.7C452.3 352 512 411.7 512 485.3c0 14.7-11.9 26.7-26.7 26.7H154.7c-14.7 0-26.7-11.9-26.7-26.7z"/></svg> 5</span>
                   <!-- <span class="timeLeft" id="timeLeft1">00:00</span>
                </div>
            </div>
            
            <div class="product-card">
                <div class="product-image">
                    <img src="img/moataz/fs3.jpg" />
                </div>
                <div class="product-info">
                    <p class="product-description">Stand-Alone Villa
                    </p>
                    <strong class="product-price">
                        <span>20,500,000 EGP</span>
                        <button class="bid-now-btn">Bid Now</button>
                    </strong>
                    <span class="bidders"><svg xmlns="http://www.w3.org/2000/svg"viewBox="0 0 640 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M144 0a80 80 0 1 1 0 160A80 80 0 1 1 144 0zM512 0a80 80 0 1 1 0 160A80 80 0 1 1 512 0zM0 298.7C0 239.8 47.8 192 106.7 192h42.7c15.9 0 31 3.5 44.6 9.7c-1.3 7.2-1.9 14.7-1.9 22.3c0 38.2 16.8 72.5 43.3 96c-.2 0-.4 0-.7 0H21.3C9.6 320 0 310.4 0 298.7zM405.3 320c-.2 0-.4 0-.7 0c26.6-23.5 43.3-57.8 43.3-96c0-7.6-.7-15-1.9-22.3c13.6-6.3 28.7-9.7 44.6-9.7h42.7C592.2 192 640 239.8 640 298.7c0 11.8-9.6 21.3-21.3 21.3H405.3zM224 224a96 96 0 1 1 192 0 96 96 0 1 1 -192 0zM128 485.3C128 411.7 187.7 352 261.3 352H378.7C452.3 352 512 411.7 512 485.3c0 14.7-11.9 26.7-26.7 26.7H154.7c-14.7 0-26.7-11.9-26.7-26.7z"/></svg> 7</span>
                   <!-- <span class="timeLeft" id="timeLeft2">00:00</span>
                </div>
            </div>

            <div class="product-card">
                <div class="product-image">
                    <img src="img/moataz/gclass.webp" />
                </div>
                <div class="product-info">
                    <p class="product-description">Mercedes-Benz G-Class
                    </p>
                    <strong class="product-price">
                        <span>11,500,000 EGP</span>
                        <button class="bid-now-btn">Bid Now</button>
                    </strong>
                    <span class="bidders"><svg xmlns="http://www.w3.org/2000/svg"viewBox="0 0 640 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M144 0a80 80 0 1 1 0 160A80 80 0 1 1 144 0zM512 0a80 80 0 1 1 0 160A80 80 0 1 1 512 0zM0 298.7C0 239.8 47.8 192 106.7 192h42.7c15.9 0 31 3.5 44.6 9.7c-1.3 7.2-1.9 14.7-1.9 22.3c0 38.2 16.8 72.5 43.3 96c-.2 0-.4 0-.7 0H21.3C9.6 320 0 310.4 0 298.7zM405.3 320c-.2 0-.4 0-.7 0c26.6-23.5 43.3-57.8 43.3-96c0-7.6-.7-15-1.9-22.3c13.6-6.3 28.7-9.7 44.6-9.7h42.7C592.2 192 640 239.8 640 298.7c0 11.8-9.6 21.3-21.3 21.3H405.3zM224 224a96 96 0 1 1 192 0 96 96 0 1 1 -192 0zM128 485.3C128 411.7 187.7 352 261.3 352H378.7C452.3 352 512 411.7 512 485.3c0 14.7-11.9 26.7-26.7 26.7H154.7c-14.7 0-26.7-11.9-26.7-26.7z"/></svg> 10</span>
                   <!-- <span class="timeLeft" id="timeLeft3">00:00</span>
                </div>
            </div> -->




                </div>
            
            
            
            
            
        </div>
        
        
     <section class="stats"> 
        <div class="our-numbers">
            <h3>OUR NUMBERS</h3>
                 <div class="container2">
                    <div class="box">
                        <i class='bx bx-male-female'></i>
                        <div class ="number" data-goal="8540">0</div>
                        <p>Clients</p>
                    </div>
                    <div class="box">
                        <i class='bx bx-money-withdraw'></i>
                        <div class ="number" data-goal="105000">0</div>
                        <p>Auction Numbers</p>
                    </div>
                    <div class="box">
                        <i class='bx bxs-check-shield'></i>
                        <div class ="number" data-goal="3">0</div>
                        <p>Years Of <br>Experience</p>
                    </div>
                 </div>
        </div>
    </section>  
 
    
    </div>
   
    <div class="banner">
            
        
        <img class="adv" src="img/moataz/2.jpg">
    
    </div>
        <?php include "includes/footer.php" ?>

    <script src="js/main.js"></script>
    <script src="js/moataz/MoatazJS.js"></script>
</body>
</html>