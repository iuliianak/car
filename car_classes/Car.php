<?php
abstract class Car{
 public $name;
 public $speed;
protected $maxspeed;
    public function getMaxSpeed(){
        return $this->maxspeed;
    }
    public function setMaxSpeed($maxspeed){
        $this->maxspeed= $maxspeed;
    }

}