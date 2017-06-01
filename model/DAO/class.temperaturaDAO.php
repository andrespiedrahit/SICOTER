 <?php

class temperaturaDAO extends dataSource implements ITemperatura {

    public function delete($id) {
        $sql = 'DELETE FROM tbltemperatura WHERE temp_id = :id';
        $params = array(
            ':id' => $id
        );
        return $this->execute($sql, $params);
    }

    public function insert(\temperatura $tempe) {
        $sql = 'INSERT INTO tbltemperatura (temp_nombre,temp_fecha,temp_valor) VALUES (:nomb,:fec,:val)';
        $params = array(
            ':nomb' => $tempe->getNombre(),
            ':val' => $tempe->getValor(),
            ':fec' => $tempe->getFecha(),
        );
        return $this->execute($sql, $params);
    }

    public function search($valor, $fecha) {
        $sql = 'SELECT temp_id FROM tbltemperatura WHERE temp_fecha = :fec AND temp_valor = :val';
        $params = array(
            ':val' => $valor,
            ':fec' => $fecha
        );
        return $this->query($sql, $params);
    }

    public function select() {
        $sql = 'SELECT temp_id,temp_nombre,temp_fecha,temp_valor FROM tbltemperatura';
        return $this->query($sql);
    }

    public function selectById($id) {
        $sql = 'SELECT temp_nombre, temp_fecha,temp_valor FROM tbltemperatura WHERE temp_id = :id';
        $params = array(
            ':id' => $id
        );
        return $this->query($sql, $params);
    }

    public function update(\temperatura $tempe) {
        $sql = 'UPDATE tbltemperatura SET temp_nombre = :nomb, temp_fecha = :fec, temp_valor=:val WHERE temp_id = :id';
        $params = array(
            ':nomb' => $tempe->getNombre(),
            ':fec' => $tempe->getFecha(),
            ':val' => $tempe->getValor(),
            ':id' => $tempe->getId()
        );
        $this->execute($sql, $params);
    }

}
