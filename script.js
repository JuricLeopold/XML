const icon1 = document.getElementById("fa-bars")
const icon2 = document.getElementById("fa-x")
const navmini = document.getElementById("nav-mini")

function show1() {
    icon1.style.display = "none"
    icon2.style.display = "flex"
    navmini.style.left = "0"
    document.body.style.overflowY = "hidden";
}

function show2() {
    icon2.style.display = "none"
    icon1.style.display = "flex"
    navmini.style.left = "-100%"
    document.body.style.overflowY = "scroll";
}

function hide() {
    navmini.style.left = "-100%"
    icon1.style.display = "flex"
}