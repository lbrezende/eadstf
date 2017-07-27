<?php
global $modulo;
global $glossario;

include "paginas/{$modulo}/__glossario.php";

function _el($tipo,$texto,$args=NULL)
{
	$saida = '';
	
	switch ($tipo)
	{
		case 'glossario':
			$saida .= _el_glossario($texto);
		break;
		case 'legis':
			$saida .= _el_legis($texto);
		break;
		default:
			$saida .= $texto;
		break;
	}
	
	echo $saida;
}

function retifica($texto)
{
	$key = $texto;
	$key = strtolower($key);
	$key = strip_tags($key);
	//$key = utf8_encode($key);
	
	return $key;
}

function _el_glossario_get_key($texto)
{
	global $glossario;
	$key = retifica($texto);
	$item = @$glossario[$key];
	if (!$item)
	{
		return $key;
	}
	
	if (array_key_exists('equal',$item))
	{
		$key = $item['equal'];
	}
	
	$key = retifica($key);
	return $key;
}

function _el_glossario($texto)
{
	global $glossario;
	
	$saida = '';
	$key = _el_glossario_get_key($texto);
	
	ob_start();
	?><a class="glossario" href="#glossario-<?php echo md5($key); ?>" data-target="#glossario-<?php echo md5($key); ?>"><?php echo $texto; ?></a><?php
	$saida .= ob_get_clean();
	
	return $saida;
}

function _el_legis($texto)
{
	global $glossario;
	
	$saida = '';
	$key = _el_glossario_get_key($texto);
	
	ob_start();
	?><a class="legis" href="#glossario-<?php echo md5($key); ?>" data-target="#glossario-<?php echo md5($key); ?>"><?php echo $texto; ?></a><?php
	$saida .= ob_get_clean();
	
	return $saida;
}
