function startTimer(duration, display) {
    var timer = duration;
    var intervalId = setInterval(function () {
        var minutes = parseInt(timer / 60, 10);
        var seconds = parseInt(timer % 60, 10);

        minutes = minutes < 10 ? "0" + minutes : minutes;
        seconds = seconds < 10 ? "0" + seconds : seconds;

        display.text(minutes + ":" + seconds);

        if (--timer < 0) {
            clearInterval(intervalId);
            display.text("Bid Unavailable");
            alert("Bid is unavailable now");
        }
    }, 1000);
}

//JQUERY
$(document).ready(function () {
    var ninetyMinutes = 60 * 90; 
    $('#timeLeft1').each(function () {
        startTimer(ninetyMinutes, $(this));
    });
});


$(".bid-now-btn").click(function(){
    window.location.href = 'bidding.html?id=1';
});


//JAVASCRIPT
// window.onload = function () {
//     var ninetyMinutes = 60 * 60; // 90 minutes in seconds
//     var displays = document.querySelectorAll('.timeLeft'); // Select all elements with class 'timeLeft'
//     displays.forEach(function (display) {
//         startTimer(ninetyMinutes, display); // Apply startTimer function to each element
//     });
// };