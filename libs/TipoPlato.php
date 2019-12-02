<?php

class TipoPlato{
    private $idTipo;
    private $nom_tipo;
    private $especialidad_idPlato;


    public function __construct(){

    }

    public function getIdTipo(){
        return $this->idTipo;
    }

    public function setIdTipo($idTipo){
        $this->idTipo = $idTipo;
        return $this;
    }

    public function getNombreTipo(){
        return $this->nom_tipo;
    }

    public function setNombreTipo($nom_tipo){
        $this->precio = $nom_tipo;
        return $this;
    }


    public function getEspecial(){
        return $this->especialidad_idPlato;
    }

    public function setIngredientes($especialidad_idPlato){
        $this->especialidad_idPlato = $especialidad_idPlato;
        return $this;
    }
    
}