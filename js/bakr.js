//import {userData} from  './userData.js';
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
// function () {
    // document.getElementById("userDataScript").addEventListener("load" , function(){ });
    // document.getElementById("userName").innerHTML = "Hi! " + userData["name"].split(' ')[0];
    // document.getElementById("userImage").src = userData["img"];
    // document.getElementById("name").value = userData["name"];
    // document.getElementById("username").value = userData["username"];
    // document.getElementById("email").value = userData["email"];
    // document.getElementById("phonenumber").value = userData["phoneNumber"];
    // document.getElementById("dateofbirth").value = userData["dateofbirth"];
    // document.getElementById("password").value = userData["password"];
    if (document.getElementById("userName")) {
        document.getElementById("userName").innerHTML = "Hi! " + getCookie("name").split(' ')[0];
        document.getElementById("userImage").src = getCookie("image");
    }
    if (document.getElementById("ssn")) {
        document.getElementById("ssn").value = getCookie("SSN");
        document.getElementById("name").value = getCookie("name");
        document.getElementById("username").value = getCookie("username");
        document.getElementById("email").value = getCookie("email");
        // document.getElementById("phonenumber").value = getCookie("name")
        document.getElementById("dateofbirth").value = getCookie("dateOfBirth");
        document.getElementById("password").value = getCookie("password");
    }
// };

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





// $("#submitForm").click(function () {
//     uname  = $("#name").val();
//     username  = $("#username").val();
//     email  = $("#email").val();
//     dateOfBirth  = $("#dateofbirth").val();
//     password  = $("#password").val();
//     newData = {uname, username , email, dateOfBirth, password};
//     $.ajax({
//         type:'POST',
//         dataType: 'json',
//         url:'functions/bakr.php?type=updateData',
//         data:{newData},
//         success:function(response){
//             alert("Updated Successfully!");
//         }
//     });


// });

function acceptProduct(pid) {
    $.ajax({
        type:'POST',
        dataType: 'json',
        url:'functions/bakr.php?type=updateProductStat',
        data:{'pid' : pid , 'stat' : 'active'},
        success:function(response){
                       window.location.reload();

        }
    });
}

function rejectProduct(pid) {
    $.ajax({
        type:'POST',
        dataType: 'json',
        url:'functions/bakr.php?type=updateProductStat',
        data:{'pid' : pid , 'stat' : 'rejected'},
        success:function(response){
            window.location.reload();
             
        }
    });
}


$("#logoutBtn").click(function(){
    window.location.href = "functions/nashwa.php?type=logout";
});