		<?php
		global $menu;
		
		require_once "elements.php";
		
		function abreMenu($menu=NULL,$parent=NULL,$prefix='',$numero='')
		{
			$saida = array();
			$conta = 0;
			foreach($menu as $i=>$m)
			{
				if ($parent)
				{
					$m['parent'] = $parent;
				}
				if (@$m['numerico'] === true)
				{
					$conta++;
					$m['numero'] = '';
					if ($numero)
					{
						$m['numero'] .= $numero.'.';
					}
					$m['numero'] .= $conta;
				}
				$saida[$prefix.$i] = $m;
				if (array_key_exists('children',$m))
				{
					$saida = array_merge($saida,abreMenu($m['children'],$m,''));
				}
			}
			return $saida;
		}
		
        function MontaPagina($slug, $item, $conta)
        {
			global $modulo;
			
			if (@$item['jump']) return;
            ?>
				<!-- página <?php echo $conta; ?> - <?php echo $slug; ?> -->
				<div class="bb-item item-<?php echo $slug; ?>" id="<?php echo $slug; ?>" 
						style="display: <?php echo (($conta === 1)?('block'):('none')); ?>;"
						>
					<div class="content">
						<div class="scroller">
							<?php
                            $fname = "./paginas/{$modulo}/{$slug}.php";
                            if (file_exists($fname))
							{
								include($fname);
							}
							else
							{
							?>
							<article role="article">
								<div class="container">
									<h3>
										<?php
										if (@$item['numerico'] === true)
										{
											?>
										<span class="numero">
											<?php echo $item['numero']; ?>
										</span>
											<?php
										}
										?>
										<?php echo $item['label']; ?>
									</h3>
								</div>
							</article>
							<?php
							}
							?>
						</div> <!-- fecha scroller -->
					</div> <!-- fecha content -->
				</div> <!-- fecha bb-item -->
			<?php
        }
        
		$meuMenu = $menu;
		$items = abreMenu($meuMenu);
		?>
		<div class="bb-custom-wrapper">
			<div id="bb-bookblock" class="bb-bookblock" style="perspective: 2000px;" role="main">
				<?php
				$conta = 0;
				foreach($items as $slug=>$item)
				{
                    if (array_key_exists('sub',$item))
                    {
                        foreach($item['sub'] as $sub)
                        {
                            $conta++;
                            MontaPagina("{$slug}_{$sub}",$item,$conta);
                        }
                    }
                    else
                    {
                        $conta++;
                        MontaPagina($slug,$item,$conta);
                    }
				} 
				?>
			</div>
		</div>
		<?php // */ ?>