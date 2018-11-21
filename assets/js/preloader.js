$(document).ready(function() {
    setTimeout(function() {
        $(".preloader-hide").fadeOut(1500);
    },2000);
});

/* Modal Functions */

function showModalMenu() {
  document.getElementById('modalMenu').style.display = "block";
}
function hideModalMenu() {
  document.getElementById('modalMenu').style.display = "none";
}
