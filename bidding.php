<!DOCTYPE html>
<html lang="en">
<?php
include "includes/db-connect.php";
session_start();
    if (!isset($_COOKIE["SSN"])) {
        header("Location: login.php");
    }else{
        if ($_COOKIE["type"] == "admin") {
            header("Location: admin/dashboard.php");
        }
    }
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Zayd | Make It Yours</title>
    <link rel="icon" type="image/x-icon" href="img/logo1.png">
    <link rel="stylesheet" href="css/master.css">
    <link rel="stylesheet" href="css/bakr.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/af3e7165d7.js" crossorigin="anonymous"></script>
    <style>
        .secondary-nav{
            display: flex;
        }
        @media screen and (max-width: 700px) {
            nav,
            .secondary-nav {
                display: none;
            }

            .mobile-nav {
                display: flex;
                z-index: 99;
            }
        }
    </style>
</head>

<body>
        <?php include "includes/navbar.php";?>


    <div class="container">
        <h2 style="color:#d6ad60 ;">Make It Yours Now!</h2>
        <div class="productBid">
            <div class="pImage bidItem" >
                <img id="mainImage" src="" id="mainImage" alt="MyProduct"></div>
            <div class="pImages bidItem">
                <div class="otherImages" id="otherImages">
                  
                </div> 
            </div>
            <div class="pDetails bidItem">
                <h3 id="productName"></h3>
                <div class="pData">
                    <h4>Time Left: <span id="timeLeft"></span></h4>
                    <h4>Minimum Bid: <span id="minBid"></span></h4>
                    <h4>Bidders: <span id="bidders"></span> </h4>
                    <h4>Current Price: <span id="price"></span></h4>
                    <form class="myProfileForm" action="addBid.php">
                        <div class="group">
                            <label class="small ifta-label" for="bidValue">Bid</label>
                            <input type="number" class="ifta-field" style="box-sizing: border-box;" id="bidValue" name="bidValue" placeholder="100" />
                        </div>
                        <div class="col-xs-12">
                            <button type="button" id="submitBid" class="updateDetails">Bid</button>
                        </div>
                    </form>
                </div>
                <br>
                <div>
                    <table>
                        <thead>
                            <tr>
                              <th>Bids History</th>
                            </tr>
                        </thead>
                        <tbody id="bidHistory"></tbody>
                    </table>    
                </div>
            </div>
            <div class="pDesc bidItem">
                <h3>Description</h3>
                <p id="productDescription" style="text-align: justify;">
                </p>
            </div>
            <div class="pSuggest bidItem">
                <h3>
                    Suggestions 
                </h3>
                <div class="productsContainer suggestions">
                         <?php
                //current bid , primary image , current price count bidders , 
                $sql = "SELECT p.*, 
               (SELECT COUNT(DISTINCT userID) FROM bid WHERE productID = p.id) AS bidders_count,
               (SELECT `file` FROM pimage WHERE pID = p.id AND isPrimary = '1') AS mainImage
                FROM product p
                WHERE `status` = 'active' AND `categoryName` IN (SELECT categoryName FROM product WHERE id =   '". $_GET["pid"] . "') AND id != '".$_GET["pid"]  ."' ;";
                $result = $conn->query($sql); 
                $duration = 86400 * 30;
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo '
                          <div class="productCard">
                    <div class="mainData">
                        <img src="'.$row["mainImage"].'" alt="MyProduct">
                        <div class="details">
                            <h3 class="pName">'.$row["name"].'</h3>
                            <span class="price">'.$row["currentBid"].' EGP <span class="bidders"><i class="fa fa-gavel"></i> '.$row["bidders_count"].'</span></span>
                        </div>
                    </div>
                    <div class="secondaryData hide">
                        <div class="details">
                            <h3 class="pName">'.$row["name"].'</h3>
                            <p class="pDesc">'.$row["description"].'</p>
                            <span id="price">Current Price: '.$row["currentBid"].' EGP </span>
                            <span id="price">Min Bid: '.$row["minBid"].'EGP </span>
                            <span id="bidders">Bidders: '.$row["currentBid"].' <i class="fa fa-gavel"></i></span>
                            <span id="timeleft">Closer Time: '.$row["bidExpiry"].' <i class="fa fa-hourglass-start"></i> </span>
                            <br>
                            <a class="editProduct" href="bidding.php?pid='.$row["id"].'">Let it be yours BID!</a>
                        </div>
                    </div>
                </div>
                        ';
                    }
                }else{echo "NO SUGGESTIONS ";}
            ?>
                </div>
            </div>

        </div>
    </div>

    <?php include "includes/footer.php";?>
    <script src="js/main.js"></script>
    <script src="js/bidding.js"></script>
    <script src="js/bakr.js"></script>

</body>

</html>