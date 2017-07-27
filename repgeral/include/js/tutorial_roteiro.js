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