<?php
require_once __DIR__ . '/interfaces/crud.interface.php';
require_once __DIR__ . '/banco/conectaBanco.php';
require_once __DIR__ . '/classes/cliente.class.php';

$classUsuario = new Cliente($bd);

if (isset($_POST['name'])) {
  $sucesso = $classUsuario->criar($_POST);
  if (!$sucesso[0])
    echo $sucesso[1];
  else
    header("Location: ./index.php");
}

require_once __DIR__ . '/telas/head.frag.php';
require_once __DIR__ . '/telas/criar-usuario.frag.php';
require_once __DIR__ . '/telas/footer.frag.php';
