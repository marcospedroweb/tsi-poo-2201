<?php
class Investimentos implements Crud
{
  var $bd;

  function __construct($bd)
  {
    $this->bd = $bd;
  }

  public function criar(array $dados): array
  {
    return array(true, 'Investimento registrado com sucesso');
  }


  public function editar(array $dados): array
  {

    return array(true, "Classe editada com sucesso");
  }

  public function listar(): array
  {
    return array();
  }

  public function gravar(): string
  {
    return 'Dados gravados no banco com sucesso';
  }
}
