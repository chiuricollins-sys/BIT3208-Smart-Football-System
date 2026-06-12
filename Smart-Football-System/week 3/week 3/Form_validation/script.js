document.getElementById("password").addEventListener("keyup", checkStrength);

document.getElementById("loginForm").addEventListener("submit", function(event) {
    event.preventDefault();

    let username = document.getElementById("username").value;
    let email = document.getElementById("email").value;
    let password = document.getElementById("password").value;
    let message = document.getElementById("message");

    // Form Validation
    if(username === "" || email === "" || password === "") {
        message.innerHTML = "All fields are required.";
        message.className = "error";
        return;
    }

    // Email Validation
    let emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    if(!emailPattern.test(email)) {
        message.innerHTML = "Invalid email address.";
        message.className = "error";
        return;
    }

    // Login Validation
    if(username !== "Cole" || password !== "Cole123") {
        message.innerHTML = "Invalid username or password.";
        message.className = "error";
        return;
    }

    message.innerHTML = "Login Successful!";
    message.className = "success";
});

// Password Strength Checker
function checkStrength() {
    let password = document.getElementById("password").value;
    let strength = document.getElementById("strength");

    if(password.length < 6) {
        strength.innerHTML = "Weak Password";
        strength.style.color = "red";
    }
    else if(password.length < 10) {
        strength.innerHTML = "Mid Password";
        strength.style.color = "orange";
    }
    else {
        strength.innerHTML = "Strong Password";
        strength.style.color = "green";
    }
}