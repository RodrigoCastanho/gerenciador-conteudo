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
 * Description of class_criaconta
 *
 * @author rodrigo
 */
class class_criaconta {
    
    private $nome;
    private $sobreNome;
    private $email;
    private $criarlogin;
    private $senha;
 
 public function _construct(){
   //Função construtora 
  // Gerar logs.    
 }
 public function setnome($nome){
    $this->nome = nome;      
 }
 public function getnome(){
    return $this->nome; 
 }
 public function setsobreNome($sobreNome){
    $this->sobreNome = sobreNome;  
 }
 public function getsobreNome(){
    return $this->sobreNome; 
 }
 public function setemail($email){
    $this->email = email;      
 }
 public function getemail(){
   return $this->email;  
 }
 public function setcriarlogin($criarlogin){
    $this->criarlogin = $criarlogin; 
 }
 public function getcriarlogin(){
   return  $this->criarlogin;  
 }
 public function setsenha($senha){
    $this->senha = $senha; 
 }
 public function getsenha(){
    return $this->senha; 
 }
}

?>
