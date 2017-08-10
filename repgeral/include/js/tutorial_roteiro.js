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
					"texto": 	"Nesse passo a passo você conhecerá os principais recursos de navegação do curso."
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
					"texto": 	"Para redimensionar ou retornar ao tamanho original da fonte, utilize este menu."
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
			"tela":			".telaTutorial01",
			"foco": {
				"obj":		""
			},
			"msg": {
				"pos": {
					"x": 		50,
					"y": 		50,
					"ref":		["center","center"]
				},
				"txt": {
					"titulo": 	"Explicações de conteúdo",
					"texto": 	"Clique nas palavras destacadas na cor <a class='waves-effect waves-light modal-trigger btn-inline' href='#modal-tutorial' style=' text-indent: 0; '>vermelha <i class='material-icons right' style='text-indent: 0;'>add_to_photos</i></a> para visualizar sua definição. Para voltar à aula, clique fora do quadro ou pressione ESC."
				}
			},
			"scripts": [
				"$('.button-collapse').sideNav('hide');"
			]
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
					"texto": 	"Pronto! Viu como é fácil? Para seguir pressione ESC ou clique no botão abaixo “Encerrar tutorial”."
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