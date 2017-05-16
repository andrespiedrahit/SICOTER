<?php

class variableDAO extends dataSource implements IVariables {

    public function delete($id) {
        $sql = 'DELETE FROM tblvariable WHERE id_variable = :id';
        $params = array(
            ':id' => $id
        );
        return $this->execute($sql, $params);
    }

    public function insert(\variables $variable) {
        $sql = 'INSERT INTO tblvariable (nombre, fecha,valor) VALUES (:nomb, :fec,:val)';
        $params = array(
            ':nomb' => $variable->getNombre(),
            ':fec' => $variable->getFecha(),
            ':val' => $variable->getValor()
        );
        return $this->execute($sql, $params);
    }

    public function search($nombre, $fecha) {
        $sql = 'SELECT id_variable FROM tblvariables WHERE nombre = :nomb AND fecha = :fec';
        $params = array(
            ':nomb' => $nombre,
            ':fec' => $fecha
        );
        return $this->query($sql, $params);
    }

    public function select() {
        $sql = 'SELECT id_temperatura,valor_temperatura,fecha_temperatura FROM tbltemperatura';
        return $this->query($sql);
    }

    public function selectById($id) {
        $sql = 'SELECT nombre, fecha,valor FROM tblvariables WHERE id_variable = :id';
        $params = array(
            ':id' => $id
        );
        return $this->query($sql, $params);
    }

    public function update(\variables $variable) {
        $sql = 'UPDATE tblvariables SET nombre = :nomb, fecha = :fec,valor=:val WHERE id_variable = :id';
        $params = array(
            ':nomb' => $variable->getNombre(),
            ':fec' => $variable->getFecha(),
            ':val' => $variable->getValor(),
            ':id' => $variable->getId()
        );
        $this->execute($sql, $params);
    }

}
