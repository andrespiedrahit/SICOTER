<?php

class usuario {
    private $id;
    private $alias;
    private $cedula;
    private $nombre;
    private $apellido;
    private $contrasena;
    private $rol_id;
    private $correo;
    
    public function getId() {
        return $this->id;
    }

    public function getAlias() {
        return $this->alias;
    }

    public function getCedula() {
        return $this->cedula;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getApellido() {
        return $this->apellido;
    }

    public function getContrasena() {
        return $this->contrasena;
    }

    

    public function getRol_id() {
        return $this->rol_id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setAlias($alias) {
        $this->alias = $alias;
    }

    public function setCedula($cedula) {
        $this->cedula = $cedula;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function setApellido($apellido) {
        $this->apellido = $apellido;
    }

 
    
    function setContrasena($contrasena,$hash) {
        $this->contrasena =hash($hash, $contrasena, false);
    }  

    

    public function setRol_id($rol_id) {
        $this->rol_id = $rol_id;
    }
    public function getCorreo() {
        return $this->correo;
    }

    public function setCorreo($correo) {
        $this->correo = $correo;
    }



}
