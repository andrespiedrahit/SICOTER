 <?php

class sueloDAO extends dataSource implements ISuelo {

    public function delete($id) {
        $sql = 'DELETE FROM tblhumedadsuelo WHERE su_id = :id';
        $params = array(
            ':id' => $id
        );
        return $this->execute($sql, $params);
    }

    public function insert(\suelo $suelo) {
        $sql = 'INSERT INTO tblhumedadsuelo (su_nombre,su_fecha,su_valor) VALUES (:nomb,:fec,:val)';
        $params = array(
            ':nomb' => $suelo->getNombre(),
            ':val' => $suelo->getValor(),
            ':fec' => $suelo->getFecha(),
        );
        return $this->execute($sql, $params);
    }

    public function search($valor, $fecha) {
        $sql = 'SELECT su_id FROM tblhumedadsuelo WHERE su_fecha = :fec AND su_valor = :val';
        $params = array(
            ':val' => $valor,
            ':fec' => $fecha
        );
        return $this->query($sql, $params);
    }

    public function select() {
        $sql = 'SELECT su_id,su_nombre,su_fecha,su_valor FROM tblhumedadsuelo';
        return $this->query($sql);
    }

    public function selectById($id) {
        $sql = 'SELECT su_nombre, su_fecha,su_valor FROM tblhumedadsuelo WHERE su_id = :id';
        $params = array(
            ':id' => $id
        );
        return $this->query($sql, $params);
    }

    public function update(\suelo $suelo) {
        $sql = 'UPDATE tblhumedadsuelo SET su_nombre = :nomb, su_fecha = :fec, su_valor=:val WHERE su_id = :id';
        $params = array(
            ':nomb' => $suelo->getNombre(),
            ':fec' => $suelo->getFecha(),
            ':val' => $suelo->getValor(),
            ':id' => $suelo->getId()
        );
        $this->execute($sql, $params);
    }

}
