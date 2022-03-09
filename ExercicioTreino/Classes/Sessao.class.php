<?php

class Sessao{
  private $id;
  private $id_usuario;
  private $dispositivo;
  private $localizacao;
  private $ult_atualizacao;

  public function login(){
    echo "Usuario logado";
  }
  public function destruir(){
    echo "Sessão destruida";
  }
  public function logout(){
    echo "Usuario deslogado";
  }
  public function atualizar(){
    echo "Sessão atualizada";
  }
}