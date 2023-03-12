function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
}

/* Set the width of the side navigation to 0 */
function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}
var cnt = 1;
function next() {
    if (cnt == 4) {
        cnt = 1;
    }
    else {
        cnt++
    }
    document.getElementById("slideshow").src = "../images/" + cnt + ".jpg"
}
function prev() {
    if (cnt == 1) {
        cnt = 4;
    }
    else {
        cnt--
    }
    document.getElementById("slideshow").src = "../images/" + cnt + ".jpg"
}