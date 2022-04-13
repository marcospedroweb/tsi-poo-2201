<?php
require_once __DIR__ . '/interfaces/crud.interface.php';
require_once __DIR__ . './classes/ativo.class.php';
require_once __DIR__ . './classes/cliente.class.php';
require_once __DIR__ . './classes/investimentos.class.php';

$ativo = new Ativo(1, 'petrobras');
$investimento = new Investimentos(1, '0123', 1);

$cliente1 = new Cliente(1, 'fulano', '111111111');
$cliente1->investir(1);
$dadosCliente1 = $cliente1->listar();

echo 'Id: ' . $dadosCliente1['id'] . ' - Nome: ' . $dadosCliente1['nome'] . ' - Telefone: ' . $dadosCliente1['telefone'];
echo '<br><br> Investimentos: ';
foreach ($dadosCliente1['investimentos'] as $investimento_id)
  echo "<br> Investimento id: $investimento_id";
