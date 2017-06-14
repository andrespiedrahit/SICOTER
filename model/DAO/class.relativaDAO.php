<?php

class relativaDAO extends dataSource implements IRelativas {

    public function delete($id) {
        $sql = 'DELETE FROM tblhumedadrelativa WHERE rel_id = :id';
        $params = array(
            ':id' => $id
        );
        return $this->execute($sql, $params);
    }

    public function insert(\relativas $rel) {
        $sql = 'INSERT INTO tblhumedadrelativa (rel_nombre, rel_fecha, re_valor) VALUES (:nombre, :fecha, :valor)';
        $params = array(
            ':nombre' => $rel->getNombre(),
            ':fecha' => $rel->getFecha(),
            ':valor' => $rel->getValor(),
        );
        return $this->execute($sql, $params);
    }

    public function search($nombre, $fecha) {
        $sql = 'SELECT re_id, rel_nombre, rel_fecha, rel_valor FROM tblhumedadrelativa WHERE rel_nombre = :nombre AND rel_fecha=:fecha';
        $params = array(
            ':nombre' => $nombre,
            ':fecha' => $fecha
        );
        return $this->query($sql, $params);
    }

    public function select() {
        $sql = 'SELECT rel_id, rel_nombre, rel_fecha, rel_valor FROM tblhumedadrelativa';
        return $this->query($sql);
    }

    public function selectById($id) {
        $sql = 'SELECT rel_id, rel_nombre, rel_fecha, rel_valor FROM tblhumedadrelativa WHERE rel_id = :id';
        $params = array(
            ':id' => $id
        );
        return $this->query($sql, $params);
    }

    public function update(\relativas $rel) {
        $sql = 'UPDATE tblhumedadrelativa SET rel_nombre = :nombre, rel_fecha = :fecha, rel_valor = :valor WHERE rel_id = :id';
        $params = array(
            ':nombre' => $rel->getNombre(),
            ':fecha' => $rel->getFecha(),
            ':valor' => $rel->getValor(),
            ':id' => $rel->getId(),
        );
        return $this->execute($sql, $params);
    }

}
