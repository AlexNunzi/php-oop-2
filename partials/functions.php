<?php

function returnIcon($categoryName){
    switch($categoryName){
        case "Cane":
            return '<i class="fa-solid fa-dog"></i>';
            break;
        case "Gatto":
            return '<i class="fa-solid fa-cat"></i>';
            break;
    }
}