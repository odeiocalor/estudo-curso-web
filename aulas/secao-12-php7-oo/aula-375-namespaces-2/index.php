<?php

  require "lib1/lib1.php";
  require "lib2/lib2.php";

  use A\Cliente as C1;
  use B\Cliente as C2;

  $c1 = new C1();
  print_r($c1);
  echo $c1->__get('nome');

  $c2 = new C2();
  print_r($c2);
  echo $c2->__get('nome');

?>