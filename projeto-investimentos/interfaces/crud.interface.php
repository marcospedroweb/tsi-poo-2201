<?php
interface Crud
{
  public function criar(array $dados): array;
  public function editar(array $dados): array;
  public function listar(): array;
}
