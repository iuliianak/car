<?php
class GazPedal{
  public $name;
  public $status;
    public function change_status($status){
        $this->status=$status;
        return $this->status;
    }
    public function __construct(){
        $this->status="OFF";
    }
}