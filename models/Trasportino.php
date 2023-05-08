<?php

require_once __DIR__ . '/Product.php';
require_once __DIR__ . '/../Traits/Sizeable.php';

class Trasportino extends Product{

    use Sizeable;

    public $size;
    public $material_type;

    public function __construct($_name, $_price, Category $_category, Type $_type, $_size, $_material_type){
        parent::__construct($_name, $_price, $_category, $_type);
        $this->size = $_size;
        $this->material_type = $_material_type;
    }

    public function getInformationsListHtml(){
        return  '<ul>
                    <li>Dimensioni: ' . $this->size .'</li>
                    <li>Materiale: ' . $this->material_type .'</li>
                    <li>Per ' . strtolower($this->category->name) . ' di peso compreso tra: ' . $this->getPetWeightRange() . '</li>
                </ul>';
    }
}