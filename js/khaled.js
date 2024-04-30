function validateForm() {
    var name = document.getElementById("name").value;
    var email = document.getElementById("email").value;
    var message = document.getElementById("message").value;
    var errorMessage = "";
    
    if (name.trim() === "") {
        errorMessage += "Name is required. ";
    }
    if (email.trim() === "") {
        errorMessage += "Email is required. ";
    }
    if (message.trim() === "") {
        errorMessage += "Message is required. ";
    }
    
    if (errorMessage !== "") {
        document.getElementById("error-message").innerHTML = errorMessage;
        return false;
    } else {
        return true;
    }
}



$(document).ready(function() {
    $('#contact-form').submit(function(event) {
        event.preventDefault();
        var formData = $(this).serialize();
        $.ajax({
            type: 'POST',
            url: '/your-endpoint',
            data: formData,
            success: function(response) {
                // Handle success response
                console.log('Success:', response);
            },
            error: function(xhr, status, error) {
                // Handle error response
                console.error('Error:', error);
            }
        });
    });
});
