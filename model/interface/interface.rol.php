<?php

interface  IRol {

  public function select();

  public function selectById($id);

  public function insert(rol $roles);

  public function update(rol $roles);

  public function delete($id);
  
  public function search($nombre);
}
