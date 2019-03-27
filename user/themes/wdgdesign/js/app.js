$(document).ready(function(){
	$('.toggle_btn').click(function(){
		$(this).toggleClass('open');
		$('.nav').addClass('nav_open');
	});
});