/*$(function(){
    $("#header").load("header.php");
    $(".main-footer").load("footer.html");
});*/
// popovers Initialization
/*$(function () {
    $('[data-toggle="popover"]').popover()
})*/
// When the user scrolls down 20px from the top of the document, show the button
/*window.onscroll = function() {scrollFunction()};
function scrollFunction() {
    if(document.getElementById("myBtn")){
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            document.getElementById("myBtn").style.display = "block";
        } else {
            document.getElementById("myBtn").style.display = "none";
        }
    }
}*/
// When the user clicks on the button, scroll to the top of the document
/*function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}*/

function myFunction(x) {
  if (x.matches) { // If media query matches
    document.body.style.backgroundColor = "yellow";
  } else {
   document.body.style.backgroundColor = "pink";
  }
}

var x = window.matchMedia("(max-width: 420px)")
myFunction(x) // Call listener function at run time
x.addListener(myFunction) // Attach listener function on state changes