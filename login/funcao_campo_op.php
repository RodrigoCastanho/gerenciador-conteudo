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
            
//inclusão da class login na função  
include("../class/class_login.php");

 
 function campoVasio($loginUsuario, $senhaUsuario){
  
  $logar = new login();   //instancia da classe Login 

  if($loginUsuario != NULL){
      
    $logar->setloginUsuario($loginUsuario);   
    echo $logar->getloginUsuario(); 
    echo "<br>"; 
  }      
  else{
    // Trechos de HTML que se encarrega de suportar codigos CSS.  
    echo ('<html>   
             <head>
               <link rel="stylesheet" type="text/css" href="../interface_login/login_est.css">
               <link rel="stylesheet" type="text/css" href="../interface_pag_inicial/pagina_inicial_est.css">
             </head>  
             <body>
               <div id="logo"></div>
               <div id="menu_sup"></div>
               <div id="login_erro"> <div id="fonte1"> Campo incompleto </div></div>
             </body>
           </html>');    break;   
  }      
  if($senhaUsuario != NULL){
      
    $logar->setsenhaUsuario($senhaUsuario);  
    echo $logar->getsenhaUsuario();   
    echo "<br>"; 
    
  }else{
     // Trechos de HTML que se encarrega de suportar codigos CSS. 
     echo ('<html>
             <head>
                <link rel="stylesheet" type="text/css" href="../interface_login/login_est.css">
                <link rel="stylesheet" type="text/css" href="../interface_pag_inicial/pagina_inicial_est.css">
             </head>
             <body>
               <div id="logo"></div>
               <div id="menu_sup"></div>
               <div id="login_erro"> <div id="fonte1"> Campo incompleto</div> </div>
             </body>
           </html>'); break;      
  }
}

?>
