<?php
global $glossario;

$glossario2 = [
	'antítese'	=> [
		'label'		=> 'Antítese',
		'txt'		=> 'Antítese é uma ideia que se opõe a outra, apresentada anteriormente. Por exemplo: “limitado” em oposição a “absoluto”, “inferno” em oposição a “paraíso”, “paz” em oposição a “guerra”.',
	],
	/*
	'antítese'	=> [
		'label'		=> '',
		'txt'		=> '',
	],
	// */
];

$glossario = [];
foreach($glossario2 as $k=>$v)
{
	$k = retifica($k);
	$glossario[$k] = $v;
}
