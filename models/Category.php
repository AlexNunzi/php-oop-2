<?php

require_once __DIR__ . '/Product.php';

class Category {
    public $name;
    public $description;

    public function __construct($_name){
        $this->name = $_name;
    }
}