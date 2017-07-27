<article class="page">
	<div class="container">
		<div class="row">
			<div class="col s12 l6 offset-l3">
				<h3>Imagens</h3>
				
				<?php
				$imagens = [
					"http://www.peo.gov.au/learning/closer-look/parliament-and-congress/written-constitution.html",
					"http://www.amambainoticias.com.br/policia/justica/projeto-de-lei-propoe-multa-para-empregador-que-atrasar-salarios",
					"http://www.ancientfacts.net/was-ancient-greek-democracy-better-than-todays-american-democracy/",
					"http://list.ly/list/Vey-arguments-against-big-data-analyzed",
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