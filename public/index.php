<?php
spl_autoload_register(function($class ) {
    require_once '../includes/classes/' . $class . '.php';

});
$food = new Food();
var_dump($food);

$appetizer = new Appetizer();
$mainDish = new MainDish();
$dessert = new Dessert();

var_dump($appetizer);
var_dump($mainDish);
var_dump($dessert);

die();