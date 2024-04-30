const cardNumber = document.getElementById("card-number");
const cardHolderName = document.getElementById("card-holder-name");
const cardNameInput = document.getElementById("card-name-input");
const displayValidity = document.getElementById("validity");
const validityInput = document.getElementById("validity-input");
const cardNumberDisplay = document.querySelectorAll(".card-number-display");
const cvvInput = document.getElementById("cvv");
const cvvDisplay = document.getElementById("cvv-display");

//WRITING CARD NUMBER ON CREDIT CARD FUNCTION
let currentSpanIndex = 0;

cardNumber.addEventListener("input", () => {
    const inputNumber = cardNumber.value.replace(/\D/g, "");
    cardNumber.value = cardNumber.value.slice(0, 16).replace(/\D/g, "");

    for (let i = 0; i < cardNumberDisplay.length; i++) {

        if (i < inputNumber.length) {
            cardNumberDisplay[i].textContent = inputNumber[i];
        }
        else {
            cardNumberDisplay[i].textContent = "_";
        }
    }

    if (inputNumber.length <= cardNumberDisplay.length) {
        currentSpanIndex = inputNumber.length;
    }
    else {
        currentSpanIndex = cardNumberDisplay.length;
    }

});

//WRITING CARD HOLDER NAME ON CREDIT CARD FUNCTION
cardNameInput.addEventListener("input", () => {

    const regex = /^[a-zA-Z\s]*$/; // Regular expression to match only letters and spaces
    if (!regex.test(cardNameInput.value)) {
        cardNameInput.value = cardNameInput.value.replace(/[^a-zA-Z\s]/g, ''); // Remove any characters that are not letters or spaces
    }

    if (cardNameInput.value.length < 1) {
        cardHolderName.innerText = "Your Name Here";
    }
    else if (cardNameInput.value.length > 30) {
        cardNameInput.value = cardNameInput.value.slice(0, 30);
    }
    else {
        
            cardHolderName.innerText = cardNameInput.value;
    }

});

//WRITING Date ON CREDIT CARD FUNCTION
validityInput.addEventListener("input", () => {
    const inputString = validityInput.value;

    if (inputString.length < 1) {
        displayValidity.innerText = "06/28";
        return false;
    }

    const parts = inputString.split("-");
    const year = parts[0].slice(2);
    const month = parts[1];

    //Final Formatted String
    const formattedString = `${month} / ${year}`;
    displayValidity.innerText = formattedString;

});

//WRITING CVV ON CREDIT CARD FUNCTION
cvvInput.addEventListener("input", () => {
    const userInput = cvvInput.value;
    const sanitizedInput = userInput.slice(0, 3);
    const numericInput = sanitizedInput.replace(/\D/g, "");
    cvvInput.value = numericInput;
    cvvDisplay.innerText = numericInput;
});

//FLIP CREDIT CARD
cvvInput.addEventListener("click", () => {
    document.getElementById("card").style.transform = `rotateY(180deg)`;
});

//REFLIP CARD
document.addEventListener("click", () => {
    if (document.activeElement.id != "cvv") {
        document.getElementById("card").style.transform = `rotateY(0deg)`;
    }
});

window.onload = () => {
    cvvInput.value = "";
    validityInput.value = "";
    cardNameInput.value == "";
    cardNumber.value = "";
}