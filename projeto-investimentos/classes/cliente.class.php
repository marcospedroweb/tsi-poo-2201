<?php
require_once __DIR__ . '../investimentos.class.php';
class Cliente extends Investimentos implements Crud
{
  protected int $id;
  protected string $nome;
  protected string $telefone;
  public array $investimentos;

  function __construct(int $id, string $nome, string $telefone)
  {
    $this->id = $id;
    $this->nome = $nome;
    $this->telefone = $telefone;
    $this->investimentos = array();
  }

  public function editar(array $dados): string
  {

    $this->id = $dados['id'];
    $this->nome = $dados['nome'];
    $this->telefone = $dados['telefone'];

    return "Classe editada com sucesso";
  }

  public function listar(): array
  {
    return array(
      'id' => $this->id,
      'nome' => $this->nome,
      'telefone' => $this->telefone,
      'investimentos' => $this->investimentos
    );
  }

  public function gravar(): string
  {
    return 'Dados gravados no banco com sucesso';
  }

  public function investir(int $investimento_id): string
  {
    array_push($this->investimentos, $investimento_id);
    return 'Investimento realizado com sucesso';
  }

  public function cancelarInvestimento(int $investimento_id): string
  {
    unset($this->investimentos[$investimento_id]);
    return 'Investimento cancelado com sucesso';
  }
}
