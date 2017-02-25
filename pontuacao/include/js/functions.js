var bb;
var fcnLbClose;
var fcnLbOpen;
$(document).ready(function(e)
{
	bb = Page.init();
	//
	$('.button-collapse').sideNav(
	{
		menuWidth: 320, // Default is 240
		edge: 'left', // Choose the horizontal origin
		closeOnClick: true // Closes side-nav on <a> clicks, useful for Angular/Meteor
	});
	$('.page-header .close').on('click',function(e)
	{
		var hash = location.hash;
		$('.button-collapse').sideNav('hide');
		e.preventDefault();
		e.stopPropagation();

		location.hash = hash;
	});

	var $navNext = $( '#bb-nav-next' ),
		$navPrev = $( '#bb-nav-prev' );
	/*
	$('.bb-item').on('swipeleft',function()
	{
		//bb.next();
		$navNext.click();
	});
	$('.bb-item').on('swiperight',function()
	{
		//bb.prev();
		$navPrev.click();
	});
	// */
	$('.collapsible-trigger').click(function(e)
	{
		e.preventDefault();
		var target = $(this).attr('href');
		if (target === undefined)
		{
			target = $(this).data('target');
		}
		if (target == null || target == undefined) return false;
		
		$(target).toggleClass('active');
	});
	
	fcnLbClose = function (e)
	{
		e.stopPropagation();
		//$('body').off('click', '#lightbox', fcnLbClose);
		$('#lightbox').removeClass('active');
		setTimeout(function ()
		{
			//$('#lightbox').off('click', null, fcnLbClose);
			$('#lightbox').remove();
		}, 500);
	}	
	
	fcnLbOpen = function (content)
	{
		var body = $('body');
		var img = $(content).clone();
		var lb = $('<div id="lightbox"><div class="janela"></div></div>');
		$('#lightbox').remove();
		$('body').append(lb);
		img.removeClass('lightboxed');
		img.removeClass('fig-left');
		img.removeClass('fig-right');
		img.removeClass('fig-half');
		
		//img.attr('title','');
		lb.find('.janela').append(img);
		lb.on('click', null, fcnLbClose);
		setTimeout(function ()
		{
			lb.addClass('active');
			
			var imgDOM = document.getElementById('lightbox').getElementsByTagName('img')[0];
			var myimg = img.find('img');
			myimg.css('width',imgDOM.naturalWidth);
			
		}, 100);
	}
	$('body').on('click', '.lightboxed', function (e)
	{
		e.preventDefault();
		e.stopPropagation();
		fcnLbOpen($(this));
	});
	
});