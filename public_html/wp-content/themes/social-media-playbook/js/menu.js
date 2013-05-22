$(function(){

	$('#menu-button').on('click', function(e){
		e.preventDefault();
		$('#menu').addClass('shadow').toggleClass('menu-open');
		$('#wrapper').toggleClass('display-none');
	});

	$('#menu-close, #wrapper').on('click', function(e){
		e.preventDefault();
		var $menu = $('#menu');
		var menuWidth = $menu.innerWidth();
		$('#menu').removeClass('shadow').toggleClass('menu-open');
		$('#wrapper').toggleClass('display-none');
	});

	$('.menu-chapter').on('click', function(e){
		e.preventDefault();
		var $chapter = $(this);
		$chapter.parent('.menu-item').toggleClass('menu-item-open');
		$chapter.siblings('.article-list').slideToggle();
	});

});