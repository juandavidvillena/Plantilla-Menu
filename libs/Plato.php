<?php

class Plato{
    private $idPlato;
    private $idTipo;
    private $nombre;
    private $precio;
    private $foto;
    private $alergeno;
    private $ingredientes;
    private $disponible;

    public function __construct(){

    }

    public function getIdPlato(){
        return $this->idPlato;
    }

    public function setIdPlato($idPlato){
        $this->idPlato = $idPlato;
        return $this;
    }

    public function getIdTipo(){
        return $this->idTipo;
    }

    public function setIdTipo($idTipo){
        $this->idTipo = $idTipo;
        return $this;
    }

    public function getPrecio(){
        return $this->precio;
    }

    public function setPrecio($precio){
        $this->precio = $precio;
        return $this;
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function setNombre($nombre){
        $this->nombre = $nombre;
        return $this;
    }

    public function getIngredientes(){
        return $this->ingredientes;
    }

    public function setIngredientes($ingredientes){
        $this->ingredientes = $ingredientes;
        return $this;
    }

    public function getFoto(){
        return $this->foto;
    }

    public function setFoto($foto){
        $this->foto = $foto;
        return $this;
    }

    public function getAlergeno(){
        return $this->alergeno;
    }

    public function setAlergeno($alergeno){
        $this->alergeno = $alergeno;
        return $this;
    }

    public function getDisponible(){
        return $this->disponible;
    }

    public function setDisponible($disponible){
        $this->disponible = $disponible;
        return $this;
    }
    
}