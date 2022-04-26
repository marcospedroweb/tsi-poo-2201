<?php
class Ativo implements Crud
{
  var $bd;

  function __construct($bd)
  {
    $this->bd = $bd;
  }

  public function criar(array $dados): array
  {
    return array(true, 'Ativo criado com sucesso');
  }

  public function editar(array $dados): array
  {
    return array(true, "Ativo editada com sucesso");
  }

  public function listar(): array
  {
    return array();
  }
}
