<!DOCTYPE html>
<html lang="en">

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
                <img src="https://americancollectors.com/wp-content/uploads/1st-article-photo-1-690x370-1.jpg" id="mainImage" alt="MyProduct"></div>
            <div class="pImages bidItem">
                <div class="otherImages">
                    <img src="https://dealeraccelerate-all.s3.amazonaws.com/ag/marketing_assets/469/1912-ford-model-t-speedster__1_.jpeg" class="otherImage" alt="MyProduct">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQKzZ98coy5DlY-gULLQNPT8WYpVhJAbW6xZWDSmcXleQ&s" class="otherImage" alt="MyProduct">
                    <img src="https://dealeraccelerate-all.s3.amazonaws.com/ag/marketing_assets/468/1920-chevrolet-490.jpeg" class="otherImage" alt="MyProduct">
                    <img src="https://dealeraccelerate-all.s3.amazonaws.com/ag/marketing_assets/469/1912-ford-model-t-speedster__1_.jpeg" class="otherImage" alt="MyProduct">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQKzZ98coy5DlY-gULLQNPT8WYpVhJAbW6xZWDSmcXleQ&s" class="otherImage" alt="MyProduct">
                    <img src="https://dealeraccelerate-all.s3.amazonaws.com/ag/marketing_assets/468/1920-chevrolet-490.jpeg" class="otherImage" alt="MyProduct">
                    <img src="https://dealeraccelerate-all.s3.amazonaws.com/ag/marketing_assets/469/1912-ford-model-t-speedster__1_.jpeg" class="otherImage" alt="MyProduct">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQKzZ98coy5DlY-gULLQNPT8WYpVhJAbW6xZWDSmcXleQ&s" class="otherImage" alt="MyProduct">
                    <img src="https://dealeraccelerate-all.s3.amazonaws.com/ag/marketing_assets/468/1920-chevrolet-490.jpeg" class="otherImage" alt="MyProduct">
                    <img src="https://dealeraccelerate-all.s3.amazonaws.com/ag/marketing_assets/469/1912-ford-model-t-speedster__1_.jpeg" class="otherImage" alt="MyProduct">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQKzZ98coy5DlY-gULLQNPT8WYpVhJAbW6xZWDSmcXleQ&s" class="otherImage" alt="MyProduct">
                    <img src="https://dealeraccelerate-all.s3.amazonaws.com/ag/marketing_assets/468/1920-chevrolet-490.jpeg" class="otherImage" alt="MyProduct">
                </div>
            </div>
            <div class="pDetails bidItem">
                <h3 id="productName">Car</h3>
                <div class="pData">
                    <h4>Time Left: <span id="timeLeft"></span></h4>
                    <h4>Minimum Bid: <span id="minBid"></span></h4>
                    <h4>Bidders: <span id="bidders"></span> </h4>
                    <h4>Current Price: <span id="price"></span></h4>
                    <form class="myProfileForm" action="addBid.php">
                        <div class="group">
                            <label class="small ifta-label" for="bidValue">Bid</label>
                            <input type="number" class="ifta-field" style="box-sizing: border-box;" id="bidValue" placeholder="100" />
                        </div>
                        <div class="col-xs-12">
                            <button type="button" id="submitBid" class="updateDetails">Bid</button>
                        </div>
                    </form>
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
                    <div class="productCard">
                        <div class="mainData">
                            <img src="https://americancollectors.com/wp-content/uploads/1st-article-photo-1-690x370-1.jpg" alt="MyProduct">
                            <div class="details">
                                <span class="pName">Antique Mahogany Writing Desk</span>
                                <span class="price">1,000 EGP <span class="bidders"><i class="fa fa-gavel"></i> 10</span></span>
                            </div>
                        </div>
                        <div class="secondaryData hide">
                            <div class="details">
                                <span class="pName">Antique Mahogany Writing Desk</span>
                                <p class="pDesc">Beautifully crafted antique writing desk made from solid mahogany wood. Features
                                    intricate
                                    carvings and a leather writing surface. Ideal for collectors or antique enthusiasts.</p>
                                <span id="price">Current Price: 1,000 EGP </span>
                                <span id="price">Min Bid: 150 EGP </span>
                                <span id="bidders">Bidders: 10 <i class="fa fa-gavel"></i></span>
                                <span id="timeleft">Time Left: 10 Sec <i class="fa fa-hourglass-start"></i> </span>
                                <button class="editProduct">Bid Now</button>
                            </div>
                        </div>
                    </div>
                    <div class="productCard">
                        <div class="mainData">
                            <img src="https://americancollectors.com/wp-content/uploads/1st-article-photo-1-690x370-1.jpg" alt="MyProduct">
                            <div class="details">
                                <span class="pName">Antique Mahogany Writing Desk</span>
                                <span class="price">1,000 EGP <span class="bidders"><i class="fa fa-gavel"></i> 10</span></span>
                            </div>
                        </div>
                        <div class="secondaryData hide">
                            <div class="details">
                                <span class="pName">Antique Mahogany Writing Desk</span>
                                <p class="pDesc">Beautifully crafted antique writing desk made from solid mahogany wood. Features
                                    intricate
                                    carvings and a leather writing surface. Ideal for collectors or antique enthusiasts.</p>
                                <span id="price">Current Price: 1,000 EGP </span>
                                <span id="price">Min Bid: 150 EGP </span>
                                <span id="bidders">Bidders: 10 <i class="fa fa-gavel"></i></span>
                                <span id="timeleft">Time Left: 10 Sec <i class="fa fa-hourglass-start"></i> </span>
                                <button class="editProduct">Bid Now</button>
                            </div>
                        </div>
                    </div>
                    <div class="productCard">
                        <div class="mainData">
                            <img src="https://americancollectors.com/wp-content/uploads/1st-article-photo-1-690x370-1.jpg" alt="MyProduct">
                            <div class="details">
                                <span class="pName">Antique Mahogany Writing Desk</span>
                                <span class="price">1,000 EGP <span class="bidders"><i class="fa fa-gavel"></i> 10</span></span>
                            </div>
                        </div>
                        <div class="secondaryData hide">
                            <div class="details">
                                <span class="pName">Antique Mahogany Writing Desk</span>
                                <p class="pDesc">Beautifully crafted antique writing desk made from solid mahogany wood. Features
                                    intricate
                                    carvings and a leather writing surface. Ideal for collectors or antique enthusiasts.</p>
                                <span id="price">Current Price: 1,000 EGP </span>
                                <span id="price">Min Bid: 150 EGP </span>
                                <span id="bidders">Bidders: 10 <i class="fa fa-gavel"></i></span>
                                <span id="timeleft">Time Left: 10 Sec <i class="fa fa-hourglass-start"></i> </span>
                                <button class="editProduct">Bid Now</button>
                            </div>
                        </div>
                    </div>
                    <div class="productCard">
                        <div class="mainData">
                            <img src="https://americancollectors.com/wp-content/uploads/1st-article-photo-1-690x370-1.jpg" alt="MyProduct">
                            <div class="details">
                                <span class="pName">Antique Mahogany Writing Desk</span>
                                <span class="price">1,000 EGP <span class="bidders"><i class="fa fa-gavel"></i> 10</span></span>
                            </div>
                        </div>
                        <div class="secondaryData hide">
                            <div class="details">
                                <span class="pName">Antique Mahogany Writing Desk</span>
                                <p class="pDesc">Beautifully crafted antique writing desk made from solid mahogany wood. Features
                                    intricate
                                    carvings and a leather writing surface. Ideal for collectors or antique enthusiasts.</p>
                                <span id="price">Current Price: 1,000 EGP </span>
                                <span id="price">Min Bid: 150 EGP </span>
                                <span id="bidders">Bidders: 10 <i class="fa fa-gavel"></i></span>
                                <span id="timeleft">Time Left: 10 Sec <i class="fa fa-hourglass-start"></i> </span>
                                <button class="editProduct">Bid Now</button>
                            </div>
                        </div>
                    </div>
                    <div class="productCard">
                        <div class="mainData">
                            <img src="https://americancollectors.com/wp-content/uploads/1st-article-photo-1-690x370-1.jpg" alt="MyProduct">
                            <div class="details">
                                <span class="pName">Antique Mahogany Writing Desk</span>
                                <span class="price">1,000 EGP <span class="bidders"><i class="fa fa-gavel"></i> 10</span></span>
                            </div>
                        </div>
                        <div class="secondaryData hide">
                            <div class="details">
                                <span class="pName">Antique Mahogany Writing Desk</span>
                                <p class="pDesc">Beautifully crafted antique writing desk made from solid mahogany wood. Features
                                    intricate
                                    carvings and a leather writing surface. Ideal for collectors or antique enthusiasts.</p>
                                <span id="price">Current Price: 1,000 EGP </span>
                                <span id="price">Min Bid: 150 EGP </span>
                                <span id="bidders">Bidders: 10 <i class="fa fa-gavel"></i></span>
                                <span id="timeleft">Time Left: 10 Sec <i class="fa fa-hourglass-start"></i> </span>
                                <button class="editProduct">Bid Now</button>
                            </div>
                        </div>
                    </div>
                    <div class="productCard">
                        <div class="mainData">
                            <img src="https://americancollectors.com/wp-content/uploads/1st-article-photo-1-690x370-1.jpg" alt="MyProduct">
                            <div class="details">
                                <span class="pName">Antique Mahogany Writing Desk</span>
                                <span class="price">1,000 EGP <span class="bidders"><i class="fa fa-gavel"></i> 10</span></span>
                            </div>
                        </div>
                        <div class="secondaryData hide">
                            <div class="details">
                                <span class="pName">Antique Mahogany Writing Desk</span>
                                <p class="pDesc">Beautifully crafted antique writing desk made from solid mahogany wood. Features
                                    intricate
                                    carvings and a leather writing surface. Ideal for collectors or antique enthusiasts.</p>
                                <span id="price">Current Price: 1,000 EGP </span>
                                <span id="price">Min Bid: 150 EGP </span>
                                <span id="bidders">Bidders: 10 <i class="fa fa-gavel"></i></span>
                                <span id="timeleft">Time Left: 10 Sec <i class="fa fa-hourglass-start"></i> </span>
                                <button class="editProduct">Bid Now</button>
                            </div>
                        </div>
                    </div>
                    <div class="productCard">
                        <div class="mainData">
                            <img src="https://americancollectors.com/wp-content/uploads/1st-article-photo-1-690x370-1.jpg" alt="MyProduct">
                            <div class="details">
                                <span class="pName">Antique Mahogany Writing Desk</span>
                                <span class="price">1,000 EGP <span class="bidders"><i class="fa fa-gavel"></i> 10</span></span>
                            </div>
                        </div>
                        <div class="secondaryData hide">
                            <div class="details">
                                <span class="pName">Antique Mahogany Writing Desk</span>
                                <p class="pDesc">Beautifully crafted antique writing desk made from solid mahogany wood. Features
                                    intricate
                                    carvings and a leather writing surface. Ideal for collectors or antique enthusiasts.</p>
                                <span id="price">Current Price: 1,000 EGP </span>
                                <span id="price">Min Bid: 150 EGP </span>
                                <span id="bidders">Bidders: 10 <i class="fa fa-gavel"></i></span>
                                <span id="timeleft">Time Left: 10 Sec <i class="fa fa-hourglass-start"></i> </span>
                                <button class="editProduct">Bid Now</button>
                            </div>
                        </div>
                    </div>
                    <div class="productCard">
                        <div class="mainData">
                            <img src="https://americancollectors.com/wp-content/uploads/1st-article-photo-1-690x370-1.jpg" alt="MyProduct">
                            <div class="details">
                                <span class="pName">Antique Mahogany Writing Desk</span>
                                <span class="price">1,000 EGP <span class="bidders"><i class="fa fa-gavel"></i> 10</span></span>
                            </div>
                        </div>
                        <div class="secondaryData hide">
                            <div class="details">
                                <span class="pName">Antique Mahogany Writing Desk</span>
                                <p class="pDesc">Beautifully crafted antique writing desk made from solid mahogany wood. Features
                                    intricate
                                    carvings and a leather writing surface. Ideal for collectors or antique enthusiasts.</p>
                                <span id="price">Current Price: 1,000 EGP </span>
                                <span id="price">Min Bid: 150 EGP </span>
                                <span id="bidders">Bidders: 10 <i class="fa fa-gavel"></i></span>
                                <span id="timeleft">Time Left: 10 Sec <i class="fa fa-hourglass-start"></i> </span>
                                <button class="editProduct">Bid Now</button>
                            </div>
                        </div>
                    </div>
                    <div class="productCard">
                        <div class="mainData">
                            <img src="https://americancollectors.com/wp-content/uploads/1st-article-photo-1-690x370-1.jpg" alt="MyProduct">
                            <div class="details">
                                <span class="pName">Antique Mahogany Writing Desk</span>
                                <span class="price">1,000 EGP <span class="bidders"><i class="fa fa-gavel"></i> 10</span></span>
                            </div>
                        </div>
                        <div class="secondaryData hide">
                            <div class="details">
                                <span class="pName">Antique Mahogany Writing Desk</span>
                                <p class="pDesc">Beautifully crafted antique writing desk made from solid mahogany wood. Features
                                    intricate
                                    carvings and a leather writing surface. Ideal for collectors or antique enthusiasts.</p>
                                <span id="price">Current Price: 1,000 EGP </span>
                                <span id="price">Min Bid: 150 EGP </span>
                                <span id="bidders">Bidders: 10 <i class="fa fa-gavel"></i></span>
                                <span id="timeleft">Time Left: 10 Sec <i class="fa fa-hourglass-start"></i> </span>
                                <button class="editProduct">Bid Now</button>
                            </div>
                        </div>
                    </div>
                    <div class="productCard">
                        <div class="mainData">
                            <img src="https://americancollectors.com/wp-content/uploads/1st-article-photo-1-690x370-1.jpg" alt="MyProduct">
                            <div class="details">
                                <span class="pName">Antique Mahogany Writing Desk</span>
                                <span class="price">1,000 EGP <span class="bidders"><i class="fa fa-gavel"></i> 10</span></span>
                            </div>
                        </div>
                        <div class="secondaryData hide">
                            <div class="details">
                                <span class="pName">Antique Mahogany Writing Desk</span>
                                <p class="pDesc">Beautifully crafted antique writing desk made from solid mahogany wood. Features
                                    intricate
                                    carvings and a leather writing surface. Ideal for collectors or antique enthusiasts.</p>
                                <span id="price">Current Price: 1,000 EGP </span>
                                <span id="price">Min Bid: 150 EGP </span>
                                <span id="bidders">Bidders: 10 <i class="fa fa-gavel"></i></span>
                                <span id="timeleft">Time Left: 10 Sec <i class="fa fa-hourglass-start"></i> </span>
                                <button class="editProduct">Bid Now</button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

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
    <script src="js/main.js"></script>
    <script src="js/bakr.js"></script>

</body>

</html>