<?php

class Bus extends NewCar
{public const TYPE='Автобусы';
    protected $maxPassenger;//максимально возможная пассажиронагруженность

    public function transfer($maxPassenger){
        $this->setmaxPassenger($maxPassenger);
        return self::TYPE . ": Максимально допустимое количество пассажиров = " . $this->maxPassenger."<br>";
    }
    public function setmaxPassenger($gruz){
        $this->maxPassenger=$gruz;
        return $this->maxPassenger;
    }
    public function getmaxPassenger(){
        return $this->maxPassenger;
    }
}