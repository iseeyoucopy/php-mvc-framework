function menuShow() {
    document.getElementById("menu").classList.toggle("show");
}
function menuClose() {
    document.getElementById("menu").classList.remove("show");
}

// To set active link
const links = document.querySelectorAll("nav ul li");
links.forEach((link) => {
    link.addEventListener("click", function() {
        links.forEach((link) => link.classList.remove("active"));
        this.classList.add("active");
        menuClose();
    });
});