<?php
class Engine extends Details{
protected $power;
protected $strana;
    public function __construct($power,$strana){
        $this->power=$power;
        $this->strana=$strana;
        $this->status="OFF";
    }
    public function get_power(){
       return  $this->power;
    }
    public function get_strana(){
        return  $this->strana;
    }
}