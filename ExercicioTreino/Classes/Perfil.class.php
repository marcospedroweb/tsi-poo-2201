<?php 
chdir(__DIR__); // Mostra o diretorio do arquivo em si, ou seja, está na pasta [/Classes]
require_once "../Interfaces/Crud.interface.php";

class Perfil implements Crud{
  private $id;
  private $nome;
  private $descricao;
  protected $permissoes;

  public function criar(array $dados):bool{
    echo "\nPerfil ($id) criado\n";
    return true;
  }
  public function apagar(int $id):bool{
    echo "\nPerfil ($id) apagado\n";
    return true;
  }
  public function editar(int $id, array $dados):bool{
    echo "\nPerfil ($id) editado\n";
    return true;
  }
  public function listar(int $id = null):array{
    echo "\nListando perfil ($id)\n";
    return [];
  }
}