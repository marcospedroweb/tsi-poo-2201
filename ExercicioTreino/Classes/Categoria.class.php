<?php 

chdir(__DIR__); // Mostra o diretorio do arquivo em si, ou seja, está na pasta [/Classes]
require_once "../Interfaces/Crud.interface.php";

class Categoria implements Crud{
  private $id;
  private $nome;

  public function criar(){
    echo "Categoria criada";
  }
  public function editar(){
    echo "Categoria editada";
  }
  public function apagar(){
    echo "Categoria apagada";
  }
  public function listar(){
    echo "Listando todas as categorias";
  }
}