<?php

class usuario {

    private $id;
    private $id_rol;
    private $nombre;
    private $apellido;
    private $correo;
    private $contrasena;
    
    
    public function getId() {
        return $this->id;
    }

    public function getId_rol() {
        return $this->id_rol;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getApellido() {
        return $this->apellido;
    }

    public function getCorreo() {
        return $this->correo;
    }

    public function getContrasena() {
        return $this->contrasena;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setId_rol($id_rol) {
        $this->id_rol = $id_rol;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function setApellido($apellido) {
        $this->apellido = $apellido;
    }

    public function setCorreo($correo) {
        $this->correo = $correo;
    }

    public function setContrasena($contrasena) {
        $this->contrasena = $contrasena;
    }



}
