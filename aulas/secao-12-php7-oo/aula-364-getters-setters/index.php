<?php
  // modelo
  class Funcionario {
    // atributos
    public $nome = null;
    public $telefone = null;
    public $numFilhos = null;

    // getters e setters
    function setNome($nome) {
      $this->nome = $nome;
    }

    function setNumFilhos($numFilhos) {
      $this->numFilhos = $numFilhos;
    }

    function setTelefone($telefone) {
      $this->telefone = $telefone;
    }

    function getNome() {
      return $this->nome;
    }

    function getNumFilhos() {
      return $this->numFilhos;
    }

    function getTelefone() {
      return $this->telefone;
    }

    // metodos
    function resumirCadFunc() {
      return "$this->nome possui $this->numFilhos filho(s)";
    }

    function modificarNumFilhos($numFilhos) {
      $this->numFilhos = $numFilhos;
    }

  }

  $y = new Funcionario();
  $y->setNome('José');
  $y->setNumFilhos(2);
  echo $y->resumirCadFunc();
  echo '<br>';
  echo $y->getNome() . ' possui ' . $y->getNumFilhos() . ' filho(s)';

  echo '<hr>';

  $x = new Funcionario();
  $x->setNome('Maria');
  $x->setNumFilhos(3);
  echo $x->resumirCadFunc();
  echo '<br>';
  echo $x->getNome() . ' possui ' . $x->getNumFilhos() . ' filho(s)';
?>