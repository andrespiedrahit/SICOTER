<?php

interface IRelativas {

  public function select();

  public function selectById($id);

  public function insert(variables $variables);

  public function update(variables $variables);

  public function delete($id);
  
  public function search($nombre, $fecha);
}
