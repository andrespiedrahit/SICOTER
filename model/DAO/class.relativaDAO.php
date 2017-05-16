 <?php

class relativaDAO extends dataSource implements IRelativa {

    public function delete($id) {
        $sql = 'DELETE FROM tblhumedadrelativa WHERE id_humedadrelativa = :id';
        $params = array(
            ':id' => $id
        );
        return $this->execute($sql, $params);
    }

    public function insert(\variables $variable) {
        $sql = 'INSERT INTO tblhumedadrelativa (fecha_relativa, nombre,valor_relativa) VALUES (:fec, :nomb,:val)';
        $params = array(
            ':nomb' => $variable->getNombre(),
            ':fec' => $variable->getFecha(),
            ':val' => $variable->getValor()
        );
        return $this->execute($sql, $params);
    }

    public function search($valor, $fecha) {
        $sql = 'SELECT id_humedadrelativa FROM tblhumedadrelativa WHERE fecha_relativa = :fec AND valor_relativa = :val';
        $params = array(
            ':val' => $valor,
            ':fec' => $fecha
        );
        return $this->query($sql, $params);
    }

    public function select() {
        $sql = 'SELECT id_humedadrelativa,valor_relativa,fecha_relativa FROM tblhumedadrelativa';
        return $this->query($sql);
    }

    public function selectById($id) {
        $sql = 'SELECT nombre, fecha_relativa,valor_relativa FROM tblhumedadrelativa WHERE id_humedadrelativa = :id';
        $params = array(
            ':id' => $id
        );
        return $this->query($sql, $params);
    }

    public function update(\relativas $relativa) {
        $sql = 'UPDATE tblhumedadrelativa SET nombre = :nomb, fecha_relativa = :fec,valor_Relativa=:val WHERE id_humedadrelativa = :id';
        $params = array(
            ':nomb' => $relativa->getNombre(),
            ':fec' => $relativa->getFecha(),
            ':val' => $relativa->getValor(),
            ':id' => $relativa->getId()
        );
        $this->execute($sql, $params);
    }

}
