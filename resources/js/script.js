//$('.menu-btn').on('click', function(e) {
	//e.preventDefault;
	//$(this).toggleClass('menu-btn_active');
	//$('.menu-nav').toggleClass('menu-nav_active');
//}); 

$(document).ready(function(e) {
	$(".menu-btn").click(function(e){
		e.preventDefault;
		$(this).toggleClass('menu-btn_active');
		$('.menu-nav').toggleClass('menu-nav_active');
	});
});