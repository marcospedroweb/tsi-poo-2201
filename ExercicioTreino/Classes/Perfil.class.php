<?php 

include "./Interfaces/Crud.interface.php";

class Perfil implements Crud{
  private $id;
  private $nome;
  private $descricao;
  protected $id_perfil;

  public function criar(){
    echo "Perfil criado";
  }
  public function editar(){
    echo "Perfil editado";
  }
  public function apagar(){
    echo "Perfil apagado";
  }
  public function listar(){
    echo "Listando todos os perfils";
  }
}