<?php

  namespace A;
  
  class Cliente implements \B\CadastroInterface {
    public $nome = 'Carlos';

    public function __construct() {    
      echo '<pre>';
      print_r(get_class_methods($this));
      echo '</pre>';
    }
    
    public function __get($attr) {
      return $this->$attr;
    }

    public function salvar() {
      echo 'salvar';
    }

    public function remover() {
      echo 'remover';
    }
  }

  interface CadastroInterface {
    public function salvar();
  }

  $e = new Cliente();
  echo '<pre>';
  print_r($e);
  echo '</pre>';
  echo $e->__get('nome');

  namespace B;
  
  class Cliente implements \A\CadastroInterface {
    public $nome = 'José';

    public function __construct() {    
      echo '<pre>';
      print_r(get_class_methods($this));
      echo '</pre>';
    }
    
    public function __get($attr) {
      return $this->$attr;
    }

    public function remover() {
      echo 'remover';
    }

    public function salvar() {
      echo 'salvar';
    }
  }

  interface CadastroInterface {
    public function remover();
  }

  $c = new Cliente();
  echo '<pre>';
  print_r($c);
  echo '</pre>';
  echo $c->__get('nome');

  $d = new \A\Cliente();
  echo '<pre>';
  print_r($d);
  echo '</pre>';
  echo $d->__get('nome');
?>