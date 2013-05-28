$(function(){

	$('#menu-button').on('click', function(e){
		e.preventDefault();
		var $menu = $('#menu');

		if(Modernizr.csstransitions) {
			$menu.addClass('shadow').toggleClass('menu-open');
		} else {
			$menu.addClass('shadow').animate({'left':'0'}, 700);
		}

		var height = parseInt($(document).innerHeight()) + 'px';
		var width = parseInt($(document).innerWidth()) + 'px';

		$('#wrapper').css({'height':height,'width':width}).toggleClass('display-none');
	});

	$('#menu-close, #wrapper').on('click', function(e){
		e.preventDefault();
		var $menu = $('#menu');
		var menuWidth = $menu.innerWidth();

		if(Modernizr.csstransitions) {
			$menu.addClass('shadow').toggleClass('menu-open');
		} else {
			$menu.addClass('shadow').animate({'left':'-1000px'}, 700);
		}

		$('#wrapper').toggleClass('display-none');
	});

	$('.menu-chapter-animate').on('click', function(e){
		e.preventDefault();
		var $chapter = $(this);
		$chapter.parent('.menu-item').toggleClass('menu-item-open');
		$chapter.siblings('.article-list').slideToggle();
	});
});