<?php
class Persona{
    private $nombre;

    /**
     * Construtor
     */
    public function __construct($unNombre){
        $this->nombre=$unNombre;
    }
    /**
     * @return string
     */ 
    public function getNombre(){
        return $this->nombre;
    }

    /**
     * @param string $nombre
     */ 
    public function setNombre($nombre){
        $this->nombre = $nombre;
    }
    /**
     * Redefinicion del metrodo __toString()
     */
    public function __toString(){
        return $this->getNombre();
    }
}

?>