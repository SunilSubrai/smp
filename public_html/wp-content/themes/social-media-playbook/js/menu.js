$(function(){

	$('#menu-button').on('click', function(e){
		e.preventDefault();
		$('#menu').addClass('shadow').toggleClass('menu-open');
		$('#wrapper').toggleClass('display-none');
	});

	$('#menu-close').on('click', function(e){
		e.preventDefault();
		var $menu = $('#menu');
		var menuWidth = $menu.innerWidth();
		$('#menu').removeClass('shadow').toggleClass('menu-open');
		$('#wrapper').toggleClass('display-none');
	});

	$('.menu-item').on('click', function(e){
		e.preventDefault();
		var $chapter = $(this);
		$chapter.toggleClass('menu-item-open').find('.article-list').slideToggle();
	});

});