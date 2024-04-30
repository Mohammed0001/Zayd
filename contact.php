

    <html>
    
    <head>
        <title>Zayd | Contact us</title>
        <link rel="icon" type="image/x-icon" href="img/logo1.png">
        <link rel="stylesheet" href="css/master.css">
        <link rel="stylesheet" href="css/khaled.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    </head>
    
    <body>
           <?php include "includes/navbar.php";?>

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