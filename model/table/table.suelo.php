<?php

class suelo {

    private $id;
    private $nombre;
    private $fecha;
    private $valor;
    
    public function getId() {
        return $this->id;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getFecha() {
        return $this->fecha;
    }

    public function getValor() {
        return $this->valor;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function setFecha($fecha) {
        $this->fecha = $fecha;
    }

    public function setValor($valor) {
        $this->valor = $valor;
    }


}
