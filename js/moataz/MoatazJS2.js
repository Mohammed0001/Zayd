//Validation

function sellProductValidation() {
    var titleInput = document.getElementById('title').value;
    var descInput = document.getElementById('description').value;
    var categoryInput = document.getElementById('categoryInput').value;
    var startingPrice = document.getElementById('starting_price').value;
    var MinBidValueInput = document.getElementById('Minimum_Bid_Value').value;
    var DateInput = document.getElementById('Closure_Time').value;
    var locationInput = document.getElementById('location').value;
        isValid = true;

    if(categoryInput === ''){
        document.getElementById('categoryMsg').textContent = "Please select Category.";
        isValid = false;

    }
    if(titleInput == ''){
        document.getElementById('titleMsg').textContent = "Please enter a Ad title.";
        isValid = false;
    }
    if(descInput == ''){
        document.getElementById('descriptionMsg').textContent = "Please enter a description.";
        isValid = false;
    }
    if(startingPrice == ''){
        document.getElementById('StartingPriceMsg').textContent = "Please enter starting price.";
        isValid = false;

    }
    if(MinBidValueInput == ''){
        document.getElementById('MinBidValueMsg').textContent = "Please enter minimum bid value.";
        isValid = false;

    }
    if(DateInput == ''){
        document.getElementById('dateMsg').textContent = "Please enter closer date.";
        isValid = false;

    }
    if(locationInput == ''){
        document.getElementById('locationMsg').textContent = "Please enter location";
        isValid = false;

    }

    if (isValid == false){
        return false;
    }

    return true;
}


document.getElementById('submitForm').addEventListener('click', function() {

    if (sellProductValidation()) {
    
        document.getElementById('sellProductForm').submit();
    }
});



//upload ad image


var handleChange = () => {
    var fileUploader = document.querySelector('#input-file');
    var getFile = fileUploader.files
    if (getFile.length !== 0) {
      var uploadedFile = getFile[0];
      readFile(uploadedFile);
    }
  }
  
  var readFile = (uploadedFile) => {
    if (uploadedFile) {
      var reader = new FileReader();
      reader.onload = () => {
        var parent = document.querySelector('.preview-box');
        parent.innerHTML = `<img class="preview-content" src=${reader.result} />`;
      };
      
      reader.readAsDataURL(uploadedFile);
    }
  };
  
  