<?php
  class Veiculo {
    public $placa = null;
    public $cor = null;

    function acelerar() {
      echo 'Acelerar';
    }

    function freiar() {
      echo 'Freiar';
    }

    function trocarMarcha() {
      echo 'Desengatar embreagem com o pé e engatar marcha com a mão';
    }
  }

  class Carro extends Veiculo {
    public $teto_solar = true;

    function __construct($placa, $cor) {
      $this->$placa = $placa;
      $this->$cor = $cor;
    }

    function abrirTetoSolar() {
      echo 'Abrir teto solar';
    }

    function alterarPosicaoVolante() {
      echo 'Alterar posição do volante';
    }
  }

  class Moto extends Veiculo {
    public $contraPesoGuidao = true;

    function __construct($placa, $cor) {
      $this->$placa = $placa;
      $this->$cor = $cor;
    }

    function empinar() {
      echo 'Empinar';
    }

    function trocarMarcha() {
      echo 'Desengatar embreagem com a mão e engatar marcha com o pé';
    }
  }

  class Caminhao extends Veiculo {

  }

  $carro = new Carro('ABC1234', 'Branco');

  $moto = new Moto('DEF5678', 'Preto');
  
  $caminhao = new Caminhao('GHI9101', 'Vermelho');

  $carro->trocarMarcha();

  echo '<hr>';

  $moto->trocarMarcha();

  echo '<hr>';

  $caminhao->trocarMarcha();
?>