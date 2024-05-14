document.addEventListener("DOMContentLoaded", function () {
    const menuToggle = document.querySelector(".menu-toggle");
    const menu = document.querySelector(".menu");
    const navbar = document.querySelector(".navbar");
    const crudContainer = document.querySelector(".crud-container");

    menuToggle.addEventListener("click", function () {
        menu.classList.toggle("active");
        navbar.classList.toggle("menu-active");
        crudContainer.classList.toggle("menu-active");
    });

    const form = document.getElementById("create-form");

    form.addEventListener("submit", function (event) {
        event.preventDefault(); 

        if (validateForm()) {
            form.submit(); 
        }
    });

    function validateForm() {
        let isValid = true;

        // Validate each input field
        form.querySelectorAll("input").forEach(function (input) {
            if (!input.checkValidity()) {
                isValid = false;
                displayError(input);
            }
        });

        // Validate password match
        const password = form.querySelector("#password").value;
        const confirmPassword = form.querySelector("#confirmPassword").value;
        if (password !== confirmPassword) {
            document.getElementById("confirmPassword-error").textContent =
                "Passwords do not match";
            isValid = false;
        } else {
            document.getElementById("confirmPassword-error").textContent = "";
        }

        return isValid;
    }

    function displayError(input) {
        const error = input.nextElementSibling;
        if (!input.checkValidity()) {
            error.textContent = input.validationMessage;
            input.classList.add("error");
        } else {
            error.textContent = "";
            input.classList.remove("error");
        }
    }

    form.addEventListener("input", function (event) {
        if (event.target.tagName === "INPUT") {
            displayError(event.target);
        }
    });
});
