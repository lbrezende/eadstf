<?php
global $glossario;
?>
<article class="pagina" id="glossario">
	<div class="container">
		<div class="row">
			<div class="col s12">
				<h3>Glossário</h3>
				<div class="lista-glossario">
					<dl class="glossario">
						<?php
						foreach($glossario as $item)
						{
							if (array_key_exists('equal',$item)) continue;
							
							?>
						<div class="item">
							<dt class="termo"><?php echo $item['label']; ?></dt>
							<dd class="definicao"><?php echo $item['txt']; ?></dd>
						</div>
							<?php
						}
						?>
					</dl>
				</div>
			</div>
		</div>
	</div>
</article>

