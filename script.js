var prevScrollpos = 0; // Declare and initialize the prevScrollpos variable
var prevScrollpos = window.scrollY;
window.onscroll = function() {
    var currentScrollPos = window.scrollY;
    console.log("prevScrollpos:", prevScrollpos);
    console.log("currentScrollPos:", currentScrollPos);
    if (prevScrollpos > currentScrollPos) {
        document.getElementById("navbar").style.top = "-50px";
    }
    prevScrollpos = currentScrollPos;
}