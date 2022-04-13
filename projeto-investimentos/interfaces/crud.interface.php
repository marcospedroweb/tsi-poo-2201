<?php
interface Crud
{
  public function editar(array $dados): string;
  public function listar(): array;
  public function gravar(): string;
}
