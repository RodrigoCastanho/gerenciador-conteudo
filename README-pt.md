# Sistema Gerenciador de Conteúdos(CMS)
Desenvolvedor:---  Rodrigo F Castanho
E-mail:--- <rodrigo.fcastanho@gmail.com>
Twitter:--[@R0d5160](https://twitter.com/R0d5160) 

[![logotipo.jpg](https://s11.postimg.org/cf0i6cnib/logotipo.jpg)](https://postimg.org/image/vwv5makfz/)

É um Sistema Gerenciador de Conteúdos Web, também conhecido nas sigla CMS(Custom Management System), É um projeto que desenvolvi como tema do meu TCC(Trabalho de Conclusão de Curso), possui o foco em ajudar pequenas empresas a manter organização de arquivos e conteúdos web sendo site e sistemas interno(intranet), tudo isso sem custo pelo software.

### Tecnologia

Sistema Gerenciador de Conteúdos foi desenvolvido utilizando a arquitetura LAMP:

* [L] - Linux
* [A] - Apache
* [M] - MySQL
* [P] - PHP

### Instalação

Assim que baixar os arquivos do software independente do diretório que tiver, tera que descompactar os arquivos depois movê-lo(mv) para o diretório apache, /var/www ou htdocs dependo da sua distribuição linux ou instalação do servidor web Apache segue os comandos abaixo como exemplo:

```
# tar -xf Sistema_Gerenciador_de_Conteudo.tar
# mv Sistema_Gerenciador_de_Conteudo /var/www
```
Depois de passar o arquivo para diretório web do Apache tera que aplicar permissões em todo o diretório 

```
# chmod 777 -R Sistema_Gerenciador_de_Conteudo/
```
Agora só abrir o Sistema em seu navegador de preferencia digitar url:
```
localhost/Sistema_Gerenciador_de_Conteudo
```
Obs: Sistema funciona melhor navegadores com o código Mozilla

### Estrutura
 
Diretórios do Sistema Gerenciador de Conteúdos 
```
* cd /Sistema_Gerenciador_de_Conteudo
        /index.php 
        /login 
        /interface_login 
        /class 
        /administracao 
        /interface_adm
        /interface_pg_inicial
        /jquery
```
### Contribuição

Como dito no texto acima esse sistema foi meu tema de TCC(Trabalho de Conclusão de Curso) então não foi terminado falta muito a ser feito e melhorado, pretendo continuar a desenvolvê-lo mas quem quiser contribuir dar dicas e até continua fico muito grato.

#### Licença 

[![GPLv3.png](https://www.gnu.org/graphics/gplv3-127x51.png)](https://postimg.org/image/vwv5makfz/)

**GPLv3, Software Livre**

[//]: # (These are reference links used in the body of this note and get stripped out when the markdown processor does its job. There is no need to format nicely because it shouldn't be seen. Thanks SO - http://stackoverflow.com/questions/4823468/store-comments-in-markdown-syntax)
