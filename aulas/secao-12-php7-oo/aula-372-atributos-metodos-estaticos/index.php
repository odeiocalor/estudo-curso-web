<?php
  class Exemplo {
    // Não acessível através do operador "->"
    public static $atributo1 = 'Eu sou um atributo estático';
    public $atributo2 = 'Eu sou um atributo normal';

    // Não pode utilizar "$this"
    public static function metodo1() {
      echo 'Eu sou um método estático';
    }

    public function metodo2() {
      echo 'Eu sou um método normal';
    }
  }

  //$x = new Exemplo();

  // Não necessário uma instância da classe parar acessar atributos ou métodos estáticos
  echo Exemplo::$atributo1;
  echo '<br>';
  Exemplo::metodo1();

  // Esse modo pode acessar métodos não estáticos, porém não é recomendado
  Exemplo::metodo2();
?>