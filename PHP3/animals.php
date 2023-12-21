<?php 

error_reporting(E_ALL);
ini_set("display_errors", 1);

class Animal
{
    public $number_of_legs = 4;
    public $has_hair = true;  
    public $sound = "haf haf"; 

    public function make_sound()
    {
        return $this->sound;
    }

}



class Dog extends Animal
{
    public $breed;
}

$dog = new Dog();
echo $dog->make_sound();

require_once "./math.php";

echo Math::substractNumbers(10, 6);