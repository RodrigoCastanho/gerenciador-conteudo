<?php

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

/**
 * Description of class_conexdb
 *
 * @author Rodrigo F Castanho 
 */
class class_conexdb {
    
   private $host; 
   private $user;
   private $pass;
   private $database;
   private $sql;
  
 //Inserir valores nas propriedades da class 
 function setdb($prop, $valor){
  $this->prop = $valor;    
     
 }
 //Pegar os valores da class 
 function getdb(){
  return $this->sql;    
     
 }
 //Estabelecer a conexão com o banco de Dados Mysql
 function conexaodb(){
  $dbconx = mysql_connect ($this->host, $this->user, $this->pass) or die ($this->erro(mysql_error())) ;    
  return $dbconx;       
 }
 //function selecaodb(){
 //$dbsel    
      
 //}
 //Passar operação para o mysql como (select,insert,drop...) numa query
 function querydb(){
  $query = mysql_query($this->sql) or die ($this->erro(mysql_error()));    
     
 }
 //Descreve o erro do Mysql
 function erro($erro){
  echo $erro;       
 }
}
?>