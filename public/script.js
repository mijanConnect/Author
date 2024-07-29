// <!-- Navbar JS -->
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "author-navbar") {
        x.className += " responsive";
    } else {
        x.className = "author-navbar";
    }
}