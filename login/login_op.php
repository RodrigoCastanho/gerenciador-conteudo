/*
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
 */


<?php
  include ("funcao_campo_op.php");
        
  $loginUsuario = $_POST['loginUsuario'];
  $senhaUsuario = $_POST['senhaUsuario'];
  
  //Chamada da função CampoVasio 
  campoVasio($loginUsuario, $senhaUsuario);
  
  if(($loginUsuario == "root") && ($senhaUsuario == "cms")){
  //Alguma pagina do sistema 
  include ("../administracao/admin_op.php");
  }else{
   //Trechos de HTML que se encarrega de suportar codigos CSS. 
   echo ('<html>
            <head>
               <link rel="stylesheet" type="text/css" href="../interface_login/login_est.css">
               <link rel="stylesheet" type="text/css" href="../interface_pag_inicial/pagina_inicial_est.css">
            </head>
             <body>
               <div id="logo"></div>
               <div id="menu_sup"></div>
               <div id="login_erro"> <div id="fonte1"> login ou senha incorretos! </div></div>
             </body>
           </html>');    
  //retorno da pagina Login 
   break;       
  }  
 ?>

