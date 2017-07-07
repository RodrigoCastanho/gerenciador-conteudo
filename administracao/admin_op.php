<!--

        Copyright (C) <2011>  <Rodrigo F Castanho>

        This program is free software: you can redistribute it and/or modify
        it under the terms of the GNU General Public License as published by
        the Free Software Foundation, either version 3 of the License, or
        (at your option) any later version.

        This program is distributed in the hope that it will be useful,
        but WITHOUT ANY WARRANTY; without even the implied warranty of
        MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
        GNU General Public License for more details.

        You should have received a copy of the GNU General Public License
        along with this program.  If not, see <http://www.gnu.org/licenses/>.
 
-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
 <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
       <title>Gerenciador</title>
       <link rel="stylesheet" type="text/css" href="interface_login/Reset.css"> 
       <link rel="stylesheet" type="text/css" href="../interface_adm/fundo.css">
       <link rel="stylesheet" type="text/css" href="../interface_pag_inicial/pagina_inicial_est.css"/>       
 </head>
    <body>
        <div id="logo"></div>
        <div id="menu_sup"></div> 
        <div id="fundo"> </div>
        <div id="menu_controle_geral">
                    <div id="banner_menu"> Menu Controle </div>   
                   <ul id="menu_gerencial">
                       <li><a href="../administracao/cadastro_usuario.php"> Cadastro Usuário </a> </li>
                       <li><a href="../administracao/controle_conteudo.php"> Controle Conteúdo </a> </li>
                       <li><a href="../administracao/sistema.php"> Sistema </a></li>
                       <li><a href=""> Ajuda </a> </li>     
                   </ul>                                    
      </div> 
         <div id="menu_controle">
              <div id="banner_menu"> login usuário </div>
        <br/><br/>
       <form action="desenvolvimento" method="POST">
        <label id=""> Login </label>  <input type="text" name="" id="input_op2"/> 
         <br/><br/>
        <label id=""> Senha </label>  <input type="password" name="" id="input_op3"/>
         <br/>
         <input type="submit" value="login" id="botao"/>              
        </form>   
      </div>  
       <div id="conteudo_inicio"> <h1><p align="center">Bem Vindo</p></h1> 
       <div id="image"></div>
       <div id="campo_texto">
           Bem vindo ao Sistema de Gerenciamento de Conteúdo desenvolvido para facilitar e organizar conteúdos em pagina web, com o objetivo de tratar melhor as informações obtendo um alto controle
           de links, enquetes, tipos diferenciados de menu e templates. Mais informações de como utilizar o sistema selecione a opção “AJUDA”, bom proveito.         
       </div>  
       </div> 
    </body>
</html>
