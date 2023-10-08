<?php
include_once "./src/InterfaceEdible.php";
include_once "./src/Animal.php";
include_once "./src/Fruit.php";
include_once "./src/Chicken.php";
include_once "./src/Tiger.php";
include_once "./src/Apple.php";
include_once "./src/Orange.php";

echo '-----Animals----- <br />';
$chicken = new Chicken();
echo 'Chicken: ' . $chicken->makeSound() . ' and '. $chicken->howtoEat() . '<br/>';
$tiger = new Tiger();
echo 'Tiger: ' . $tiger->makeSound() .  '<br/><br />';
echo '-----Fruits----- <br />';
$apple = new Apple();
echo 'Apple: ' . $apple->howtoEat() . '<br/>';
$orange = new Orange();
echo 'Orange: ' . $orange->howtoEat() . '<br/>';