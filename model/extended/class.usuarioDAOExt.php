<?php

class usuarioDAOExt extends usuarioDAO {
  public function buscar( $alias, $contrasena) {
        $sql = 'SELECT usu_id,usu_alias, usu_cedula, usu_nombre, usu_apellido, usu_contrasena, rol_id,usu_correo FROM usuario WHERE usu_alias  = :ali AND usu_contrasena = :con';
        $params = array(
            ':ali' => $alias,
            ':con' => $contrasena,
        );

        return $this->query($sql, $params);
    }
}
