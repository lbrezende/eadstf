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
	'01-0-controle'	=> [
		'label'		=> 'Controle de constitucionalidade',
		'numerico'	=> true,
		'jump'		=> false,
		//'sub'       => array(1),
		//'children'	=> []
	],
	'02-0-legislativo'	=> [
		'label'		=> 'O Poder Legislativo e o controle de constitucionalidade',
		'numerico'	=> true,
		'jump'		=> true,
		//'sub'       => array(1),
		'children'	=> [
			'02-1-poder'	=> array(
				'label'		=> 'O Poder Legislativo',
				'numerico'	=> true,
				'sub'       => array(1,2),
				'children'	=> [
					'02-2-processo'	=> array(
						'label'		=> 'O Processo legislativo',
						'numerico'	=> true,
						'sub'       => array(1,2,3,5),
					),
					'02-3-iniciativa'	=> array(
						'label'		=> 'Iniciativa das leis',
						'numerico'	=> true,
						//'sub'       => array(1),
					),
					'02-4-controle'	=> array(
						'label'		=> 'O controle preventivo de constitucionalidade exercido pelo Poder Legislativo',
						'numerico'	=> true,
						'sub'       => array(1,2),
					),
				],
			),
		]
	],
	'03-0-executivo'	=> [
		'label'		=> 'O Poder Executivo e o controle de constitucionalidade',
		'numerico'	=> true,
		'jump'		=> false,
		//'sub'       => array(1),
		//'children'	=> []
	],
	'04-0-judiciario'	=> [
		'label'		=> 'O Poder Judiciário e o controle de constitucionalidade',
		'numerico'	=> true,
		'jump'		=> false,
		'sub'       => array(1,2),
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