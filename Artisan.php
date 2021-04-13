<?php

class Artisan {
    private $nomArtisan;
    private $prenomArtisan;
    private $dateNaissanceArtisan;
    private $villeNaissanceArtisan;
    private $paysNaissanceArtisan;
    
    public function getNomArtisan() {
        return $this->nomArtisan;
        
    }
    
    public function setNomArtisan($nomArtisan) {
        $this->nomArtisan = $nomArtisan;
        
    }
    
    public function getPrenomArtisan() {
        return $this->prenomArtisan;
        
    }
    
    public function setPrenomArtisan($prenomArtisan) {
        $this->prenomArtisan = $prenomArtisan;
        
    }
    
    public function __construct($nomArtisan,$prenomArtisan) {
        $this->nomArtisan = $nomArtisan;
        $this->prenomArtisan = $prenomArtisan;
    }
}

