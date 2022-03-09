<?php 

chdir(__DIR__); // Mostra o diretorio do arquivo em si, ou seja, está na pasta [/Classes]
require_once "../Interfaces/Crud.interface.php";

class Produto implements Crud { 
  private $id;
  private $nome;
  private $descricao;
  private $preco;
  private $id_categoria;

  public function criar(){
    echo "Produto criado";
  }
  public function editar(){
    echo "Produto editado";
  }
  public function apagar(){
    echo "Produto apagado";
  }
  public function listar(){
    echo "Listando todos os produtos";
  }
}