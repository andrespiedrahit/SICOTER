<?php

class usuarioDAO extends dataSource implements Iusuario {

    public function delete($id) {
        $sql = 'DELETE FROM tblrol WHERE id_usuario = :id';
        $params = array(
            ':id' => $id
        );
        return $this->execute($sql, $params);
    }

    public function insert(\usuario $usuario) {
        $sql = 'INSERT INTO tblusuario (id_usuario,id_rol,nombres,apellidos,correo,contrasena) VALUES (:id,:idrol,:nomb,:apell,:corr,:contra)';
        $params = array(
//            ,:,:,:contra
            ':id' => $usuario->getId(),
            ':idrol' => $usuario->getId_rol(),
            ':nomb' => $usuario->getNombre(),
            ':apell' => $usuario->getApellido(),
            ':corr' => $usuario->getCorreo(),
            ':contra' => $usuario->getContrasena()
        );
        return $this->execute($sql, $params);
    }

    public function search($nombre) {
        $sql = 'SELECT id_usuario,id_rol,nombres,apellidos,correo,contrasena FROM tblusuario WHERE nombres = :nomb';
        $params = array(
            ':nomb' => $nombre
        );
        return $this->query($sql, $params);
    }

    public function select() {
        $sql = 'SELECT id_usuario,id_rol,nombres,apellidos,correo,contrasena FROM tblusuario WHERE nombres = :nomb';
        return $this->query($sql);
    }

    public function selectById($id) {
        $sql = 'SELECT nombres FROM tblusuario WHERE id_usuario = :id';
        $params = array(
            ':id' => $id
        );
        return $this->query($sql, $params);
    }

    public function update(\usuario $usuario) {
        $sql = 'UPDATE tblusuario SET nombres = :nomb WHERE id_usuario = :id';
        $params = array(
            ':nomb' => $usuario->getNombre(),
            ':id' => $usuario->getId()
        );
        $this->execute($sql, $params);
    }

}
