<?php

require_once __DIR__ . '/Product.php';

class Type {
    public $name;
    public $description;

    public function __construct($_name){
        $this->name = $_name;
    }
}