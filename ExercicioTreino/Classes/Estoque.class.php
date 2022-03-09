<?php

include "./Interfaces/Crud.interface.php";

class Estoque implements Crud{
  private $id;
  private $qtd;
  private $id_produto;
  private $local;
  private $limite_min;

  public function criar(){
    echo "Estoque criado";
  }
  public function editar(){
    echo "Estoque editado";
  }
  public function apagar(){
    echo "Estoque apagado";
  }
  public function listar(){
    echo "Listando todos os estoques";
  }

  public function avisoLimiteMin(){
    echo "Avisando";
  }
}