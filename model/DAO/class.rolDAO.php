<?php

class rolDAO extends dataSource implements IRol {

    public function delete($id) {
        $sql = 'DELETE FROM tblrol WHERE rol_id = :id';
        $params = array(
            ':id' => $id
        );
        return $this->execute($sql, $params);
    }

    public function insert(\roles $rol) {
        $sql = 'INSERT INTO tblrol (rol_id,rol_nombre) VALUES (:id,:nomb)';
        $params = array(
            ':id' => $rol->getId(),
            ':nomb' => $rol->getNombre()
        );
        return $this->execute($sql, $params);
    }

    public function search($nombre) {
        $sql = 'SELECT rol_id, rol_nombre FROM tblrol WHERE rol_nombre = :nomb';
        $params = array(
            ':nomb' => $nombre
        );
        return $this->query($sql, $params);
    }

    public function select() {
        $sql = 'SELECT rol_id, rol_nombre FROM tblrol';
        return $this->query($sql);
    }

    public function selectById($id) {
        $sql = 'SELECT rol_nombre FROM tblrol WHERE rol_id = :id';
        $params = array(
            ':id' => $id
        );
        return $this->query($sql, $params);
    }

    public function update(\roles $rol) {
        $sql = 'UPDATE tblrol SET rol_nombre = :nomb WHERE rol_id = :id';
        $params = array(
            ':nomb' => $rol->getNombre(),            
            ':id' => $rol->getId()
        );
        $this->execute($sql, $params);
    }

}
