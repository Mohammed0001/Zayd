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

<?php
            session_start();
            // if (isset($_SESSION["createdSession"])) {
            //     if ( $_SESSION["createdSession"] == "1") {
            //        echo "<script>alert('Created Successfully!');</script>";
            //     }else{
            //         echo "<script>alert('Error Creating!');</script>";
            //     }
            //     unset($_SESSION["createdSession"]);

            // }
        ?>


    </head>
    <body>
       <?php include "includes/navbar.php";?>

<div class="Sell-form">

        <h1>POST YOUR AD</h1>


<form class="SellProductForm" action="functions/moataz.php?type=sellproduct" method="post" id="sellproductform" enctype="multipart/form-data">

    <p style="color: red;" id="categoryMsg"> </p>
    <div class="group">
    <label class="small ifta-label" for="category">Category</label>
    <input type="text"      class="ifta-field"   id="categoryInput"   name="category" list="categ" placeholder="Category : ">
    <datalist id="categ">
    <?php
        include "includes/db-connect.php";
        $sql = "SELECT * FROM category;"; 
        $result = $conn->query($sql); 
            while($row = $result->fetch_assoc()) {
                echo "<option value='".$row["name"]."'>";
            }
        ?>
      <!-- <option value="Car">
      <option value="Car plate">
      <option value="Painting">
      <option value="Antiques">
      <option value="Jewelry">
        <option value="Land">
        <option value="Apartment"> -->
    </datalist>
    

</div>
           
    <p style="color: red;" id="titleMsg"></p>
    <div class="group">
        <label class="small ifta-label" for="product_title">Product Title</label>
        <input type="text" class="ifta-field" id="title" name="name" placeholder=" Antique Mahogany Writing Desk" />
    </div>
    


    <p style="color: red;" id="descriptionMsg"> </p>
    <div class="group">
        <label class="small ifta-label" for="description" >Description</label>
        <textarea type="description" class="ifta-field" name="description" id="description" placeholder=" Beautifully crafted antique writing desk made from solid mahogany wood" ></textarea>
    </div>
    

    <p style="color: red;" id="StartingPriceMsg"> </p>
    <div class="group">
        <label class="small ifta-label" for="starting_price">Starting price</label>
        <input type="price" class="ifta-field"  name="currentBid" id="starting_price" placeholder="EGP500" />
    </div>
    

    <p style="color: red;" id="MinBidValueMsg"> </p>
    <div class="group">
        <label class="small ifta-label" for="Minimum_Bid_Value">Minimum Bid Value</label>
        <input type="price" class="ifta-field" name="minBid" id="Minimum_Bid_Value" placeholder="EGP25"/>
    </div>
    

    <p style="color: red;" id="dateMsg"> </p>
    <div class="group">
        <label class="small ifta-label" for="Closure_Time">Closure Time</label>
        <input type="datetime-local" class="ifta-field" name="bidExpiry" id="Closure_Time" placeholder="April 30, 2024" />
    </div>
   

    <p style="color: red;" id="locationMsg"> </p>
    <div class="group">
        <label class="small ifta-label" for="location">Location</label>
        <input type="location" class="ifta-field" name="location" id="location" placeholder="New York City, NY" />
    </div>
   

    <div class="container">
        <input
          type="file"
          id="input-file"
          name="pImage[]"
          multiple 
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
        <button type="submit" id="submitForm" class="updateDetails">Post Now!</button>
    </div>

    <?php  if (isset($_SESSION["createdSession"])) {
                if ( $_SESSION["createdSession"] == "1") {?>
                    
                        <div class="alert success">
                            <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                            Product Posted Successfully!
                        </div>
               <?php } else{?>
                div class="alert danger">
                            <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                            Error Posting Product!
                        </div>
               <?php }
                    unset($_SESSION["createdSession"]);
                }
            
            ?>

</form>
</div>

 <?php include "includes/footer.php";?>
    <script src="js/main.js"></script>
    <script src="js/moataz/MoatazJS2.js"></script>
</body>
</html>