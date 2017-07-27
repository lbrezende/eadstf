var isTutorialOn = false;

var Tutorial = function()
{
	this.t = $('.mainTutorial');
	
	this.fila = [];
	
	this.t.find('.buttons .pular .btn').off('click');
	this.t.find('.buttons .pular .btn').click(
	function() {
		tut.close();
		window.location.hash = "#00-1-intro";
		//$('#mainMenu a[href=#00-1-intro]').click();
	});
	
	this.tempo = 300;
	//console.log('Tutorial');
	
	this.atual = 0;
	this.passos = TutorialPassos;
};

Tutorial.prototype.setKeys = function()
{
	$('body').keyup(function(e)
	{
		if (e.key == 'Escape' || e.keyCode == 27)
		{
			tut.close();
		}
		
		var keyCode = e.keyCode || e.which,
			arrow = {
				left : 37,
				up : 38,
				right : 39,
				down : 40
			};
		if (e.keyCode == arrow.right)
		{
			tut.passo(tut.atual + 1);
		}
		else if (e.keyCode == arrow.left)
		{
			tut.passo(tut.atual - 1);
		}
	});
};
Tutorial.prototype.init = function()
{
	isTutorialOn = true;
	this.t.addClass('abrindo');
	this.t.css('opacity',0);
	this.setFoco({x:-100,y:-100},0);
	this.t.animate(
		{
			opacity: 1
		}
		,500
		,function()
		{
			tut.t.removeClass('abrindo');
			tut.t.addClass('active');
			
			$('.telaTutorial').removeClass('active');
			$('#telaTutorial02').addClass('active');
			
			tut.setKeys();
			
			tut.roteiro();
		}
	);
}
Tutorial.prototype.close = function()
{
	isTutorialOn = false;
	$('body').off('keyup');
	$('.button-collapse').sideNav('hide');
	this.t.addClass('fechando');
	this.setFoco({ x: -100, y: -100 }, 0);
	this.setText({ x: -100, y: -100 }, 0, {});
	this.t.animate(
		{
			opacity: 0
		}
		,500
		,function()
		{
			$('.telaTutorial').removeClass('active');
			$('#telaTutorial01').addClass('active');
			
			tut.t.removeClass('fechando');
			tut.t.removeClass('active');
		}
	);
}
Tutorial.prototype.setFocoObj = function (objQuery, tempo)
{
	setTimeout(
		function() {
			var obj = $(objQuery);
			
			if (!obj || obj.length == 0)
			{
				tut.setFoco(
					{
						'cx': 0,
						'cy': 0,
						'r': 0
					}, 0
				);
				return;
			}	
			
			var w = $(window).innerWidth();
			var h = $(window).innerHeight();
			
			var r = (Math.max(obj.outerHeight(), obj.outerWidth()) / 2) + 10;
			
			var ax = obj.offset().left + obj.outerWidth()/2;
			var ay = obj.offset().top + obj.outerHeight()/2;
			
			var x = (ax / w) * 100;
			var y = (ay / h) * 100;
			
			var pos = {
				x: x,
				y: y,
				r: r
			}
			
			tut.setFoco(pos, tempo);
		}
		,600
	);
}	
Tutorial.prototype.setFoco = function(pos,tempo)
{
	var foco = this.t.find('.foco');
	
	if (!pos.r)
	{
		pos.r = 0;
	}
	
	var w = $(window).innerWidth();
	var h = $(window).innerHeight();
	
	var x = (w * (pos.x/ 100));
	var y = (h * (pos.y/ 100));
	
	foco.attr('cx', x);
	foco.attr('cy', y);
	
	foco.animate(
		{
			/*'cx': x,
			'cy': y,*/
			'r': pos.r
		},
		{
			duration: tempo,
			step: function(now, fx)
			{
				$(this).attr(fx.prop, now);
			}
		}
	);
}
Tutorial.prototype.setText = function(pos, tempo, objTxt)
{
	var txt = this.t.find('.explica');
	
	var ref = pos.ref;
	
	if (!ref)
	{
		ref = ['top','left'];
	}
	
	txt.css('top', pos.y + '%');
	txt.css('left', pos.x + '%');
	
	var tx;
	var ty;
	
	switch (ref[1])
	{
		case 'center':
			tx = '-50%';
			break;
		case 'right':
			tx = '-100%';
			break;
		default:
			tx = '0%';
			break;
	}
	
	switch (ref[0])
	{
		case 'center':
			ty = '-50%';
			break;
		case 'bottom':
			ty = '-100%';
			break;
		default:
			ty = '0%';
			break;
	}
	
	txt.css('transform','translate('+tx+','+ty+')');
	
	var txTitulo = objTxt.titulo ? objTxt.titulo : '';
	var txTexto = objTxt.texto ? objTxt.texto : '';
	txt.find('.titulo').html(txTitulo);
	txt.find('.texto').html(txTexto);
}
Tutorial.prototype.roteiro = function()
{
	this.t.find('.navBut .btn').off('click');
	this.t.find('.prev .btn').click(function()
	{
		tut.passo(tut.atual-1);
	});
	this.t.find('.next .btn').click(function()
	{
		tut.passo(tut.atual+1);
	});
	this.passo(0);
	//tut.setFocoObj('.mainTutorial .buttons .pular',500);
};
Tutorial.prototype.executa = function(scripts)
{
	if (scripts == undefined) return;
	for (var acao_n in scripts)
	{
		var acao = scripts[acao_n];
		
		if (acao.after)
		{
			this.t.find('.next .btn').on('click',null,acao.after,function(e)
			{
				tut.executa(e.data);
			});
		}
		if (typeof acao == 'string')
		{
			eval(acao);
		}
		else
		{
			if (acao.type == 'click')
			{
				$(acao.target).click();
			}
			else if (acao.type == "fotoObj")
			{
				this.setFocoObj(acao.target,100);
			}
			
		}
	}
}
Tutorial.prototype.passo = function(n)
{
	this.atual = n;
	var passo = this.passos[n];
	
	if (passo == undefined)
	{
		this.close();
		return false;
	}
	
	if (n == 0)
	{
		this.t.find('.prev .btn').addClass('disabled');
	}
	else
	{
		this.t.find('.prev .btn').removeClass('disabled');
	}
	
	var tela = (passo.tela) ? (passo.tela) : ('.telaTutorial01');
	$('.telaTutorial').removeClass('active');
	$(tela).addClass('active');
	
	this.executa(passo.scripts);
	
	setTimeout(function ()
	{
		if (passo.foco)
		{
			if (passo.foco.obj)
			{
				tut.setFocoObj(passo.foco.obj,tut.tempo);
			}
			else
			{
				tut.setFoco(passo.foco, tut.tempo);
				
			}
		}
		
		if (passo.msg)
		{
			tut.setText(passo.msg.pos,0, passo.msg.txt);
		}
	}, 100);
	
	// */
}

var tut;
$(document).ready(function()
{
	tut = new Tutorial();
	
	$('main').on('click','#abreTutorial',function(e)
	{
		tut.init();
	});
});
