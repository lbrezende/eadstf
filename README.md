# eadstf

#Como começar a trabalhar

Os testes ficarão em https://lbrezende.github.io/eadstf/pontuacao/aula3/

O repositório para trabalhar e clonar é o https://github.com/lbrezende/eadstf/tree/gh-pages

Após clonar o repositório, altere para branch gh-pages. Se esqueceu como é, instale o git e:

#1 Baixe o repositório

```bash
git init

git clone https://github.com/lbrezende/eadstf.git

git branch gh-pages

git pull
```

Depois de rodar isso uma vez, sempre que quiser baixar as alterações basta:

```bash
git pull
```


#2 Submeta as alterações

```bash
git add -A (para incluir arquivos, caso tenha criado imagens)

git commit -am "comentario" (para comitar)

git push origin gh-pages (para subir)
```



Tudo que você comitar na branch gh-pages subirá automaticamente para o endereço de testes. Você poderá experimentar um pequeno lag de segundo

#enjoy