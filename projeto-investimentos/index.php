<?php
require_once __DIR__ . '/interfaces/crud.interface.php';
require_once __DIR__ . '/banco/conectaBanco.php';
require_once __DIR__ . '/classes/cliente.class.php';

$objUsuario = new Cliente($bd);
$clientes = $objUsuario->listar();

require_once __DIR__ . '/telas/head.frag.php';
require_once __DIR__ . '/telas/listar-usuarios.frag.php';
require_once __DIR__ . '/telas/footer.frag.php';
