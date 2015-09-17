/*
(function(win, undef){

	$('.mobile_menu_icon').on('click', function() {
	    $(this).toggleClass('active');
		$('nav').slideToggle();
		return false;
	});

}(window));
*/

	$(function(){
	    // Mobile Menu
	    $('.mobile_menu_icon').on('click',function(){
	        $(this).toggleClass('active');
	        $('nav').slideToggle();
	        return false;                  
	    });
	});
