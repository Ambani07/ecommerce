<?php

function presentPrice($price){
    return  number_format(floatval(str_replace(',', '',$price)), 2, ',', ' ');
}

function productImage($path){
    return ($path != "") && file_exists('storage/' . $path) ? asset('storage/' . $path ) : 'https://via.placeholder.com/150

    C/O https://placeholder.com/150';
}