var Page = (function()
{
	"use strict";
	
	var $container = $( 'body' ),
		$bookBlock = $( '#bb-bookblock' ),
		$items = $bookBlock.children(),
		itemsCount = $items.length,
		current = 0,
		bb = $( '#bb-bookblock' ).bookblock(
		{
			speed : 500,
			perspective : 2000,
			shadowSides	: 0.8,
			shadowFlip	: 0.4,
			onEndFlip : function(old, page, isLimit)
			{
				current = page;
				// update TOC current
				updateTOC();
				// updateNavigation
				updateNavigation( isLimit );
			}
		} ),
		$navNext = $( '#bb-nav-next' ),
		$navPrev = $( '#bb-nav-prev' ),
		$menuItems = $container.find( '#mainMenu > li a' ),
		$tblcontents = $( '#mainMenu' ),
		transEndEventNames = {
			'WebkitTransition': 'webkitTransitionEnd',
			'MozTransition': 'transitionend',
			'OTransition': 'oTransitionEnd',
			'msTransition': 'MSTransitionEnd',
			'transition': 'transitionend'
		},
		transEndEventName = transEndEventNames[Modernizr.prefixed('transition')],
		supportTransitions = Modernizr.csstransitions;
	
	function init()
	{
        initEvents();
		return bb;
	}
	
	function setHash(target)
	{
		if(history.pushState)
		{
			history.pushState(null, null, '#'+target);
		}
		else {
			location.hash = '#'+target;
		}
		var campo = $('#titulo_aula');
		campo.removeClass('active');
		
	}
	
	function gotoPage()
	{
		var hash = location.hash;
		
		var target = $('#bb-bookblock '+hash+'');
		var idx = $(target).index();
        bb.jump( idx + 1 );

		updateNavigation();
		/*
		if(history.pushState)
		{
			history.pushState(null, null, '#'+target);
		}
		else {
			location.hash = '#'+target;
		}
		// */
	}
	
	function initEvents()
	{
		// add navigation events
		$navNext.on( 'click', function(e)
		{
			if ($(this).hasClass('disabled'))
			{
				e.preventDefault();
				e.stopPropagation();
				return false;
			}
			bb.next();
			var target = $(bb.$items[bb.current]).attr('id');
			setHash(target);
			
			return false;
		} );
		
		$navPrev.on( 'click', function(e)
		{
			if ($(this).hasClass('disabled'))
			{
				e.preventDefault();
				e.stopPropagation();
				return false;
			}
			bb.prev();
			var target = $(bb.$items[bb.current]).attr('id');
			setHash(target);
			return false;
		} );
		
		// show table of contents
		$tblcontents.on( 'click', toggleTOC );
		
		// click a menu item
		$menuItems.on( 'click', function()
		{
			var $el = $( this ),
				target = $el.data('target'),
				idx = $('#'+target).index(),
				jump = function() {
					bb.jump( idx + 1 );
				};
				
			setHash(target);
			current !== idx ? closeTOC( jump ) : closeTOC();
			
			return false;
			
		} );
		
		$(window).on('hashchange', function() 
		{
			gotoPage();
		});
		/*
		$('.bb-item').swipe(
		{
			swipeLeft:function(event, direction, distance, duration, fingerCount)
			{
				bb.next()
				return false;
			},
			swipeRight:function(event, direction, distance, duration, fingerCount)
			{
				bb.prev();
				return false;
			},
			 threshold:4,
			 excludedElements:"button, input, select, textarea"
		} );
		// */
		gotoPage();
	}

	function updateTOC()
	{
		var campo = $('#titulo_aula');
		/*
		var target = $(bb.$items[bb.current]).attr('id');
		//$menuItems.removeClass( 'active' );
		var myitem = $menuItems.parents('nav').find('li a[href="#'+target+'"]');
		//myitem.addClass('active');
		
		var itemx = myitem;
		var aula = myitem.data('aula');
		if (aula == '' || aula == undefined)
		{
			itemx = myitem.parents('li').parents('li').find('>a');
			aula = itemx.data('aula');
		}
		var idx = itemx.find('.numero').html().trim();
		if (idx)
		{
			campo.html('Aula '+idx+' - '+aula);
		}
		else
		{
			campo.html(aula);
		}
		
		if (aula != '' && aula != undefined)
		{
			campo.addClass('active');
		}
		*/
		campo.addClass('active');
		//$menuItems.eq( current ).parent().addClass( 'active' );
	}

	function updateNavigation( isLastPage )
	{
		$navNext.show();
		$navPrev.show();

		if( current === 0 )
		{
			$navPrev.addClass('disabled');
			$navNext.removeClass('disabled');
			//$navNext.show();
			//$navPrev.hide();
		}
		else if( isLastPage )
		{
			$navPrev.removeClass('disabled');
			$navNext.addClass('disabled');
			//$navNext.hide();
			//$navPrev.show();
		}
		else
		{
			$navPrev.removeClass('disabled');
			$navNext.removeClass('disabled');
			//$navNext.show();
			//$navPrev.show();
		}
		
		var total = $('#bb-bookblock .bb-item').length;
		var pages = $('.page-header .pages');
		var target = $(bb.$items[bb.current]).attr('id');
		var idx = $('#'+target).index();
		pages.find('.page-total').html(total);
		pages.find('.page-atual').html(idx + 1);

		$('#mainMenu a').removeClass('active');
		$('#mainMenu a[href=#'+target+']').addClass('active');
	}
	
	function toggleTOC()
	{
		var opened = $container.data( 'opened' );
		opened ? closeTOC() : openTOC();
	}

	function openTOC()
	{
		//$navNext.hide();
		//$navPrev.hide();
		$container.addClass( 'slideRight' ).data( 'opened', true );
	}

	function closeTOC( callback )
	{
		$('.button-collapse').sideNav('hide');
		updateNavigation( current === itemsCount - 1 );
		$container.removeClass( 'slideRight' ).data( 'opened', false );
		if( callback )
		{
			callback.call();
		}
	}
	
	// add keyboard events
	$( document ).keydown( function(e)
	{
		var target = $(bb.$items[bb.current]).attr('id');
		
		var keyCode = e.keyCode || e.which,
			arrow = {
				left : 37,
				up : 38,
				right : 39,
				down : 40
			};
		
		switch (keyCode)
        {
			case arrow.left:
				bb.prev();
				break;
			case arrow.right:
				bb.next();
				break;
		}
		setHash(target);
	} );

	return { init : init };

})();