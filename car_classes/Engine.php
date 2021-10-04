<?php
class Engine{
public $capacity;
public $status;

public function change_status($status){// OFF - выключен, ON - включен
   $this->status=$status;
   return $this->status;
}
    public function __construct(){
        $this->status="OFF";
    }

}