const nameInput = document.querySelector("#name");
const emailInput = document.querySelector("#email");
const message = document.querySelector("#message");
const success = document.querySelector("#success");
const errorNodes = document.querySelectorAll(".error");

function validateForm() {
    let errorFlag = false;
    clearMessages();

    if (nameInput.value.trim() === "") {
        errorNodes[0].innerText = "Name cannot be blank";
        nameInput.classList.add("error-border");
        errorFlag = true;
    }

    if (!emailIsValid(emailInput.value)) {
        errorNodes[1].innerText = "Invalid email address";
        emailInput.classList.add("error-border");
        errorFlag = true;
    }

    if (message.value.trim() === "") {
        errorNodes[2].innerText = "Please enter a message";
        message.classList.add("error-border");
        errorFlag = true;
    }

    if (!errorFlag) {
        success.innerText = "Success!";
        window.location.href = "index.html"; 
    }
}

function clearMessages() {
    for (let i = 0; i < errorNodes.length; i++) {
        errorNodes[i].innerText = "";
    }

    success.innerText = "";
    nameInput.classList.remove("error-border");
    emailInput.classList.remove("error-border");
    message.classList.remove("error-border");
}

function emailIsValid(email) {
    let pattern = /\S+@\S+\.\S+/;
    return pattern.test(email);
}

const submitButton = document.querySelector(".submit-button");

submitButton.addEventListener("click", function(event) {
    event.preventDefault();
    validateForm();
});
