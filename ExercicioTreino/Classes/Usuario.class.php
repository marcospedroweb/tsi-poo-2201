<?php

include "./Interfaces/Crud.interface.php";

class Usuario implements Crud{
  private $id;
  private $nome;
  private $email;
  private $senha;
  
  public function criar(){
    echo "Usuario criado";
  }
  public function editar(){
    echo "Usuario editado";
  }
  public function apagar(){
    echo "Usuario apagado";
  }
  public function listar(){
    echo "Listando todos os usuarios";
  }

  public function getUsuario(){
    echo "Mostrando o usuario"
  }
}