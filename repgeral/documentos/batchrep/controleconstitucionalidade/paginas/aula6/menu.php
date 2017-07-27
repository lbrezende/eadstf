<?php
global $menu;
$menu = [
	/*
	'tutorial'			=> [
		'label'		=> 'Tutorial',
		'sub'       => array(1,2),
	],
	// */
	'00-1-intro'		=> [
		'label'		=> 'Página inicial',
	],
	'01-0-introducao'	=> [
		'label'		=> 'Introdução',
		'numerico'	=> true,
		'jump'		=> false,
		'sub'       => array(1,2),
		//'children'	=> []
	],
	'02-0-recurso'	=> [
		'label'		=> 'O recurso extraordinário e a repercussão geral',
		'numerico'	=> true,
		'jump'		=> false,
		//'sub'       => array(1),
		'children'	=> [
			'02-1-repercursao'	=> array(
				'label'		=> 'A repercussão geral',
				'numerico'	=> true,
				//'sub'       => array(1,2),
			),
			'02-2-manifestacao'	=> array(
				'label'		=> 'Manifestação sobre a repercussão geral',
				'numerico'	=> true,
				//'sub'       => array(1,2,3,4),
			),
			'02-3-julgamento'	=> array(
				'label'		=> 'Julgamento do recurso extraordinário',
				'numerico'	=> true,
				//'sub'       => array(1),
			),
			'02-4-amicus'	=> array(
				'label'		=> 'Amicus curiae',
				'numerico'	=> true,
				//'sub'       => array(1,2),
			),
		]
	],
	'03-0-sumula'	=> [
		'label'		=> 'A Súmula Vinculante',
		'numerico'	=> true,
		'jump'		=> false,
		//'sub'       => array(1),
		'children'	=> [
			'03-1-estudo'	=> array(
				'label'		=> 'Estudo de caso — a Súmula vinculante 49',
				'numerico'	=> true,
				'sub'       => array(1,2),
			),
			'03-2-proposta'	=> array(
				'label'		=> 'A Proposta de Súmula Vinculante (PSV)',
				'numerico'	=> true,
				//'sub'       => array(1,2,3,4),
			),
			'03-3-efeitos'	=> array(
				'label'		=> 'Efeitos',
				'numerico'	=> true,
				//'sub'       => array(1),
			),			
		]
	],	
	'04-0-final'	=> [
		'label'		=> 'Palavra final',
		'numerico'	=> true,
		'jump'		=> false,
		//'sub'       => array(1,2),
		//'children'	=> []
	],
	/*
	'07-1-leitura'	=> [
		'label'		=> 'Sugestões de leitura',
		'numerico'	=> false,
		'jump'		=> false,
		//'sub'       => array(1),
		//'children'	=> []
	],
	'07-3-glossario'	=> [
		'label'		=> 'Glossário',
		'numerico'	=> false,
		'jump'		=> false,
		//'sub'       => array(1),
		//'children'	=> []
	],
	// */
];