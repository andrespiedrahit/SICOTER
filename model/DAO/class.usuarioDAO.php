<?php

class usuarioDAO extends dataSource implements Iusuario {

    public function delete($id) {
        $sql = 'DELETE FROM tblusuario WHERE usu_id = :id';
        $params = array(
            ':id' => $id
        );
        return $this->execute($sql, $params);
    }

    public function insert(\usuario $usuario) {
        $sql = 'INSERT INTO tblusuario (usu_alias,usu_cedula,usu_nombre,usu_apellido,usu_contrasena,rol_id,usu_correo) VALUES (:ali,:ced,:nom,:ape,:cont,:rol,:corr)';
        $params = array(
//            ,:,:,:contra            
            ':ali' => $usuario->getAlias(),
            ':ced' => $usuario->getCedula(),
            ':nom' => $usuario->getNombre(),
            ':ape' => $usuario->getApellido(),
            ':rol' => $usuario->getRol_id(),
            ':cont' => $usuario->getContrasena(),
            ':corr' => $usuario->getCorreo(),
        );
        return $this->execute($sql, $params);
    }

    public function search($alias, $contrasena) {
        $sql = 'SELECT usu_id,usu_alias,usu_cedula,usu_nombre,usu_apellido,usu_contrasena, rol_id,usu_correo FROM tblusuario WHERE usu_alias = :alias AND usu_contrasena = :contrasena';
        $params = array(
            ':alias' => $alias,
            ':contrasena' => $contrasena
        );
        return $this->query($sql, $params);
    }

    public function select() {
        $sql = 'SELECT usu_id,usu_alias,usu_cedula,usu_nombre,usu_apellido,usu_contrasena,usu_created_at,usu_updated_at,usu_delete_at,rol_id,usu_correo FROM tblusuario WHERE usu_nombre = :nomb';
        return $this->query($sql);
    }

    public function selectById($id) {
        $sql = 'SELECT usu_nombre FROM tblusuario WHERE usu_id = :id';
        $params = array(
            ':id' => $id
        );
        return $this->query($sql, $params);
    }

    public function update(\usuario $usuario) {
        $sql = 'UPDATE tblusuario SET usu_nombre = :nomb WHERE usu_id = :id';
        $params = array(
            ':nomb' => $usuario->getNombre(),
            ':id' => $usuario->getId()
        );
        $this->execute($sql, $params);
    }

}
