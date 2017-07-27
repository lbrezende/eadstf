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
		//'sub'       => array(1),
		//'children'	=> []
	],
	'02-0-omissao'	=> [
		'label'		=> 'A ação direta de inconstitucionalidade por omissão',
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
				//'sub'       => array(1),
			),
			'02-4-eficacia'	=> array(
				'label'		=> 'Eficácia das normas constitucionais',
				'numerico'	=> true,
				'sub'       => array(1,2),
			),
			'02-5-legitimidade'	=> array(
				'label'		=> 'Legitimidade ativa',
				'numerico'	=> true,
				//'sub'       => array(1,2),
			),
			'02-6-como'	=> array(
				'label'		=> 'Como se dá o processamento da ação direta de inconstitucionalidade por omissão?',
				'numerico'	=> true,
				//'sub'       => array(1,2),
			),
			'02-7-amicus'	=> array(
				'label'		=> 'Amicus curiae',
				'numerico'	=> true,
				//'sub'       => array(1,2),
			),
			'02-8-decisao'	=> array(
				'label'		=> 'Decisão',
				'numerico'	=> true,
				//'sub'       => array(1,2),
			),
			'02-9-quorum'	=> array(
				'label'		=> 'Quórum',
				'numerico'	=> true,
				//'sub'       => array(1,2),
			),
			'02-10-recorribilidade'	=> array(
				'label'		=> 'Recorribilidade',
				'numerico'	=> true,
				//'sub'       => array(1,2),
			),
			'02-11-conclusao'	=> array(
				'label'		=> 'Conclusão',
				'numerico'	=> true,
				//'sub'       => array(1,2),
			),
		],
	],
	'03-0-declaratoria'	=> [
		'label'		=> 'A ação declaratória de constitucionalidade',
		'numerico'	=> true,
		'jump'		=> false,
		'sub'       => array(1,2,3),
		//'children'	=> []
	],
	'04-0-descumpricao'	=> [
		'label'		=> 'A arguição de descumprimento de preceito fundamental',
		'numerico'	=> true,
		'jump'		=> false,
		//'sub'       => array(1),
		'children'	=> [
			'04-1-preceito'	=> array(
				'label'		=> 'O que é um preceito fundamental?',
				'numerico'	=> true,
				//'sub'       => array(1,2),
			),
			'04-2-competencia'	=> array(
				'label'		=> 'Competência',
				'numerico'	=> true,
				//'sub'       => array(1,2,3,4),
			),
			'04-3-legitimidade'	=> array(
				'label'		=> 'Legitimidade ativa',
				'numerico'	=> true,
				//'sub'       => array(1),
			),		
			'04-4-objeto'	=> array(
				'label'		=> 'Objeto',
				'numerico'	=> true,
				//'sub'       => array(1,2),
			),
			'04-5-amicus'	=> array(
				'label'		=> 'Amicus curiae',
				'numerico'	=> true,
				//'sub'       => array(1,2),
			),
			'04-6-quorum'	=> array(
				'label'		=> 'Quórum',
				'numerico'	=> true,
				//'sub'       => array(1,2),
			),
			'04-7-efeitos'	=> array(
				'label'		=> 'Efeitos da decisão',
				'numerico'	=> true,
				//'sub'       => array(1,2),
			),
			'04-8-estudo'	=> array(
				'label'		=> 'Estudo de caso',
				'numerico'	=> true,
				'sub'       => array(1,2),
			),
		],
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