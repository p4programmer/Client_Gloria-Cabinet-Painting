// alert("Move the slider to change the color");
window.addEventListener("load", function () {
    document.getElementById("loader").style.display = "none";
    document.getElementById("wrapper").style.display = "block";
});
function slide() {
    let slideValue = document.getElementById("slider").value;
    document.getElementById("img-1").style.clipPath = "polygon(0 0," + slideValue + "% 0," + slideValue + "% 100%,0 100%)";
}