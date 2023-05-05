<?php

require_once __DIR__ . '/Product.php';

class Carne extends Product{
    public $taste;
    public $weigth_amount;
    public $nutritional_values;

    public function __construct($_name, $_price, Category $_category, Type $_type, $_taste, $_weigth_amount){
        parent::__construct($_name, $_price, $_category, $_type);
        $this->taste = $_taste;
        $this->weigth_amount = $_weigth_amount;
    }
}