<?php

class Product {
    public $name;
    protected $price;
    public $category;
    public $type;
    public $img_url = null;

    public function __construct($_name, $_price, Category $_category, Type $_type){
        $this->name = $_name;
        $this->price = $_price;
        $this->category = $_category;
        $this->type = $_type;
    }

    public function getPrice(){
        return $this->price;
    }
}