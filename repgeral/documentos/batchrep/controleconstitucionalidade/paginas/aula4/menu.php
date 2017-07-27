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
		'label'		=> 'Introdução— o controle concentrado de constitucionalidade',
		'numerico'	=> true,
		'jump'		=> false,
		'sub'       => array(1,2,3),
		//'children'	=> []
	],
	'02-0-inconstitucionalidade'	=> [
		'label'		=> 'Ação direta de inconstitucionalidade (ADI)',
		'numerico'	=> true,
		'jump'		=> false,
		//'sub'       => array(1),
		'children'	=> [
			'02-1-estudo'	=> array(
				'label'		=> 'Estudo de caso',
				'numerico'	=> true,
				//'sub'       => array(1,2),
			),
			'02-2-competencia'	=> array(
				'label'		=> 'Competência',
				'numerico'	=> true,
				//'sub'       => array(1,2,3,4),
			),
			'02-3-objeto'	=> array(
				'label'		=> 'Objeto',
				'numerico'	=> true,
				'sub'       => array(1,2,3),
			),
			'02-4-controle'	=> array(
				'label'		=> 'Parâmetro de controle',
				'numerico'	=> true,
				//'sub'       => array(1,2),
			),
			'02-5-legitimidade'	=> array(
				'label'		=> 'Legitimidade ativa',
				'numerico'	=> true,
				//'sub'       => array(1,2),
			),
			'02-6-pertinencia'	=> array(
				'label'		=> 'Pertinência temática',
				'numerico'	=> true,
				//'sub'       => array(1,2),
			),
			'02-7-como'	=> array(
				'label'		=> 'Como se dá o processamento da ação direta de inconstitucionalidade',
				'numerico'	=> true,
				//'sub'       => array(1,2),
			),
			'02-8-amicus'	=> array(
				'label'		=> 'Amicus curiae',
				'numerico'	=> true,
				//'sub'       => array(1,2),
			),
			'02-9-decisao'	=> array(
				'label'		=> 'Decisão',
				'numerico'	=> true,
				'sub'       => array(1,2),
			),
			'02-10-efeitos'	=> array(
				'label'		=> 'Efeitos da decisão declaratória de inconstitucionalidade',
				'numerico'	=> true,
				//'sub'       => array(1,2),
			),
			'02-11-quorum'	=> array(
				'label'		=> 'Quórum',
				'numerico'	=> true,
				//'sub'       => array(1,2),
			),
			'02-12-recorribilidade'	=> array(
				'label'		=> 'Recorribilidade',
				'numerico'	=> true,
				//'sub'       => array(1,2),
			),
			'02-13-efeitos'	=> array(
				'label'		=> 'Modulação dos efeitos',
				'numerico'	=> true,
				//'sub'       => array(1,2),
			),
		]
	],
	'03-0-finais'	=> [
		'label'		=> 'Palavras finais',
		'numerico'	=> true,
		'jump'		=> false,
		//'sub'       => array(1),
		//'children'	=> []
	],
	
];