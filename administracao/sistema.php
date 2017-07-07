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
        <title> Sistema </title>
        <link rel="stylesheet" type="text/css" href="../interface_login/Reset.css"> 
        <link rel="stylesheet" type="text/css" href="../interface_adm/fundo.css">
        <link rel="stylesheet" type="text/css" href="../interface_pag_inicial/pagina_inicial_est.css">
        <link rel="stylesheet" type="text/css" href="../interface_adm/sistema.css">
        <!--Trecho de código JavaScript e JQuery -->      
        <script type="text/javascript" src="../jquery/jquery-1.4.2.js"></script>
        <script type="text/javascript">
         $(document).ready(function(){
              //$("#parte1").hide();
              $("#parte2").hide(); 
              $("#parte3").hide();
         $("#controle_acss").click(function(){
             $("#parte1").show();
             $("#parte2").hide('slow');
             $("#parte3").hide('slow');
         });    
         $("#log_acss").click(function(){
             //$("#parte2").hide();
             $("#parte2").show();
             $("#parte1").hide('slow');
             $("#parte3").hide('slow');
      });  
        $("#email_acss").click(function(){
             //$("#parte2").hide();
             $("#parte3").show();
             $("#parte2").hide('slow');
             $("#parte1").hide('slow');
             
      });        
})
</script>
<style>
h3 {cursor:pointer;}
</style>   
             
    <head/>
    <body>
        <div id="logo"></div>
        <div id="menu_sup"></div> 
        
        <div id="controle_acss"> 
           <h3><img src="../interface_adm/acesso2.jpg"/><div id="texto1">Controle Acesso</div></h3>          
        </div>
        <div id="log_acss">   
          <h3><img src="../interface_adm/acesso2.jpg"/><div id="texto2">Log do Sistema</div></h3>
       </div>
        <div id="email_acss">
          <h3><img src="../interface_adm/acesso2.jpg"/><div id="texto2">Suporte</div></h3>     
        </div>
           <div id="parte1">
               <input type="submit" value="Buscar" id="botao1" title="Digite o login do usuário"/>  <input type="text" name="" id="inp" title="Digite o login do usuário"/>
               <br><br><br><br>
               <label>Usuários</label>
                <br>
               <textarea cols="40" rows="5" ></textarea>
           </div> 
           <div id="parte2">Logs</div> 
           <div id="parte3">
              <iframe name=suporte src="suporte.html" frameBorder=0 width=400 height=420 scrolling=auto></iframe>
           </div>    
    </body>
</html>
