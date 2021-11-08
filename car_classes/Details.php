<?php
abstract class Details{
    protected $status;
    public function get_status(){
        return $this->status;
    }
    public function set_status($status){
        $this->status=$status;
    }



public function changeStatus(){
if($this->status=="OFF"){$this->set_status("ON");}
else{$this->set_status("OFF");}
}

}