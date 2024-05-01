 var prevScrollpos = window.pageYOffset;
 document.addEventListener("scroll" ,function () {
    var currentScrollPos = window.pageYOffset;
    if (prevScrollpos < currentScrollPos) {
        document.getElementById("secondary-nav").style.top = "0";
        document.getElementById("mainNav").style.top = "-70px" ;
    }else{
        document.getElementById("secondary-nav").style.top = "70px";
        document.getElementById("mainNav").style.top = "0";
    }
    prevScrollpos = currentScrollPos;
        
});

  var script = document.createElement('script');
    
    // Set the source attribute to file1.js
    script.src = 'js/userData.js';
    script.id = "userDataScript";
    // Append the script element to the document body
    document.body.appendChild(script);

$(document).ready(function () {
    $("#closeNav").click(function () {
        $("#mobile-menu").toggleClass("hide-Nav");
    });
    
    $("#openNav").click(function () {
        $("#mobile-menu").toggleClass("hide-Nav");
    });

    $("#navigateToSearch").click(function () {
        // window.location.href = "products.html";
        $("#search-nav").toggleClass("hide");
    })
    // window.location.href = "products.html";
    $("#search-nav #exit").click(function () {
        $("#search-nav").toggleClass("hide");
    })
});

// document.getElementById("userDataScript").onload = function () {
//     if(userData["id"] !=""){
//         $(".profileBtn a").toggleClass("hide");
//     }
// }


