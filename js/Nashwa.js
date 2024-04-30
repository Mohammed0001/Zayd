
const signupForm = document.getElementById('signupForm');
const loginForm = document.getElementById('loginForm');
if (signupForm) {
    signupForm.addEventListener('submit', signUpValidation, false);
}
if (loginForm) {
    loginForm.addEventListener('submit', loginValidation, false);    
}
function signUpValidation(){
    var passwordInput = document.getElementById('password');
    var ssn = document.getElementById('ssn').value;
    var name = document.getElementById('name').value;
    var email = document.getElementById('email').value;
    var username = document.getElementById('username').value;
    var dob = document.getElementById('dob').value;
    var password = passwordInput.value;
    isValid = 1;
    if (password.length < 8) {
        document.getElementById('passwordMessage').textContent = "Password must be at least 8 characters long";
        event.preventDefault();
        isValid = 0;
    }
  
    if (!/[a-z]/.test(password) || !/[A-Z]/.test(password)) {
      document.getElementById('passwordMessage2').textContent = "Password must contain at least one uppercase letter and one lowercase letter";
      event.preventDefault();
      isValid = 0;
    }
    if (ssn.length < 14) {
        document.getElementById('ssnMsg').textContent = "Please Enter a valid Social Security Number";
        event.preventDefault();
        isValid = 0;
    }
    if (ssn == '') {
        document.getElementById('ssnMsg').textContent = "SSN field is required";
        event.preventDefault();
        isValid = 0;
    }
    if (name == '') {
        document.getElementById('nameMsg').textContent = "Name field is required";
        event.preventDefault();
        isValid = 0;
    }
    if (email == '') {
        document.getElementById('emailMsg').textContent = "Email field is required";
        event.preventDefault();
        isValid = 0;
    }    
    if (username == '') {
        document.getElementById('usernameMsg').textContent = "Username field is required";
        event.preventDefault();
        isValid = 0;
    }
    if (dob == '') {
        document.getElementById('dobMsg').textContent = "Date Of Birth field is required";
        event.preventDefault();
        isValid = 0;
    }
    if (isValid == 0) {
        return;
    }
    // document.getElementById('passwordMessage').textContent = "";
}

function loginValidation(){
    var passwordInput = document.getElementById('password');
    var username = document.getElementById('username').value;
    var password = passwordInput.value;
    isValid = 1;

    if (username == '') {
        document.getElementById('usernameMsg').textContent = "Username field is required";
        event.preventDefault();
        isValid = 0;
    }    
    if (password == '') {
        document.getElementById('passwordMsg').textContent = "Password field is required";
        event.preventDefault();
        isValid = 0;
    }
    if (isValid == 0) {
        return;
    }
}


const rgbColors = [ "71, 147, 175", "255, 196, 112" , "221, 87, 70"  , "180, 123, 132",  "129, 104, 157", "255, 155, 210", "220, 132, 243"] ;

var categoryCard = document.querySelectorAll(".categCard");


categoryCard.forEach(function(card) {
  const random = Math.floor(Math.random() * rgbColors.length);
  card.style = "border-color: rgb("+ rgbColors[random] + "); background-color: rgba("+ rgbColors[random] + ", 0.45);"; 
  card.addEventListener("mouseover", function () {
      card.style = "border-color: rgb("+ rgbColors[random] + ");background-color: rgba("+ rgbColors[random] + ", 1);"; 
  });
  card.addEventListener("mouseout", function () {
      card.style = "border-color: rgb("+ rgbColors[random] + ");background-color: rgba("+ rgbColors[random] + ", 0.45);"; 
  });
});

$(document).ready(function() {
    var currentIndex = 0;
    var scrollValue = 300;
    $('#prevBtn').click(function() {
        $(".categContainer").scrollLeft(currentIndex - scrollValue);
        currentIndex -= scrollValue;
    });

    $('#nextBtn').click(function() {
        $(".categContainer").scrollLeft(currentIndex + scrollValue);
        currentIndex += scrollValue;
    });

});

  

 
