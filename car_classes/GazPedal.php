<?php
class GazPedal extends Details{
    protected $speed;
    public function get_speed(){
        return  $this->speed;
    }
    public function set_speed($speed){
        $this->speed=$speed;
    }
    public function __construct(){
    $this->status="OFF";
}

}