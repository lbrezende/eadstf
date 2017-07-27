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
	'01-0-especies'	=> [
		'label'		=> 'Introdução – espécies de normas constitucionais',
		'numerico'	=> true,
		'jump'		=> false,
		'sub'       => array(1,2),
		//'children'	=> []
	],
	'02-0-direitos'	=> [
		'label'		=> 'Os direitos fundamentais – carta de direitos',
		'numerico'	=> true,
		'jump'		=> false,
		//'sub'       => array(1),
		//'children'	=> []
	],
	'03-0-humanos'	=> [
		'label'		=> 'Direitos fundamentais e direitos humanos',
		'numerico'	=> true,
		'jump'		=> false,
		//'sub'       => array(1),
		//'children'	=> []
	],
	'04-0-petreas'	=> [
		'label'		=> 'Direitos fundamentais e cláusulas pétreas',
		'numerico'	=> true,
		'jump'		=> false,
		//'sub'       => array(1),
		//'children'	=> []
	],
	'05-0-fundamentais'	=> [
		'label'		=> 'Classificação dos direitos fundamentais',
		'numerico'	=> true,
		'jump'		=> false,
		//'sub'       => array(1),
		'children'	=> [
			'05-1-negativos'	=> array(
				'label'		=> 'Direitos negativos',
				'numerico'	=> true,
				//'sub'       => array(1,2),
			),
			'05-2-positivos'	=> array(
				'label'		=> 'Direitos positivos',
				'numerico'	=> true,
				//'sub'       => array(1,2),
			),
			'05-3-politicos'	=> array(
				'label'		=> 'Direitos políticos',
				'numerico'	=> true,
				//'sub'       => array(1,2,3,4),
			),
			'05-4-procedimentais'	=> array(
				'label'		=> 'Direitos substantivos e procedimentais',
				'numerico'	=> true,
				//'sub'       => array(1),
			),
			'05-5-adicionais'	=> array(
				'label'		=> 'Considerações adicionais',
				'numerico'	=> true,
				//'sub'       => array(1,2),
			),
			
		]
	],
	'06-0-legislacao'	=> [
		'label'		=> 'Legislação e restrição de direitos',
		'numerico'	=> true,
		'jump'		=> false,
		//'sub'       => array(1),
		//'children'	=> []
	],
	'07-0-relacao'	=> [
		'label'		=> 'Relação entre direitos fundamentais',
		'numerico'	=> true,
		'jump'		=> false,
		//'sub'       => array(1,2),
		//'children'	=> []
	],
	'imagens'	=> [
		'label'		=> 'Imagens',
		'numerico'	=> false,
		'jump'		=> false,
		//'sub'       => array(1),
		//'children'	=> []
	],
	/*
	'07-3-glossario'	=> [
		'label'		=> 'Glossário',
		'numerico'	=> false,
		'jump'		=> false,
		//'sub'       => array(1),
		//'children'	=> []
	],
	// */
];