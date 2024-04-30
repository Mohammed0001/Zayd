<!DOCTYPE html>
<html>
    <head>  
<title>Zayd | Sell Product</title>
<link rel="icon" type="image/x-icon" href="img/logo1.png">
        <style>h1 {
            color: #122620;
            text-align: center;
            text-shadow: 2px 2px gold;
            
          }</style>
        <link rel="stylesheet" href="css/moataz/MoatazCSS2.css"> 
        <link rel="stylesheet" href="css/master.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        
<title>
    SellProduct
</title>
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
<div class="Sell-form">

        <h1>POST YOUR AD</h1>


<form class="SellProductForm">

    <p style="color: red;" id="categoryMsg"> </p>
    <div class="group">
    <label class="small ifta-label" for="category">Category</label>
    <input type="text"      class="ifta-field"   id="categoryInput"   name="category" list="categ" placeholder="Category : ">
    <datalist id="categ">
      <option value="Car">
      <option value="Car plate">
      <option value="Painting">
      <option value="Antiques">
      <option value="Jewelry">
        <option value="Land">
        <option value="Apartment">
    </datalist>
    

</div>
           
    <p style="color: red;" id="titleMsg"></p>
    <div class="group">
        <label class="small ifta-label" for="product_title">Product Title</label>
        <input type="text" class="ifta-field" id="title" placeholder=" Antique Mahogany Writing Desk" />
    </div>
    


    <p style="color: red;" id="descriptionMsg"> </p>
    <div class="group">
        <label class="small ifta-label" for="description" >Description</label>
        <textarea type="description" class="ifta-field" id="description" placeholder=" Beautifully crafted antique writing desk made from solid mahogany wood" ></textarea>
    </div>
    

    <p style="color: red;" id="StartingPriceMsg"> </p>
    <div class="group">
        <label class="small ifta-label" for="starting_price">Starting price</label>
        <input type="price" class="ifta-field" id="starting_price" placeholder="EGP500" />
    </div>
    

    <p style="color: red;" id="MinBidValueMsg"> </p>
    <div class="group">
        <label class="small ifta-label" for="Minimum_Bid_Value">Minimum Bid Value</label>
        <input type="price" class="ifta-field" id="Minimum_Bid_Value" placeholder="EGP25"/>
    </div>
    

    <p style="color: red;" id="dateMsg"> </p>
    <div class="group">
        <label class="small ifta-label" for="Closure_Time">Closure Time</label>
        <input type="date" class="ifta-field"  id="Closure_Time" placeholder="April 30, 2024" />
    </div>
   

    <p style="color: red;" id="locationMsg"> </p>
    <div class="group">
        <label class="small ifta-label" for="location">Location</label>
        <input type="location" class="ifta-field" id="location" placeholder="New York City, NY" />
    </div>
   

    <div class="container">
        <input
          type="file"
          id="input-file"
          name="input-file"
          accept="image/*"
          onchange={handleChange()}
          hidden
        />
        <label class="btn-upload" for="input-file" role="button">
          Upload AD Photo
        </label>
        <div class="preview-box"></div>  
      </div>
      


    <div class="button">
        <button type="button" id="submitForm" class="updateDetails">Post Now!</button>
    </div>


</form>
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
    <script src="js/moataz/MoatazJS2.js"></script>
</body>
</html>