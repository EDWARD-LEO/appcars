<?php

require_once './Conexion.php';

class Car extends Conexion{
  
  //Objeto conexión
  private $conexion;

  //Constantes
  const SQL_SELECT = "SELECT * FROM cars ORDER BY idcar DESC";
  const SQL_INSERT = "INSERT INTO cars (marca, modelo, color, afab, combustible, placa, fotografia) VALUES (?,?,?,?,?,?,?)";

  public function __CONSTRUCT(){
    $this->conexion = parent::getConexion();
  }

  //Métodos CRUD
  public function listar(){
    try{
      $comando = $this->conexion->prepare(SQL_SELECT);
      $comando->execute();
      return $comando->fetchAll(PDO::FETCH_ASSOC);
    }
    catch(Exception $e){
      die($e->getMessage());
    }
  }

  public function registrar($datos = []){
    try{
      $comando = $this->conexion->prepare(SQL_INSERT);
      $comando->execute(
        array(
          $datos['marca'],
          $datos['modelo'],
          $datos['color'],
          $datos['afab'],
          $datos['combustible'],
          $datos['placa'],
          $datos['fotografia']
        )
      );
    }
    catch(Exception $e){
      die($e->getMessage());
    }
  }

  public function actualizar(){
    try{

    }
    catch(Exception $e){
      die($e->getMessage());
    }
  }

  public function eliminar(){
    try{

    }
    catch(Exception $e){
      die($e->getMessage());
    }
  }

  public function obtener(){
    try{

    }
    catch(Exception $e){
      die($e->getMessage());
    }
  }
}