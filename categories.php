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
       <?php include "includes/navbar.php";?>

    <div class="categCont">
    <h2>
        CATEGORIES
    </h2>
    <div class="categContent">

        <button id="prevBtn" class="navCatButton"><i class="fa fa-caret-left"></i></button>
        
        <div class="categContainer" >
            <?php
                include "includes/db-connect.php";
                $sql = "SELECT * FROM category"; 
                $result = $conn->query($sql); 
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo '<a class="categCard"  href="liveAuctions.php?category='.$row["name"].'">
                                <i class="'.$row["iconCode"].'"></i>
                                <h3>'.$row["name"].'</h3>
                                </a>';
                    }
                }
            ?>

            <!-- <a class="categCard"  href="liveAuctions.html?category=Cars">
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
        -->
            
        </div>
        <button id="nextBtn" class="navCatButton"><i class="fa fa-caret-right"></i></button>
    </div>
    </div>

           <?php include "includes/footer.php";?>
        <script src="js/Nashwa.js"></script>
        <script src="js/main.js"></script>
    </body>
    </html>