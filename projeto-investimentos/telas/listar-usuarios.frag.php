<main>
  <div class="container-xxl">
    <div class="row justify-content-center align-item-center">
      <div class="col-4">
        <h2>Lista de usuarios</h2>
        <ul>
          <?php
          if (isset($clientes)) {
            foreach ($clientes as $cliente) {
          ?>
              <li>Usuario: <?php echo $cliente['id'] ?> - nome: <?php echo $cliente['nome'] ?> - telefone: <?php echo $cliente['telefone'] ?></li>
            <?php
            }
          } else {
            ?>
            <li>Não há usuarios cadastrados</li>
          <?php
          }
          ?>
        </ul>
      </div>
    </div>
  </div>
</main>