<?php
  // modelo
  class Funcionario {
    // atributos
    public $nome = null;
    public $telefone = null;
    public $numFilhos = null;
    public $cargo = null;
    public $salario = null;

    // getters e setters (overloading)
    function __set($atributo, $valor) {
      $this->$atributo = $valor;
    }

    function __get($atributo) {
      return $this->$atributo;
    }

    // metodos
    function resumirCadFunc() {
      return $this->__get('nome') . ' | ' . $this->__get('cargo') . ' | R$ ' . $this->__get('salario') . ' | ' . $this->__get('telefone') . ' | ' .  $this->__get('numFilhos') . ' filho(s)';
    }

    function modificarNumFilhos($numFilhos) {
      $this->numFilhos = $numFilhos;
    }

  }

  $y = new Funcionario();
  $y->__set('nome', 'José');
  $y->__set('numFilhos', 2);
  $y->__set('telefone', '11 9999-9999');
  $y->__set('cargo', 'Analista');
  $y->__set('salario', '1500,00');
  echo $y->resumirCadFunc();

  echo '<hr>';

  $x = new Funcionario();
  $x->__set('nome', 'Maria');
  $x->__set('numFilhos', 0);
  $x->__set('telefone', '11 8888-8888');
  $x->__set('cargo', 'Analista');
  $x->__set('salario', 'R$ 1600,00');
  echo $x->resumirCadFunc();
?>