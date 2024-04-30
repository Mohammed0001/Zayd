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

$(document).ready(function () {
    var sixtyMinutes = 60 * 60; 
    $('#timeLeft2').each(function () {
        startTimer(sixtyMinutes, $(this));
    });
});

$(document).ready(function () {
    var fortyMinutes = 60 * 40; 
    $('#timeLeft3').each(function () {
        startTimer(fortyMinutes, $(this));
    });
});

$(document).ready(function () {
    var twentyMinutes = 60 * 20; 
    $('#timeLeft4').each(function () {
        startTimer(twentyMinutes, $(this));
    });
});

$(document).ready(function () {
    var thirtyMinutes = 60 * 30; 
    $('#timeLeft5').each(function () {
        startTimer(thirtyMinutes, $(this));
    });
});

$(document).ready(function () {
    var fortyfiveMinutes = 60 * 45; 
    $('#timeLeft6').each(function () {
        startTimer(fortyfiveMinutes, $(this));
    });
});

$(document).ready(function () {
    var seventyfiveMinutes = 60 * 75; 
    $('#timeLeft7').each(function () {
        startTimer(seventyfiveMinutes, $(this));
    });
});

$(document).ready(function () {
    var onetwentyMinutes = 60 * 120; 
    $('#timeLeft8').each(function () {
        startTimer(onetwentyMinutes, $(this));
    });
});

$(document).ready(function () {
    var twofortyMinutes = 60 * 240; 
    $('#timeLeft9').each(function () {
        startTimer(twofortyMinutes, $(this));
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