<?php

chdir(__DIR__); // Mostra o diretorio do arquivo em si, ou seja, está na pasta [/Classes]
require_once "../Interfaces/Crud.interface.php";
require_once "../Interfaces/iUsuario.interface.php";

class Usuario implements Crud, iUsuario{
  private $id;
  private $nome;
  private $email;
  private $senha;
  
  public function criar(array $dados):bool{
    echo "\nUsuario ($id) criado\n";
    return true;
  }
  public function apagar(int $id):bool{
    echo "\nUsuario ($id) apagado\n";
    return true;
  }
  public function editar(int $id, array $dados):bool{
    echo "\nUsuario ($id) editado\n";
    return true;
  }
  public function listar(int $id = null):array{
    echo "\nListando Usuario ($id)\n";
    return [];
  }

  public function acao(array $idProdutos):bool{
    echo "Ação generica para usuario";
    return true;
  }
}