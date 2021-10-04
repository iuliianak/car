<?php

class NewCar extends Car implements MovableInterface
{public const TYPE='Новые машины';
    public $engine;
    public $pedal;
    public function __construct($name){
        $this->engine=new Engine();
        $this->pedal=new GazPedal();
        $this->name=$name;
    }
    public function start(){
        return "Зажигание включено, марка машины- ".$this->name."<br>\n";
    }
    public function stop(){
        return "Зажигание выключено, ". self::TYPE .", марка машины- ".$this->name."<br>\n";
    }
    public function changeStatusEngine($status){
        if($this->engine->change_status($status)=="ON"){$message=$this->start();}
        else{$message=$this->stop();}
        return $message;
    }
    public function getStatusEngine(){
        if($this->engine->status=='ON'){$message=$this->start();}
        else{$message=$this->stop();}
        return $message;
    }
    public function changeStatusPedal($status){
        if($this->pedal->change_status($status)=="ON"){$message=$this->up();}
        else{$message=$this->down();}
        return $message;
    }
    public function getStatusPedal(){
        if($this->pedal->status=='ON'){$message=$this->up();}
        else{$message=$this->down();}
        return $message;
    }

    public function checkSpeed(){
        if($this->getMaxSpeed()<$this->speed){$message="Превышение максимальной скорости 
        в машине типа ". self::TYPE .", марка - ".$this->name."<br>\n
Скорость машины - ".$this->speed.". Предельно допустимая скорость - ".$this->getMaxSpeed()."<br>\n";
            $this->pedal->status="OFF";$message.=$this->down();
        }
        else{$message="Автомобиль двигается. Скорость растет - в машине типа ". self::TYPE .", марка - ".$this->name."<br>\n 
Скорость машины - ".$this->speed.". Предельно допустимая скорость - ".$this->getMaxSpeed();}

        return $message;
    }
    public function up(){
        return "Нажата педаль газа";
    }
    public function down(){
        return "Педаль газа не нажата - скорость падает<br>\n";
    }
}