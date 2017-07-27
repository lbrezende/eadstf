
				<ul class="font-config right" aria-hidden="true">
					<li>
						<a class="tooltipped a-menos" data-position="bottom" data-delay="50" data-tooltip="Diminuir fonte" data-action="-1">
							A-
						</a>
					</li>
					<li>
						<a class="tooltipped a-zero" data-position="bottom" data-delay="50" data-tooltip="Retomar tamanho padrão da fonte" data-action="0">
							A
						</a>
					</li>
					<li>
						<a class="tooltipped a-mais" data-position="bottom" data-delay="50" data-tooltip="Aumentar fonte" data-action="+1">
							A+
						</a>
					</li>
					<li class="separador">
					</li>
				</ul>
				<script>
				$(document).ready(function()
				{
					$('.font-config').on('click','a',null,function(e)
					{
						var action = $(this).data('action');
						if ($(this).hasClass('disabled'))
						{
							e.preventDefault();
							e.stopPropagation();
							return false;
						}
						var padrao = ($('article').parent().css('font-size'));
						var atual = ($('article').css('font-size'));
						padrao = Number(padrao.replace('px',''));
						atual = Number(atual.replace('px',''));
				
						var size = Number(atual/padrao);
						switch (action.toString()) {
							case '+1':
								size *= 1.2;
								break;
							case '-1':
								size *= 0.9;
								break;
							case '0':
							default:
								size = 1;
								break;
						}
						console.log(size);
				
						if (size < .7)
						{
							size = 0.7;
							$('.font-config a-menos').addClass('disabled');
						}
						else if (size > 2)
						{
							size = 2.0;
							$('.font-config a-mais').addClass('disabled');
						}
						else
						{
							$('.font-config a-menos').removeClass('disabled');
							$('.font-config a-mais').removeClass('disabled');
						}
						
						$('article').css('font-size',size+'em');
					});
				})
				</script>
