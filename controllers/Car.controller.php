<?php

require_once '../models/Car.php';

if (isset($_POST['operacion'])){

  $car = new Car();

  if ($_POST['operacion'] == 'listar'){
    echo json_encode($car->listar());
  }

  if ($_POST['operacion'] == 'registrar'){
    $datosGuardar = [
      "marca"       => $_POST['marca'],
      "modelo"      => $_POST['modelo'],
      "color"       => $_POST['color'],
      "afab"        => $_POST['afab'],
      "combustible" => $_POST['combustible'],
      "placa"       => $_POST['placa'],
      "fotografia"  => $_POST['fotografia']
    ];
    $car->registrar($datosGuardar);
  }

}

?>