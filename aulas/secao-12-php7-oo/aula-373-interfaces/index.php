<?php
  interface EquipamentoEletronicoInterface {
    public function ligar();
    public function desligar();
  }

  class Geladeira implements EquipamentoEletronicoInterface {
    public function ligar() {
      echo 'Ligar';
    }

    public function desligar() {
      echo 'Desligar';
    }

    public function abrirPorta() {
      echo 'Abrir porta';
    }
  }

  class TV implements EquipamentoEletronicoInterface {
    public function ligar() {
      echo 'Ligar';
    }

    public function desligar() {
      echo 'Desligar';
    }

    public function trocarCanal() {
      echo 'Trocar canal';
    }
  }

  $geladeira = new Geladeira();
  $tv = new TV();

  // ---------------------------------------------------

  interface MamiferoInterface {
    public function respirar();
  }

  interface TerrestreInterface {
    public function andar();
  }

  interface AquaticoInterface {
    public function nadar();
  }

  class Humano implements MamiferoInterface, TerrestreInterface {
    public function respirar() {
      echo 'respirar';
    }

    public function andar() {
      echo 'andar';
    }

    public function conversar() {
      echo 'conversar';
    }
  }

  class Baleia implements MamiferoInterface, AquaticoInterface {
    public function respirar() {
      echo 'respirar';
    }

    public function nadar() {
      echo 'nadar';
    }

    protected function esguichar() {
      echo 'esguichar';
    }
  }

  // ---------------------------------------------------

  interface AnimalInterface {
    public function comer();
  }

  interface AveInterface extends AnimalInterface {
    public function voar();
  }

  class Papagaio implements AveInterface {
    public function voar() {
      echo 'voar';
    }
    
    public function comer() {
      echo 'comer';
    }
  }
?>