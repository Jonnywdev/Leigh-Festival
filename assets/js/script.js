var container = document.getElementById('cloud-container');
var image1 = document.getElementsById('one');


// update position of square 1 and square 2 when scroll event fires.
window.addEventListener('scroll', function() {


  image1.style = scrollPercent*window.innerWidth + 'px';
});