jQuery(document).ready(function($) {
	jQuery('.email-textbox').watermark('Enter email address'); 
});


var tabber = {};
tabber.tabs = [];
tabber.currentScrollPos = 0;
tabber.init = function(){
	tabber.getTabs();
}
tabber.getTabs = function(){
	$('.tabbed-content').find('.content').each(function(index){
		var name = $(this).find('.label').text();
		var label =  $('<div/>').addClass('label').text($(this).find('.label').text());
		var tab = $('<a/>').addClass('tab-name-'+name).addClass('tab-button').append(label);
		$(this).addClass(name);
		tab.bind('click',tabber.tabClickHandler)
		if(index==($('.tabbed-content').find('.content').length-1)){
			tab.addClass('last');
		}
		tabber.tabs.push(tab);
	})
	tabber.createTabberNav();
}
tabber.createTabberNav = function(){
	var tabberNavContainer = $('<div/>').addClass('tabber-nav-container');
	var tabberNav = $('<div/>').addClass('tabber-nav');
	for (var i = 0; i < tabber.tabs.length; i++) {
		tabberNav.append(tabber.tabs[i]);
	};
	var spacer = $('<div/>').addClass('spacer');
	tabberNavContainer.append(tabberNav);
	$('.tabbed-content').prepend(tabberNavContainer,spacer.clone());
	$('.tabbed-content').append(spacer,tabberNavContainer.clone(true));
	tabber.setSelectedTab()
	tabber.showContent()
}
tabber.tabClickHandler = function(){
	var id = $(this).text();
	tabber.setSelectedTab($(this));
	tabber.showContent(id)
	tabber.scrollToElement(id);
}
tabber.setSelectedTab = function(tab){
	$('.tab-button').removeClass('selected');
	if(tab!=null){
		var classes = tab.attr('class');
		var name = classes.substr(0,classes.indexOf(' '));
		trace(name)
		$('.'+name).addClass('selected');		
	}else{
		$('.tabber-nav').first().find('.tab-button').first().addClass('selected');
		$('.tabber-nav').last().find('.tab-button').first().addClass('selected');
	}
}
tabber.showContent = function(id){
	$('.tabbed-content').find('.content').hide();
	if(id!=null)
	{
		$('.tabbed-content').find('.'+id).show();		
	}else{
		$('.tabbed-content').find('.content').first().show();
	}
}
tabber.scrollToElement = function(id){
	if(tabber.currentScrollPos!=$(window).scrollTop())
	{
		trace('scrolling')
		 $('html, body').animate({
		     scrollTop: $('.'+id).offset().top -40
		 }, 2000);
		 trace( tabber.currentScrollPos , $(window).scrollTop());
		 tabber.currentScrollPos = $(window).scrollTop();
	}
}
function trace(){
   var args = Array.prototype.slice.call( arguments );
   var log = args.shift();

   for( var i = 0; i < args.length; i++ )
   {
      log += " " + args[i];
   }

   if( typeof( console ) !== "undefined" && console )
   {
      console.log( log );
   }
   else
   {
      alert( log );
   }
}