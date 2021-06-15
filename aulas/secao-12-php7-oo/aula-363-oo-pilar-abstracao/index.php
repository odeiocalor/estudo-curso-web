<?php
  // modelo
  class Funcionario {
    // atributos
    public $nome = 'José';
    public $telefone = '11 9999-9999';
    public $numFilhos = 2;

    // metodos
    function resumirCadFunc() {
      return "$this->nome possui $this->numFilhos filho(s)";
    }

    function modificarNumFilhos($numFilhos) {
      $this->numFilhos = $numFilhos;
    }

  }

  $y = new Funcionario();
  echo $y->resumirCadFunc();
  echo '<br>';
  $y->modificarNumFilhos(3);
  echo $y->resumirCadFunc();

  echo '<hr>';

  $x = new Funcionario();
  echo $x->resumirCadFunc();
  echo '<br>';
  $x->modificarNumFilhos(10);
  echo $x->resumirCadFunc();
?>