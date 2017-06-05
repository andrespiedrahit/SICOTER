<?php

class usuarioDAO extends dataSource implements Iusuario {

    public function delete($id, $logico = true) {
        if ($logico === true) {
            $sql = 'UPDATE tblusuario SET usu_deleted_at = now() WHERE usu_id = :id';
            $params = array(
                ':id' => $id
            );
            return $this->execute($sql, $params);
        } else if ($logico === false) {
            $sql = 'DELETE FROM tblusuario WHERE usu_id = :id AND usu_deleted_at IS NULL';
            $params = array(
                ':id' => (integer) $id
            );
            return $this->execute($sql, $params);
        }
    }

    public function insert(\usuario $usuario) {
        $sql = 'INSERT INTO tblusuario (usu_alias, usu_cedula, usu_nombre, usu_apellido, usu_contrasena, rol_id, usu_correo) VALUES (:ali,:ced,:nom,:ape:con,:rolid,:cor)';
        $params = array(
            ':ali' => $usuario->getAlias(),
            ':ced' => $usuario->getCedula(),
            ':nom' => $usuario->getNombre(),
            ':ape' => $usuario->getApellido(),
            ':con' => $usuario->getContrasena(),
            ':rolid' => $usuario->getRol_id(),
            ':cor' => $usuario->getCorreo(),
            
        );
        return $this->execute($sql, $params);
    }

    public function search($alias, $contrasena) {
        $sql = 'SELECT usu_alias, usu_cedula,usu_nombre,usu_apellido, usu_contrasena,rol_id,usu_correo FROM tblusuario WHERE usu_alias = :ali AND usu_contrasena = :con';
        $params = array(
            ':ali' => $alias,
            ':con' => $contrasena
        );
        return $this->query($sql, $params);
    }

    public function select() {
        $sql = 'SELECT usu_id,usu_alias,usu_cedula,usu_nombre,usu_apellido,usu_contrasena,rol_id,usu_correo FROM tblusuario WHERE usu_deleted_at IS NULL';
        return $this->query($sql);
    }

    public function selectById($id) {
        $sql = 'SELECT usu_alias, usu_cedula, usu_nombre, usu_apellido, usu_contrasena, rol_id, usu_correo FROM tblusuario WHERE usu_id = :id';
        $params = array(
            ':id' => $id
        );
        return $this->query($sql, $params);
    }

    public function update(\usuario $usuario) {
        $sql = 'UPDATE tblusuario SET usu_alias=:ali, usu_cedula = :ced, usu_nombre=:nom,usu_apellido=:ape, usu_contrasena = :con, rol_id=:rolid,usu_correo=:cor WHERE usu_id = :id';
        $params = array(
            ':ali' => $usuario->getAlias(),
            ':ced' => $usuario->getCedula(),
            ':nom' => $usuario->getNombre(),
            ':ape' => $usuario->getApellido(),
             ':contrasena' => $usuario->getContrasena($this->getConfig()->getHash()),
            ':rolid' => $usuario->getRol_id(),
            ':cor' => $usuario->getCorreo(),
            ':id' => $usuario->getId(),
        );
        return $this->execute($sql, $params);
    }

}
