	<footer class="page-footer">
		<div class="container">
			<div class="center-align">
				<img src="img/ead_logo.png" class="logo" alt="SGP - Educação a Distância">
			</div>
		</div>
	</footer>
	
<?php
global $glossario;
foreach($glossario as $texto=>$item)
{
	if (array_key_exists('equal',$item)) continue;
	$key = _el_glossario_get_key($texto);
	$class = (@$item['class'])?($item['class']):('modal-glossario');
	?>
	<div id="glossario-<?php echo md5($key); ?>" class="modal <?php echo $class; ?>">
		<div class="modal-content">
			<h4><?php echo $item['label']; ?></h4>
			<p><?php echo $item['txt']; ?></p>
		</div>
	</div>
	<?php
}
?>
	
<?php  ?>

<script src="js/jquery.bookblock.js"></script>

<script src="js/page.js"></script>
<script src="js/functions.js" type="text/javascript"></script>

<?php // */ ?>