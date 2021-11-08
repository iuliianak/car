<?php

class Truck extends NewCar
{public const TYPE='Грузовики';
    protected $maxGruz;//максимально возможный груз в кг;

 public function transfer($gruz){
     $this->setMaxGruz($gruz);
     return self::TYPE . ": Максимально допустимый груз при грузоперевозке = " . $this->maxGruz."<br>";
 }
    public function setMaxGruz($gruz){
        $this->maxGruz=$gruz;
        return $this->maxGruz;
    }
    public function getMaxGruz(){
        return $this->maxGruz;
    }
}