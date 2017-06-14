<?php

interface ISuelo {

  public function select();

  public function selectById($id);

  public function insert(suelo $suelo);

  public function update(suelo $suelo);

  public function delete($id);
  
  public function search($nombre, $fecha);
}
