// Dynamic Menu
function toggleMenu() {

    let menu = document.getElementById("menu");

    if(menu.style.display === "none") {
        menu.style.display = "block";
    }
    else {
        menu.style.display = "none";
    }
}

// Interactive Button 1
function changeTitle() {

    document.getElementById("title").innerHTML =
        "Welcome to JavaScript DOM Manipulation!";
}

// Interactive Button 2
function changeColor() {

    document.body.style.backgroundColor = "lightblue";
}

// Live Text Preview
document.getElementById("textInput")
.addEventListener("keyup", function() {

    document.getElementById("preview").innerHTML =
        this.value;
});