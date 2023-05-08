<?php

trait Sizeable {
    protected $minPetKg;
    protected $maxPetKg;

    public function setPetWeightRange($_minPetKg, $_maxPetKg) {
        if(!is_int($_minPetKg) || !is_int($_maxPetKg)){
            throw new Exception('I valori inseriti devono essere entrambi numeri interi');
        } else if ($_maxPetKg < $_minPetKg) {
            throw new Exception('Il valore del secondo parametro passato non può essere inferiore al valore del primo');
        } else {
            $this->minPetKg = $_minPetKg;
            $this->maxPetKg = $_maxPetKg;
        }
    }

    public function getPetWeightRange(){
        return $this->minPetKg . 'Kg / ' . $this->maxPetKg . 'Kg';
    }
    
}