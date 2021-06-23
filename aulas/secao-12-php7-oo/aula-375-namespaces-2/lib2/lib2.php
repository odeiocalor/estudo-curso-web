<?php

  namespace B;

  interface CadastroInterface {
    public function remover();
  }
  
  class Cliente implements CadastroInterface {
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
  }

?>