<?php

class usuario {
    private $id;
    private $alias;
    private $cedula;
    private $nombre;
    private $apellido;
    private $contrasena;
    private $created_at;
    private $updated_at;
    private $deleted_at;
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

    public function getCreated_at() {
        return $this->created_at;
    }

    public function getUpdated_at() {
        return $this->updated_at;
    }

    public function getDeleted_at() {
        return $this->deleted_at;
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

    public function setContrasena($contrasena) {
        $this->contrasena = $contrasena;
    }

    public function setCreated_at($created_at) {
        $this->created_at = $created_at;
    }

    public function setUpdated_at($updated_at) {
        $this->updated_at = $updated_at;
    }

    public function setDeleted_at($deleted_at) {
        $this->deleted_at = $deleted_at;
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
