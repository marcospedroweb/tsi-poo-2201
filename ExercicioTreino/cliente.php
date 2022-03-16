<?php

require_once "Classes/Cliente.class.php";
// require_once "Classes/Usuario.class.php";

class Main{

  private $cliente;

  public function __construct(){
    $this->cliente = new Cliente;
    $this->cliente->acao([]);
    $this->cliente->executaXpto();
  }
}

new Main;