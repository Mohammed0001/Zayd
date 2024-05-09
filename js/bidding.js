function getCookie(cname) {
  let name = cname + "=";
  let decodedCookie = decodeURIComponent(document.cookie);
  let ca = decodedCookie.split(';');
  for(let i = 0; i <ca.length; i++) {
    let c = ca[i];
    while (c.charAt(0) == ' ') {
      c = c.substring(1);
    }
    if (c.indexOf(name) == 0) {
      return c.substring(name.length, c.length);
    }
  }
  return "";
}

function getUrlParameter(sParam) {
    var sPageURL = window.location.search.substring(1),
        sURLVariables = sPageURL.split('&'),
        sParameterName,
        i;

    for (i = 0; i < sURLVariables.length; i++) {
        sParameterName = sURLVariables[i].split('=');

        if (sParameterName[0] === sParam) {
            return sParameterName[1] === undefined ? true : decodeURIComponent(sParameterName[1]);
        }
    }
    return false;
};

var pData = {
    // "id" : "",
    // "name" : "",
    // "description" : "",
    // "closureTime" : '' ,
    // "mainImage" : '' ,
    // "bidders" : "",
    // "price" : "",
    // "minBid" : ""
};

$(document).ready(async function(){
    const result =  await setProduct();
    const b = updateTimeleft();
    getBids();
    getImages();
});

async function setProduct(){
    const res = await $.ajax({
        type:'get',
        dataType: 'json',
        url:'functions/bakr.php?type=getProduct',
        data:{'pid' : getUrlParameter('pid')},
        success:function(response){
            console.log(response.product);
            pData = response.product[0];
        }
    });
    console.log(pData);
    let dollarUSLocale = Intl.NumberFormat('en-US');
    $("#productName").html(pData["name"]);
    $("#mainImage").attr('src' , pData["mainImage"]);
    $("#minBid").html(dollarUSLocale.format(pData["minBid"])+ " EGP");
    $("#bidders").html(pData["bidders_count"] + ' <i class="fa fa-gavel"></i>');
    $("#price").html(dollarUSLocale.format(pData["currentBid"]) + " EGP");
    $("#productDescription").html(pData["description"]);
    $("#bidValue").attr('min' , pData["minBid"]);
    $("#bidValue").attr('value' , pData["minBid"]);  
}

async function setCurrPrice(){
    const res = await $.ajax({
        type:'get',
        dataType: 'json',
        url:'functions/bakr.php?type=getProduct',
        data:{'pid' : getUrlParameter('pid')},
        success:function(response){
            console.log(response.product);
            pData = response.product[0];
        }
    });
    console.log(pData);
    let dollarUSLocale = Intl.NumberFormat('en-US');
    $("#price").html(dollarUSLocale.format(pData["currentBid"]) + " EGP");
}

var otherImages = document.querySelectorAll(".otherImage");

function getImages() {
    const res =  $.ajax({
        type:'get',
        dataType: 'json',
        url:'functions/bakr.php?type=getProductImages',
        data:{'pid' : getUrlParameter('pid')},
        success:function(response){
             console.log(response.images);
            $.each(response.images, function(index, data) {
                    console.log(data.file);
                var img = $('<img class="otherImage">');
                img.attr('src', data.file);
                img.appendTo('#otherImages');
            });
        setImageBehavior();
        }
    });
}
function setImageBehavior() {
    otherImages = document.querySelectorAll(".otherImage");
    otherImages.forEach(function(element) {
    element.addEventListener("click", function() {
         document.getElementById("mainImage").src = this.src;
    });
});
}

 function getBids() {
    const res = $.ajax({
        type:'get',
        dataType: 'json',
        url:'functions/bakr.php?type=getBids',
        data:{'pid' : getUrlParameter('pid')},
        success:function(response){
            $("#bidHistory").empty();
            if (response.bids == "0") {
                 $("#bidHistory").append("<tr><td>Be The First Bidder</td></tr>");   
            }else{
                $.each(response.bids, async function(index, data) {
                    const res = await setCurrPrice();
                    $("#bidHistory").append("<tr><td>"+data.value+" EGP</td></tr>");
                });
            }
           
        }
    });
    setInterval(getBids, 9000); 
    
}


var alreadyCalled = false;

function updateTimeleft() {
    // pData["bidExpiry"] = pData.split(" " ,);
    const targetTime = new Date(pData["bidExpiry"]);    
    const currentTime = new Date();
    const remainingTime = targetTime - currentTime;

    if (remainingTime > 0) {
        const days = Math.floor(remainingTime / (1000 * 60 * 60 * 24));
        const hours = Math.floor((remainingTime % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        const minutes = Math.floor((remainingTime % (1000 * 60 * 60)) / (1000 * 60));
        const seconds = Math.floor((remainingTime % (1000 * 60)) / 1000);
        const timeLeft = document.getElementById('timeLeft');
        if (timeLeft) {
            if (days>= 1) {
                timeLeft.textContent = `${days} Days ${hours}H`;
            }else {
                timeLeft.textContent = ` ${hours}H ${minutes}M ${seconds}Sec`;
            }
        }
    } else {
        const timeLeft = document.getElementById('timeLeft');
        if (timeLeft) {
            timeLeft.textContent = 'Expired';
            $("#bidValue").attr('disabled' , "true");
            $("#submitBid").attr('disabled' , "true");
            $("#submitBid").addClass("expired");
            if (!alreadyCalled) {
                endAuction();
                alreadyCalled = true;
            }
        }
    }
        setInterval(updateTimeleft, 1000); 
}

async function getWinningBid(){
    const res = await $.ajax({
        type:'get',
        dataType: 'json',
        url:'functions/bakr.php?type=getWinningBid',
        data:{'pid' : getUrlParameter('pid')},
        success:function(response){
            if (response.winningBid != "0") {
                return true;
            }
        }
    });
    return res;
}

async function endAuction() {
    iWon = await getWinningBid();
    if (iWon) {
        alert("Congratulations You Won This Auction! Please Proceed To Payment");
        window.location.href = "payment.php?PID="+pData["id"]+"&amount="+pData["currentBid"];
    }else{
        alert("Auction Expired Hard Luck!");
        window.history.back();
    }

}
$("#submitBid").click(function () {
    amount = $("#bidValue").val();
    
    const res = $.ajax({
        type:'post',
        dataType: 'json',
        url:'functions/bakr.php?type=addBid',
        data:{'pid' : pData['id'] , 'amount' : amount},
        success:function(response){
            setProduct();
            $("body").append('<div class="alert success">'+
                            '<span class="closebtn" onclick="this.parentElement.style.display=`none`;">&times;</span>'+
                            'Bid Successfully!'+
                        '</div>');        
        }
    });
});

/* event to handle expiry
BEGIN
    UPDATE `product`
    SET `status` = 'won'
    WHERE `bidExpiry` <= now();

    UPDATE bid b
    INNER JOIN (
        SELECT productID, MAX(id) AS last_bid_id
        FROM bid WHERE productID IN (SELECT id FROM `product` WHERE `bidExpiry` <= now() )) AS latest_bid ON b.id = latest_bid.last_bid_id
    SET b.isWinningBid = '1';


END

*/




