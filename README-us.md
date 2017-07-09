# Content Management System (CMS)

Developer:---  Rodrigo F Castanho

E-mail:--- <rodrigo.fcastanho@gmail.com>

Twitter:--[@R0d5160](https://twitter.com/R0d5160) 

[![logotipo.jpg](https://s11.postimg.org/cf0i6cnib/logotipo.jpg)](https://postimg.org/image/vwv5makfz/)

It is a Web Content Management System, also known as CMS (Custom Management System). It is a project that I developed as the subject of my TCC (Course Completion Work), focused on helping small businesses keep files and Web content being site and internal systems (intranet), all at no cost by the software.

### Technology

System Content Manager was developed using the LAMP architecture:

* [L] - Linux
* [A] - Apache
* [M] - MySQL
* [P] - PHP

### Installation

As soon as you download the software files independent of the directory you have, you will have to unpack the files after moving it (mv) to the apache directory, /var/www or htdocs depending on your linux distribution or Apache web server installation follow the commands Below as an example:

```
# tar -xf Sistema_Gerenciador_de_Conteudo.tar
# mv Sistema_Gerenciador_de_Conteudo /var/www
```
After passing the file to Apache web directory you will have to apply permissions on the whole directory

```
# chmod 777 -R Sistema_Gerenciador_de_Conteudo/
```
Now just open the System in your browser to type in url
```
localhost/Sistema_Gerenciador_de_Conteudo
```
Note: System works best browsers with Mozilla code

### Structure 
Content Management System Directories
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
### Contribution

As said in the text above this system was my subject of TCC (Course Conclusion Work) so it was not finished, there is a lot to be done and improved, I intend to continue to develop it but whoever wants to contribute gives tips and even continues I am very grateful.

#### License

[![GPLv3.png](https://www.gnu.org/graphics/gplv3-127x51.png)](https://postimg.org/image/vwv5makfz/)

**GPLv3, Free Software**

[//]: # (These are reference links used in the body of this note and get stripped out when the markdown processor does its job. There is no need to format nicely because it shouldn't be seen. Thanks SO - http://stackoverflow.com/questions/4823468/store-comments-in-markdown-syntax)
