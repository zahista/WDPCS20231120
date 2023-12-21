<?php 

class Car 
{
    public $vin_code;
    protected $color;
    protected $has_door;


    public function __construct(int $vin_code,  string $color,  bool $has_door)
    {
        $this->vin_code = $vin_code;        
        $this->color = $color;       
        $this->has_door = $has_door;       
    }

    public function run()
    {
        return $this->start_enngine("vrumm");
    }

    public function getVinCode()
    {
        return $this->vin_code;
    }

    public function setVinCode($new_vin_code)
    {
        $this->vin_code = $new_vin_code;
    }

    protected function start_enngine($sound)
    {
        return $sound;
    }

    public function stop_engine()
    {
        echo "už nejedu";
    }

}


$car1 = new Car(123, "blue", true);
$car2 = new Car(456, "red", false);
$car3 = new Car(726, "green", true);
$car4 = new Car(982, "gray", false);



echo "<pre>";
var_dump($car1, $car2, $car3, $car4);
echo "</pre>";

echo $car3->getVinCode();
$car3->setVinCode(978);

echo $car3->getVinCode();

$car3->vin_code = 2222;

echo $car3->vin_code;














