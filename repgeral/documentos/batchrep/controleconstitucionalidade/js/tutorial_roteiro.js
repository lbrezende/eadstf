	var TutorialPassos = [
		{
			"tela":			".telaTutorial01",
			"foco": {
				"x": 		50,
				"y": 		50,
				"r": 		0,
			},
			"msg": {
				"pos": {
					"x": 		50,
					"y": 		50,
					"ref":		["center","center"]
				},
				"txt": {
					"titulo": 	"Olá!",
					"texto": 	"Este é o tutorial de navegação da aula."
				}
			},
			"scripts": [
				//"window.location.hash = '#tutorial_1'",
			]
		},
		{
			"tela":			".telaTutorial01",
			"foco": {
				"obj":		".font-config"
			},
			"msg": {
				"pos": {
					"x": 		50,
					"y": 		50,
					"ref":		["center","center"]
				},
				"txt": {
					"titulo": 	"Tamanho da fonte",
					"texto": 	"Para aumentar, diminuir ou retornar ao tamanho original da fonte, utilize este menu."
				}
			}
		},
		{
			"tela":			".telaTutorial01",
			"foco": {
				"obj":		"header nav ul.navegacao"
			},
			"msg": {
				"pos": {
					"x": 		50,
					"y": 		50,
					"ref":		["center","center"]
				},
				"txt": {
					"titulo": 	"Navegando entre as páginas",
					"texto": 	"Utilize o menu destacado ou, no seu teclado, as setas para a direita ou esquerda."
				}
			}
		},
		{
			"tela":			".telaTutorial01",
			"foco": {
				"obj":		"header nav .pages"
			},
			"msg": {
				"pos": {
					"x": 		50,
					"y": 		50,
					"ref":		["center","center"]
				},
				"txt": {
					"titulo": 	"Onde estou",
					"texto": 	"A página atual e o total de páginas da aula são exibidos na barra superior."
				}
			}
		},
		{
			"tela":			".telaTutorial01",
			"foco": {
				"obj":		"header nav #tblcontents"
			},
			"msg": {
				"pos": {
					"x": 		50,
					"y": 		50,
					"ref":		["center","center"]
				},
				"txt": {
					"titulo": 	"Menu principal",
					"texto": 	"Você também pode navegar clicando nos tópicos do Sumário."
				}
			},
			"scripts": [
				"$('.button-collapse').sideNav('hide');"
			]
		},
		{
			"tela":			".telaTutorial01",
			"foco": {
				"obj":		"header nav #mainMenu"
			},
			"msg": {
				"pos": {
					"x": 		50,
					"y": 		50,
					"ref":		["center","center"]
				},
				"txt": {
					"titulo": 	"Menu principal",
					"texto": 	"Você também pode navegar clicando nos tópicos do Sumário."
				}
			},
			"scripts": [
				"$('.button-collapse').sideNav('show');"
			]
		},
		{
			"tela":			".telaTutorial02",
			"foco": {
				"obj":		"#tutGlossario"
			},
			"msg": {
				"pos": {
					"x": 		50,
					"y": 		00,
					"ref":		["top","center"]
				},
				"txt": {
					"titulo": 	"Glossário",
					"texto": 	"Clique nas palavras destacadas na cor <span class='glossario'>verde</span> para visualizar sua definição.<br>Para voltar à aula, clique fora do quadro ou pressione ESC."
				}
			},
			"scripts": [
				"$('.button-collapse').sideNav('hide');"
			]
		},
		{
			"tela":			".telaTutorial03",
			"foco": {
				"obj":		"#tutLink"
			},
			"msg": {
				"pos": {
					"x": 		50,
					"y": 		00,
					"ref":		["top","center"]
				},
				"txt": {
					"titulo": 	"Links",
					"texto": 	"Clique nos textos destacados na cor <span class='ui-link'>azul</span> para acessar links complementares."
				}
			}
		},
		{
			"tela":			".telaTutorial04",
			"foco": {
				"obj":		"#tutLink2"
			},
			"msg": {
				"pos": {
					"x": 		50,
					"y": 		00,
					"ref":		["top","center"]
				},
				"txt": {
					"titulo": 	"Trechos da Constituição:",
					"texto": 	"Clique nos textos sublinhados para acessar o conteúdo do trecho da Constituição mencionado."
				}
			}
		},
		{
			"tela":			".telaTutorial05",
			"foco": {
				"obj":		"#tutImagem"
			},
			"msg": {
				"pos": {
					"x": 		50,
					"y": 		00,
					"ref":		["top","center"]
				},
				"txt": {
					"titulo": 	"Clique para aumentar:",
					"texto": 	"Clique na imagem para aumentar seu tamanho."
				}
			}
		},
		{
			"tela":			".telaTutorial06",
			"foco": {
				"obj":		"#tutVideo"
			},
			"msg": {
				"pos": {
					"x": 		50,
					"y": 		00,
					"ref":		["top","center"]
				},
				"txt": {
					"titulo": 	"Vídeo",
					"texto": 	"Clique em <span class='video-play'></span> para reproduzir o vídeo."
				}
			}
		},
		{
			"tela":			".telaTutorial01",
			"foco": {
				"obj":		".mainTutorial .buttons .pular"
			},
			"msg": {
				"pos": {
					"x": 		50,
					"y": 		50,
					"ref":		["center","center"]
				},
				"txt": {
					"titulo": 	"",
					"texto": 	"Caso queira ir direto para a aula, utilize o botão “Pular tutorial” abaixo ou pressione ESC."
				}
			},
			"scripts": [
				{
					"after": [
						"window.location.hash = '#00-1-intro'",
					]
				}
			]
		},
		{
			"tela":			".telaTutorial01",
			"foco": {
				"x": 		50,
				"y": 		50,
				"r": 		0,
			},
			"msg": {
				"pos": {
					"x": 		50,
					"y": 		50,
					"ref":		["center","center"]
				},
				"txt": {
					"titulo": 	"Boa aula!",
					"texto": 	null
				}
			},
			"scripts": [
				"window.location.hash = '#00-1-intro'",
				"tut.close()"
			]
		}//*/
	];