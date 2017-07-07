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
        <link rel="stylesheet" type="text/css" href="../interface_login/Reset.css"/> 
        <link rel="stylesheet" type="text/css" href="../interface_adm/fundo.css"/>
        <link rel="stylesheet" type="text/css" href="../interface_pag_inicial/pagina_inicial_est.css"/>    
        <title>Cadastro Usuário</title>
          <style type="text/css">
              .caixausuario{
                         border-style: none;
                         border-width: none;
                         width: 500px;
                         height: 400px;
                         background-image: url("../interface_adm/cdusuario.png");
                         margin: 0 auto;
                         margin-top: 250px;       
              }
              #form{
                   position: absolute;
                   top: 328px;     
              }
              #botao2{
                  width: 80px;
                  height: 30px;
                  background-image: url("../interface_adm/botaocadastro.jpeg"); 
                  background-repeat: no-repeat;
              }
          </style>    
    </head>
 <body>
      <div id="logo"></div>
      <div id="menu_sup"></div> 
      <div class="caixausuario"> 
         <form id="form" name="cadastro_usuario" method="post" action="#">
           <table width="400" border="0" cellspacing="4" cellpadding="5">
             <tr>
                <td>Nome:*</td>
                <td><input name="nome" type="text" id="nome" /></td>
             </tr> 
              <tr>
                <td>Sobrenome:*</td>
                <td><input name="sobrenome" type="text" id="sobrenome" /></td>
             </tr>  
             <tr>
                <td>Telefone:</td>
                <td><input name="telefone" type="text" id="telefone" /></td>
             </tr>       
              <tr>
                <td>E-mail:*</td>
                <td><input name="email" type="text" id="email" /></td>
             </tr> 
              <tr>
                <td>Criar login:*</td>
                <td><input name="login" type="text" id="login" /></td>
             </tr> 
             <tr>
                <td>Criar senha:*</td>
                <td><input name="senha" type="text" id="senha" /></td>
             </tr> 
        
              <tr>
                <td>Confirma senha:*</td>
                <td><input name="senha2" type="text" id="senha2" /></td>
             </tr>           
             <tr>
                  <td></td>
                  <td><input type="submit" value="" id="botao2"/></td>
            </tr>  
            </table>
           </form>  
      </div>      
 </body>
</html>
