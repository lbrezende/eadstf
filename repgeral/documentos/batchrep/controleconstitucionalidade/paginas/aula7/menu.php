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
		'label'		=> 'O federalismo — introdução',
		'numerico'	=> true,
		'jump'		=> false,
		//'sub'       => array(1),
		//'children'	=> []
	],
	'02-0-estado'	=> [
		'label'		=> 'O Estado Federal',
		'numerico'	=> true,
		'jump'		=> false,
		//'sub'       => array(1),
		'children'	=> [
			'02-1-formacao'	=> array(
				'label'		=> 'Formação do Estado Federal',
				'numerico'	=> true,
				//'sub'       => array(1,2),
			),
			'02-2-federalismo'	=> array(
				'label'		=> 'Federalismo simétrico e assimétrico',
				'numerico'	=> true,
				//'sub'       => array(1,2,3,4),
			),
			'02-3-municipios'	=> array(
				'label'		=> 'Os municípios na Federação brasileira',
				'numerico'	=> true,
				//'sub'       => array(1),
			),
			'02-4-competitivo'	=> array(
				'label'		=> 'Federalismo competitivo ou dual e federalismo coopera',
				'numerico'	=> true,
				//'sub'       => array(1,2),
			),
			'02-5-territorios'	=> array(
				'label'		=> 'Territórios federais',
				'numerico'	=> true,
				//'sub'       => array(1,2),
			),
			'02-6-distritos'	=> array(
				'label'		=> 'Distritos Federais',
				'numerico'	=> true,
				//'sub'       => array(1,2),
			),
		]
	],
	'03-0-competencias'	=> [
		'label'		=> 'As competências constitucionais dos entes federativos',
		'numerico'	=> true,
		'jump'		=> false,
		'sub'       => array(1,2),
	],
	'04-0-federalismo'	=> [
		'label'		=> 'O federalismo brasileiro e o STF',
		'numerico'	=> true,
		'jump'		=> false,
		//'sub'       => array(1),
		//'children'	=> []
	],
	'05-0-conclusao'	=> [
		'label'		=> 'Conclusão',
		'numerico'	=> true,
		'jump'		=> false,
		//'sub'       => array(1),
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