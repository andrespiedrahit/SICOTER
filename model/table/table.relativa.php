<?php

class relativas {

    private $id_variable;
    private $nombre;
    private $fecha;
    private $valor;

    function getIdVariable() {
        return $this->id_variable;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getFecha() {
        return $this->fecha;
    }

    function getValor() {
        return $this->valor;
    }

    function setIdVariable($id_variable) {
        $this->id_variable = $id_variable;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setFecha($fecha) {
        $this->fecha = $fecha;
    }

    function setValor($valor) {
        $this->valor = $valor;
    }

}
