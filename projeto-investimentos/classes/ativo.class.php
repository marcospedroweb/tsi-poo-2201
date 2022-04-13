<?php
class Ativo implements Crud
{
  protected int $id;
  protected string $nome;

  function __construct(int $id, string $nome,)
  {
    $this->id = $id;
    $this->nome = $nome;
  }

  public function editar(array $dados): string
  {

    $this->id = $dados['id'];
    $this->nome = $dados['nome'];

    return "Classe editada com sucesso";
  }

  public function listar(): array
  {
    return array(
      'id' => $this->id,
      'nome' => $this->nome,
    );
  }

  public function gravar(): string
  {
    return 'Dados gravados no banco com sucesso';
  }
}
