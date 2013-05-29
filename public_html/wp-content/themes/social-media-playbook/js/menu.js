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
		var $menuItem = $(this).parent('.menu-item');
		var $articles = $(this).siblings('.article-list');
		var $otherItems = $menuItem.siblings('.menu-item:not(.chapter-open)');
		var $otherArticles = $otherItems.find('.article-list');
		
		if($menuItem.hasClass('chapter-open')) return false;

		if($menuItem.hasClass('menu-item-open')) {
			
			$menuItem.removeClass('menu-item-open');
			$articles.slideUp();

		} else {

			$otherArticles.slideUp('5000');
			$articles.slideDown('5000');
			$menuItem.addClass('menu-item-open');
			$otherItems.removeClass('menu-item-open');			
		}		
	});
});