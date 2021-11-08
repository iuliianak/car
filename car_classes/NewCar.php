<?php

class NewCar extends Car implements MovableInterface
{
    public const TYPE = 'Новые машины';
    protected $engine;
    protected $pedal;


    public function __construct($name, $power, $strana)
    {
        $this->engine = new Engine($power, $strana);
        $this->pedal = new GazPedal();
        $this->name = $name;
    }

    public function start()
    {
        return "Зажигание включено <br>\n";
    }

    public function stop()
    {
        return "Зажигание выключено <br>\n";
    }

    public function up()
    {    $message="Нажата педаль газа. Скорость растет<br>\n";
        for($i=1;$i<=$this->getMaxSpeed();$i++) {
        $this->pedal->set_speed($i);
        $message.="Скорость = ".$this->pedal->get_speed() ."км/ч <br>\n";
            if($this->getMaxSpeed()==$this->pedal->get_speed()){
                $message.="Превышение максимальной скорости = ".$this->getMaxSpeed()."<br>";$message.=$this->down();
            }
    }
        return $message;
    }

    public function down()
    { $message="Педаль газа не нажата - скорость падает<br>\n";
        $i=$this->getMaxSpeed();
        while($i>1){
        $this->pedal->set_speed($i);
        $message.="Скорость = " .$this->pedal->get_speed() . "км/ч <br>\n";
        $i--;
    }
        return $message;
    }

    public function getEngine()
    {
        return $this->engine;
    }

    public function getPedal()
    {
        return $this->pedal;
    }

    public function changeStateEngine()
    {
        $this->engine->changeStatus();
        if ($this->engine->get_status() == "ON"){
            $message = $this->start();
        }
        else {
            $message = $this->stop();
        }
        return $message;
    }
    public function changeStatePedal()
    {$this->pedal->changeStatus();
        if ($this->pedal->get_status() == "ON") {
            $message = $this->up();
        } else {
            $message = $this->down();
        }
        return $message;
    }




}