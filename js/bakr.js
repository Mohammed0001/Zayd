//import {userData} from  './userData.js';
document.getElementById("userDataScript").addEventListener("load" , function(){ 
    document.getElementById("userName").innerHTML = "Hi! " + userData["name"].split(' ')[0];
    document.getElementById("userImage").src = "data:image/png;base64, " + userData["img"];
    document.getElementById("name").value = userData["name"];
    document.getElementById("username").value = userData["username"];
    document.getElementById("email").value = userData["email"];
    document.getElementById("phonenumber").value = userData["phoneNumber"];
    document.getElementById("dateofbirth").value = userData["dateofbirth"];
    document.getElementById("password").value = userData["password"];
    
});

$(document).ready(function(){
    var lastOpened = "myProfile";
    var lastOpenedLi = "myProfileBtn";
    $("#dashboardNav li").click(function(){
        $(this).addClass("active");
        $("#"+lastOpenedLi).removeClass("active");
        var currentOpened = $(this).attr("view-data");
        $("#"+lastOpened).addClass("hide");
        $("#"+currentOpened).removeClass("hide");
        lastOpened = currentOpened;
        lastOpenedLi = $(this).attr("id");
    });
});

$(".productCard").click(function(){
    $( this ).children(".mainData").toggleClass("hide");
    $( this ).children(".secondaryData").toggleClass("hide");
});

$("#showPassword").click(function(){
    var passwordtype = $(this).attr("password-field");
    if ($("#"+passwordtype).attr("type") == "password" && confirm("You are about to view your Password?")) {
        $("#"+passwordtype).attr("type" , "text");
        $( this ).toggleClass("fa-eye");
        $( this ).toggleClass("fa-eye-slash");
    }else{
        $("#"+passwordtype).attr("type" , "password");
        $( this ).toggleClass("fa-eye");
        $( this ).toggleClass("fa-eye-slash");
    }
    
});


// $(".otherImage").click( function(){
//     $("#mainImage").attr("src", $(this).attr("src"));
// });

var otherImages = document.querySelectorAll(".otherImage");

otherImages.forEach(function(element) {
    element.addEventListener("click", function() {
         document.getElementById("mainImage").src = this.src;
    });
});


var pData = {
    "id" : "1",
    "name" : "Car",
    "description" : " This exquisitely crafted antique writing desk is a testament to the artistry of its time, meticulously fashioned from solid mahogany wood. Adorned with intricate carvings and boasting a luxurious leather writing surface, this desk exemplifies both elegance and functionality. Its timeless design appeals to collectors and antique enthusiasts alike, offering a piece of history that embodies craftsmanship and sophistication. Whether as a focal point in a study or as a cherished addition to a curated collection, this writing desk promises to elevate any space with its historical charm and enduring beauty. A true treasure for those who appreciate the allure of finely crafted antique",
    "closureTime" : '2024-05-20T23:00:00Z' ,
    "bidders" : "10",
    "price" : "10000",
    "minBid" : "200"
};

$(document).ready(function(){
    updateTimeleft();
    let dollarUSLocale = Intl.NumberFormat('en-US')
    $("#productName").html(pData["name"]);
    $("#minBid").html(dollarUSLocale.format(pData["minBid"])+ " EGP");
    $("#bidders").html(pData["bidders"] + ' <i class="fa fa-gavel"></i>');
    $("#price").html(dollarUSLocale.format(pData["price"]) + " EGP");
    $("#productDescription").html(pData["description"]);
    setInterval(updateTimeleft, 1000);    
});

const targetTime = new Date(pData["closureTime"]);

function updateTimeleft() {
    const currentTime = new Date();

    const remainingTime = targetTime - currentTime;

    if (remainingTime > 0) {
        const days = Math.floor(remainingTime / (1000 * 60 * 60 * 24));
        const hours = Math.floor((remainingTime % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        const minutes = Math.floor((remainingTime % (1000 * 60 * 60)) / (1000 * 60));
        const seconds = Math.floor((remainingTime % (1000 * 60)) / 1000);
        
        const timeLeft = document.getElementById('timeLeft');
        timeLeft.textContent  = `${days}D ${hours}H ${minutes}M ${seconds}Sec`;
    } else {
        const timeLeft = document.getElementById('timeLeft');
        timeLeft.textContent = 'Expired';
    }
}

$("#submitBid").click(function () {
    window.location.href = "payment.html?p=1&price=1000";
});

$("#logoutBtn").click(function(){
    window.location.href = "functions/nashwa.php?type=logout";
});