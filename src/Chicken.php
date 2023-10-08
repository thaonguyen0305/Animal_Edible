<?php 
class Chicken extends Animal implements InterfaceEdible
{
    public function makeSound()
    {
        return 'Cluck-cluck!';
    }
    public function howtoEat()
    {
        return 'could be fried';
    }
}