<?php
spl_autoload_register(function($class ) {
    require_once '../includes/classes/' . $class . '.php';

});
$food = new Food();
var_dump($food);
var_dump($food->eat());





// appetizers
$appetizer = new Appetizer();
$bruschetta = new Bruschetta();
var_dump($appetizer);
var_dump($appetizer->eat());
var_dump($bruschetta);
var_dump($bruschetta->eat());

// main dish
$mainDish = new MainDish();
$soup = new Soup();
var_dump($mainDish);
var_dump($mainDish->eat());
var_dump($soup);
var_dump($soup->eat());

// dessert
$dessert = new Dessert();
$coffee = new Coffee();
var_dump($dessert);
var_dump($dessert->eat());
var_dump($coffee);
var_dump($coffee->eat());

die();