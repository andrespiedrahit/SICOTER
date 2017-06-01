 <?php

class relativaDAO extends dataSource implements IRelativa {

    public function delete($id) {
        $sql = 'DELETE FROM tblhumedadrelativa WHERE rel_id = :id';
        $params = array(
            ':id' => $id
        );
        return $this->execute($sql, $params);
    }

    public function insert(\relativas $relativa) {
        $sql = 'INSERT INTO tblhumedadrelativa (rel_nombre,rel_fecha,rel_valor) VALUES (:nomb,:fec,:val)';
        $params = array(
            ':nomb' => $relativa->getNombre(),
            ':val' => $relativa->getValor(),
            ':fec' => $relativa->getFecha(),
        );
        return $this->execute($sql, $params);
    }

    public function search($valor, $fecha) {
        $sql = 'SELECT rel_id FROM tblhumedadrelativa WHERE rel_fecha = :fec AND rel_valor = :val';
        $params = array(
            ':val' => $valor,
            ':fec' => $fecha
        );
        return $this->query($sql, $params);
    }

    public function select() {
        $sql = 'SELECT rel_id,rel_nombre,rel_fecha,rel_valor FROM tblhumedadrelativa';
        return $this->query($sql);
    }

    public function selectById($id) {
        $sql = 'SELECT rel_nombre, rel_fecha,rel_valor FROM tblhumedadrelativa WHERE rel_id = :id';
        $params = array(
            ':id' => $id
        );
        return $this->query($sql, $params);
    }

    public function update(\relativas $relativa) {
        $sql = 'UPDATE tblhumedadrelativa SET rel_nombre = :nomb, rel_fecha = :fec, rel_valor=:val WHERE rel_id = :id';
        $params = array(
            ':nomb' => $relativa->getNombre(),
            ':fec' => $relativa->getFecha(),
            ':val' => $relativa->getValor(),
            ':id' => $relativa->getId()
        );
        $this->execute($sql, $params);
    }

}
