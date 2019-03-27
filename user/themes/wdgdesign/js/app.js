$(document).ready(function(){
	$('.toggle_btn').click(function(){
		$(this).toggleClass('open');
		$('.navi').toggleClass('nav_open');
	});
});