<article class="page">
	<div class="container">
		<div class="row">
			<div class="col s12 l6 offset-l3">
				<h3>Imagens</h3>
				
				<?php
				$imagens = [
					"https://pt.wikipedia.org/wiki/Lista_de_pal%C3%A1cios_em_Bras%C3%ADlia",
					"https://stanfordfreedomproject.com/what-is-freedom-new-essays-fall-2014/1601-2/",
					"http://aktiventag2012.unitas.org/2012/03/21/vorstellung-der-stadt-karlsruhe/",
					"http://www.crenshawlighting.com/projects/supreme-court-united-states/",
					"http://connaissances.dk/tag/paris/page/2",
				];
				?>
				
				<ul class="limpo" >
					<?php foreach($imagens as $item) : ?>
					<li>
						<a href="<?php echo $item; ?>" target="_blank" rel="external" ><?php echo $item; ?></a>
					</li>
					<?php endforeach; ?>
					
				</ul>
			</div>
		</div>
	</div>
</article>