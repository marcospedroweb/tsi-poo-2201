<?php 

chdir(__DIR__); // Mostra o diretorio do arquivo em si, ou seja, está na pasta [/Classes]
require_once "./Usuario.class.php";
require_once "../Interfaces/iUsuario.interface.php";

class Cliente extends Usuario implements iUsuario{
  public function acao(array $idProdutos):bool{
    echo "Executou ação do cliente";
    return true;
  }
}