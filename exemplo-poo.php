<?php

interface User {
  // Todos os metodos que sejam obrigatorios
  public function seDeslogar();
}

class Usuario {
  protected $nome = 'Marcos';
  private $email;
  private $nasc;

  public static function seLogar(){
    echo "Logado";
    echo "<br>";
  }

  public function seDeslogar(){
    echo "Deslogado";
    echo "<br>";
  }

  public function setNome($val){
    $this->nome = $val;
  }

}

Usuario::seLogar();

class A extends Usuario {

}

$marcos = new A;
$marcos->seDeslogar();

class Aluno extends Usuario {
  public function mudaNome(){

  }
}