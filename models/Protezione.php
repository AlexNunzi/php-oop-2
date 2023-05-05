<?php

require_once __DIR__ . '/Product.php';

class Protezione extends Product{
    public $target;

    public function __construct($_name, $_price, Category $_category, Type $_type, $_target){
        parent::__construct($_name, $_price, $_category, $_type);
        $this->target = $_target;
    }

    public function getInformationsListHtml(){
        return  '<ul>
                    <li>Tipologia medicinale: ' . $this->target .'</li>
                </ul>';
    }
}