<?php
global $menu;
global $modulo;
global $main_title;

require_once "paginas/{$modulo}/menu.php";

$ids = array_keys($menu);
$home = $ids[0];

function showChildren($item,&$conta,$nivel=1)
{
	ob_start();
	
	if (@$item['children'])
	{
		?>
	<ul>
		<?php
		$conta[$nivel] = 0;
		foreach($item['children'] as $k=>$sub)
		{
			//$subslug = $slug.'_'.$k
			$subslug = $k;
			if (array_key_exists('sub',$sub))
			{
				$subslug .= "_".$sub['sub'][0];
			}
			?>
		<li>
			<a href="#<?php echo $subslug; ?>" data-target="<?php echo $subslug; ?>" role="menuitem">
				<?php
				if (@$item['numerico'] === true)
				{
					$snum = '';
					if (@$sub['numero'])
					{
						$snum = $sub['numero'];
						$conta[$nivel] = $snum;
					}
					else
					{
						$nums = [];
						$conta[$nivel]++;
						for ($i=0;$i<=$nivel;$i++)
						{
							$nums[$i] = $conta[$i];
						}
						$snum = implode('.',$nums);
					}
					?>
				<span class="numero"><?php echo $snum; ?> </span>
				<?php
				}
				?>
				<?php echo $sub['label']; ?>
			</a>
			<?php
			echo showChildren($sub,$conta,$nivel+1);
			?>
		</li>
		<?php
		}
		?>
	</ul>
		<?php
	}
	
	$saida = ob_get_clean();
	return $saida;
}


?>
		<nav aria-label="Menu principal">
			<div class="brand-logo">
				<h1><?php echo $main_title; ?></h1>
			</div>
<?php
				include "setas.php";
				include "pages.php";
				include "font_config.php";
?>
				
				<ul id="mainMenu" class="side-nav" role="menu">
					
						<?php for ($i=1;$i < 4;$i++): ?>
						<div class="el el<?php echo $i; ?>"></div>
						<?php endfor; ?>
					
					<li class="header" aria-hidden="true">
						<a class="close">
							<i class="material-icons">close</i>
						</a>
						<div class="titulo">Sumário</div>
						<img src="img/triangulo01.svg" alt="" role="presentation">
					</li>
					
					<?php
					$conta = array();
					$conta[0] = 0;
					foreach($menu as $slug=>$item)
					{
						if (array_key_exists('sub',$item))
                        {
                            $slug .= "_".$item['sub'][0];
                        }
						$aula = '';
						if (@$item['numerico'] === true)
						{
							$aula = $item['label'];
						}
						
						$pagina = $slug;
						if (@$item['jump'])
						{
							$subs = array_keys(@$item['children']);
							if ($subs)
							{
								$pagina = $subs[0];
							}
						}
						?>
					
					<li class="item" >
						<a href="#<?php echo $pagina; ?>" data-target="<?php echo $pagina; ?>" data-aula="<?php echo $aula; ?>" role="menuitem">
<?php
							if (@$item['numerico'] === true)
							{
								$num = '';
								if (@$item['numero'])
								{
									$num = $item['numero'];
									$conta[0] = $num;
								}
								else
								{
									$num = ++$conta[0];
								}
								?>
							<span class="numero"><?php echo $num; ?>. </span>
<?php
							}
							?>
							<?php echo $item['label']; ?>
							
						</a>
<?php
						echo showChildren($item,$conta);
						?>
					</li>
<?php
					}
					?>
					
					<li class="fim">&nbsp;</li>
					
				</ul>
				<a href="#" data-activates="mainMenu" id="tblcontents" class="btn waves-effect waves-light button-collapse show-on-large" aria-hidden="true">
					<i class="material-icons">menu</i>
				</a>
			</nav>
			<script>
			$(document).ready(function(){
				$('.tooltipped').tooltip({delay: 50});
			});
			</script>