<?php
require_once __DIR__ . '../ativo.class.php';
class Investimentos extends Ativo implements Crud
{
  protected int $id;
  private string $codigo;
  protected int $ativo_id;

  function __construct(int $id, string $codigo, int $ativo_id)
  {
    $this->id = $id;
    $this->codigo = $codigo;
  }

  public function editar(array $dados): string
  {

    $this->id = $dados['id'];
    $this->codigo = $dados['codigo'];
    $this->ativo_id = $dados['ativo_id'];
    $this->cliente_id = $dados['cliente_id'];

    return "Classe editada com sucesso";
  }

  public function listar(): array
  {
    return array(
      'id' => $this->id,
      'codigo' => $this->codigo,
      'ativo_id' => $this->ativo_id,
      'cliente_id' => $this->cliente_id
    );
  }

  public function gravar(): string
  {
    return 'Dados gravados no banco com sucesso';
  }

  public function adicionarAtivo(int $ativo_id): string
  {
    $this->ativo_id = $ativo_id;
    return 'Ativo adicionado com sucesso';
  }
}
