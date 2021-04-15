<?php

class producto {
    private $pro_id;
    private $pro_nombre;
    private $pro_descripcion;
    private $pro_unidades;
    private $pro_precio;
    
    function __construct($pro_id,$pro_nombre,$pro_descripcion,$pro_unidades,$pro_precio) {
        $this->pro_id = $pro_id;
        $this->pro_nombre = $pro_nombre;
        $this->pro_descripcion = $pro_descripcion;
        $this->pro_unidades = $pro_unidades;
        $this->pro_precio = $pro_precio;
    }

    function setProId($pro_id) {
        $this->pro_id = $pro_id;
    }

    function setProNombre($pro_nombre) {
        $this->pro_nombre = $pro_nombre;
    }

    function setProDescripcion($pro_descripcion) {
        $this->pro_descripcion = $pro_descripcion;
    }

    function setProUnidades($pro_unidades) {
        $this->pro_unidades = $pro_unidades;
    }

    function setProPrecio($pro_precio) {
        $this->pro_precio = $pro_precio;
    }

    function getProId() {
        return $this->pro_id;
    }

    function getProNombre() {
        return $this->pro_nombre;
    }

    function getProDescripcion() {
        return $this->pro_descripcion;
    }
    function getProUnidades() {
        return $this->pro_unidades;
    }

    function getProPrecio() {
        return $this->pro_precio;
    }
}