<?php
class Cliente implements Crud
{
  var $bd;

  function __construct($bd)
  {
    $this->bd = $bd;
  }

  public function criar(array $dados): array
  {
    $nome = $dados['name'] ?? '';
    $telefone = $dados['tel'] ?? '';
    if (!$nome)
      return array(false, 'Insira um nome valido');

    $sql = "INSERT INTO cliente (nome, telefone)
            VALUES (:nome, :telefone)";

    $insert = $this->bd->prepare($sql);
    $sucesso = $insert->execute(array(
      ':nome' => $nome,
      ':telefone' => $telefone,
    ));

    if ($sucesso)
      return array(true, 'Cliente registrado com sucesso');
    else
      return array(false, 'Erro no insert');
  }

  public function editar(array $dados): array
  {

    return array(true, 'Usuario editado com sucesso');
  }

  public function listar(): array
  {
    $select = $this->bd->prepare("SELECT id, nome, telefone FROM cliente");
    $sucesso = $select->execute();
    if (!$sucesso)
      return array(false, 'Erro no select');

    return $select->fetchAll();
  }

  public function investir(int $investimento_id): array
  {
    return array(true, 'Investimento realizado com sucesso');
  }

  public function cancelarInvestimento(int $investimento_id): array
  {
    return array(true, 'Investimento cancelado com sucesso');
  }
}
