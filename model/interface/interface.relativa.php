<?php

interface IRelativas {

  public function select();

  public function selectById($id);

  public function insert(relativas $rel);

  public function update(relativas $rel);

  public function delete($id);
  
  public function search($nombre, $fecha);
}
