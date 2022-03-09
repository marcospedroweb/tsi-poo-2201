<?php

interface User {
  // Aqui coloca-se todos os metodos que devem ser obrigatorios que estejam nas classes
  public function seLogar();
  public function apagar();
}

class Usuario implements User{
  //A classe [Usuario] devera seguir os metodos obrigatorios de [User]
  protected $nome = 'Marcos';
  private $email;
  private $nasc;

  public function seLogar(){
    echo "Logado";
  }

  public function apagar(){

  }

  public function seDeslogar(){
    echo "Tchau";
  }
  public function setNome($val){
    $this->nome = $val;
  }
  public function getNome(){
    return $this->nome;
  }

}

class Professor extends Usuario {  
  // A classe [Professor] recebe como herança os metodos e atributos de [Usuario]
  public function mudaNome(){
    $this->nome = 'Milan';
  }
}

class Turma{
  // Relação de dependencia
  private $professor;

  public function setProfessor(Professor $prof){
    $this->professor = $prof;
  }
}

// Usuario::seLogar();

$luiz = new Professor; // Instancia um objeto Professor
$luiz->mudaNome(); // Executa o metodo que o obj Professor tem
echo $luiz->getNome(); // Imprime na tela
$turma = new Turma; // Instancia um objeto Turma
$turma->setProfessor($luiz); // Executa o metodo que o obj Turma tem
// [->setProfessor(Objeto)] espera o um objeto do tipo professor 
// [$luiz] é um objeto do tipo Professor


