<!doctype html>
<html lang="pt-BR">
<head>
	<?php
	global $main_title;
	global $modulo;
	
	$modulo = 'aula7';
	require 'include/header.php';
	?>
</head>
<body>
	<header class="page-header">
		<?php
		include "include/menu.php";
		?>
		<div id="titulo_aula">
			<h2>Aula 7</h2>
		</div>
	</header>
	<main>
		<?php
		require 'include/functions.php';
		?>
		
	</main>
	<?php
	require'include/footer.php';
	require'include/tutorial.php';
	?>
</body>
</html>