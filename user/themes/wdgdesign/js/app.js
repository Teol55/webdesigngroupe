$(document).ready(function(){
	$('.toggle_btn').click(function(){
		$(this).toggleClass('open');
	});
});

var btn=document.querySelector('.toggle_btn');
var nav =document.querySelector('.nav');

btn.onclick=function () {
    nav.classList.toggle('nav_open');
    
}