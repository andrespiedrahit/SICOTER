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
        $sql = 'INSERT INTO tblusuario (usu_id,usu_alias,usu_cedula,usu_nombre,usu_apellido,usu_contrasena,usu_created_at,usu_updated_at,usu_deleted_at,rol_id,usu_correo) VALUES (:id,:ali,:ced,:nom,:ape,:cont,:crea,:upd,:del,:rol,:corr)';
        $params = array(
//            ,:,:,:contra
            ':id' => $usuario->getId(),
            ':ali' => $usuario->getAlias(),
            ':ced' => $usuario->getCedula(),
            ':nom' => $usuario->getNombre(),
            ':ape' => $usuario->getApellido(),
            ':cont' => $usuario->getContrasena(),
            ':crea' => $usuario->getCreated_at(),
            ':upd' => $usuario->getUpdated_at(),
            ':del' => $usuario->getDeleted_at(),
            ':rol' => $usuario->getRol_id(),
            ':corr' => $usuario->getCorreo(),
        );
        return $this->execute($sql, $params);
    }

    public function search($nombre) {
        $sql = 'SELECT usu_id,usu_alias,usu_cedula,usu_nombre,usu_apellido,usu_contrasena,usu_created_at,usu_updated_at,usu_deleted_at,rol_id,usu_correo FROM tblusuario WHERE usu_nombre = :nomb';
        $params = array(
            ':nomb' => $nombre
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
