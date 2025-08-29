// script.js

// On the signup page (PHP), store the entered name in localStorage when submitting
document.addEventListener('DOMContentLoaded', function () {
    // Only run if on the signup page and button exists
    const submitBtn = document.getElementById("submitBtn");
    if (submitBtn) {
        submitBtn.addEventListener("click", function () {
            const nameInput = document.querySelector('input[name="name"]').innerHTML;
            localStorage.setItem("userName", nameInput);
        });
    }

    // On the main HTML page, set the name in the hero section if available
    const nameSpan = document.getElementById("yourname");
    if (nameSpan) {
        nameSpan.textContent = nameInput; 
        const storedName = localStorage.getItem("userName");
        if (storedName) {
            nameSpan.textContent = storedName;
        }
    }
});

c
