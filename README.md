# FJStarter

Template para criação de temas clássicos para WordPress.

Este tema está configurado para carregar a folha de estilo `assets/css/main.css`. Esse arquivo é gerado através da compilação dos arquivos SASS descritos abaixo. 

## SASS

A estrutura de arquivos de estilização está organizada da seguinte forma:

- _reset.scss: responsável por garantir a hegemonia da estilização em todos os browsers, removendo os valores padrões;
- _base.scss: contém as variáveis do SASS e estiliza os principais elementos HTML que tiveram seus valores resetados;
- _login.scss: traz todas as classes necessárias para personalizar a tela padrão de login do WordPress;
- main.scss: consolida os arquivos descritos anteriormente e traz as estilizações específicas para o tema em desenvolvimento.

Para compilar o arquivo `main.scss` no formato css, utilize o comando:

```shell
sass assets/css/main.scss assets/css/main.css
```

Durante o desenvolvimento, pode utilizar a flag `-w` para que o compilador recompile o arquivo automanticamente quando salvar as alterações:

```shell
sass -w assets/css/main.scss assets/css/main.css
```

E quando for exportar o tema para produção, utilize a flag `--style=compressed` para minificar o arquivo, removendo espaços e comentários:

```shell
sass --style=compressed assets/css/main.scss assets/css/main.css
```