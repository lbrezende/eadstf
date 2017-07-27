<?php
global $menu;
$menu = [
	'tutorial'			=> [
		'label'		=> 'Tutorial',
		//'sub'       => array(1),
	],
	'00-1-intro'		=> [
		'label'		=> 'Página inicial',
	],
	'00-2-apresenta'	=> [
		'label'		=> '<i>I</i>. Apresentação do curso',
		'numerico'	=> false,
		'jump'		=> false,
		//'sub'       => array(1),
		//'children'	=> []
	],
	'00-3-objetivos'	=> [
		'label'		=> '<i>II</i>. Objetivos',
		'numerico'	=> false,
		'jump'		=> false,
		//'sub'       => array(1),
		//'children'	=> []
	],
	'01-1-introducao'	=> [
		'label'		=> 'Introdução',
		'numerico'	=> true,
		'jump'		=> false,
		'sub'       => array(1,2,3,4),
		//'children'	=> []
	],
	'02-1-democracia'	=> [
		'label'		=> 'Democracia',
		'numerico'	=> true,
		'jump'		=> false,
		'sub'       => array(1,2,3),
		//'children'	=> []
	],
	'03-1-constituicao'	=> [
		'label'		=> 'Constituição e constitucionalismo',
		'numerico'	=> true,
		'jump'		=> false,
		'sub'       => array(1,2),
		//'children'	=> []
	],
	'04-1-poder'	=> [
		'label'		=> 'Poder Constituinte',
		'numerico'	=> true,
		'jump'		=> false,
		'sub'       => array(1,2),
		//'children'	=> []
	],
	'05-1-relacao'	=> [
		'label'		=> 'Relação entre Constituição e democracia',
		'numerico'	=> true,
		'jump'		=> false,
		'sub'       => array(1,2),
		//'children'	=> []
	],
	'06-1-consideracoes'	=> [
		'label'		=> 'Considerações finais',
		'numerico'	=> true,
		'jump'		=> false,
		//'sub'       => array(1),
		//'children'	=> []
	],
	'07-1-leitura'	=> [
		'label'		=> 'Sugestões de leitura',
		'numerico'	=> false,
		'jump'		=> false,
		//'sub'       => array(1),
		//'children'	=> []
	],
	'imagens'	=> [
		'label'		=> 'Imagens',
		'numerico'	=> false,
		'jump'		=> false,
		//'sub'       => array(1),
		//'children'	=> []
	],
	// */
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