<?php

class rolDAO extends dataSource implements IRol {

    public function delete($id) {
        $sql = 'DELETE FROM tblrol WHERE id_rol = :id';
        $params = array(
            ':id' => $id
        );
        return $this->execute($sql, $params);
    }

    public function insert(\roles $rol) {
        $sql = 'INSERT INTO tblrol (id_rol,nombre) VALUES (:id,:nomb)';
        $params = array(
            ':id' => $rol->getId(),
            ':nomb' => $rol->getNombre()
        );
        return $this->execute($sql, $params);
    }

    public function search($nombre) {
        $sql = 'SELECT id_rol,nombre FROM tblrol WHERE nombre = :nomb';
        $params = array(
            ':nomb' => $nombre
        );
        return $this->query($sql, $params);
    }

    public function select() {
        $sql = 'SELECT id_rol,nombre FROM tblrol';
        return $this->query($sql);
    }

    public function selectById($id) {
        $sql = 'SELECT nombre FROM tblrol WHERE id_rol = :id';
        $params = array(
            ':id' => $id
        );
        return $this->query($sql, $params);
    }

    public function update(\roles $rol) {
        $sql = 'UPDATE tblrol SET nombre = :nomb WHERE id_rol = :id';
        $params = array(
            ':nomb' => $rol->getNombre(),            
            ':id' => $rol->getId()
        );
        $this->execute($sql, $params);
    }

}
