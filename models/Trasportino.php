<?php

require_once __DIR__ . '/Product.php';

class Trasportino extends Product{
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
                </ul>';
    }
}