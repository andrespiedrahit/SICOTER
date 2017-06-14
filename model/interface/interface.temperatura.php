<?php

interface ITemperatura {

  public function select();

  public function selectById($id);

  public function insert(temperatura $tem);

  public function update(temperatura $tem);

  public function delete($id);
  
  public function search($nombre, $fecha);
}
