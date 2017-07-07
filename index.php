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
        <title> Login Sistema </title>
        <link rel="stylesheet" type="text/css" href="interface_login/Reset.css"> 
        <link rel="stylesheet" type="text/css" href="interface_login/login_est.css">
        <link rel="stylesheet" type="text/css" href="interface_pag_inicial/pagina_inicial_est.css"> 
           
    </head>
    <body>
      <div id="logo"></div>
      <div id="menu_sup">
      
       <div id="menu">      
         <div class="container">
          <ul>
            <li><a href="login/operacoes/criar_conta.php">Criar conta</a></li>
            <li><a href="login/operacoes/opcoes.php">Opções</a></li>
            <li><a href="#">Ajuda</a></li>
         </ul>
        </div>
       </div>   
      </div>            
    
     <div id="login">    
         <form action="login/login_op.php" method="POST">
         <br><br><br><br> 
        <label id="fonte"> Login:</label>  <input type="text" name="loginUsuario" id="input1" onfocus="this.value='';"> 
         <br>
        <label id="fonte"> Senha:</label>  <input type="password" name="senhaUsuario" id="input" onfocus="this.value='';">
         <br>
         <input type="submit" value="Conectar" id="botao">              
        </form>   
      </div>    
    </body>
</html>
