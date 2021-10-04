<?php ini_set('display_errors', 1);error_reporting(E_ALL);
include('inc/autoload.php');


function switch_status(MovableInterface $obj, $status,$class){ global $mas;
if($class=='Engine'){$message="Начальное состояние: ".$obj->getStatusEngine()."<br>\n
Конечное состояние: ".$obj->changeStatusEngine($status)."<br>\n";}
else if($class=='GazPedal'){$message=$obj->changeStatusPedal($status)."<br>\n";
    $message.=$obj->checkSpeed();
}
return $message;
}
$bus=new Bus('Mersedez');
$sportcar=new SportsCar('Ferrari');
$truck=new Truck('KAMAZ');
$brokencar=new BrokenCar('Nissan');
$mas=['Bus'=>['obj'=>$bus,'maxspeed'=>70,'speed'=>100,'statusEngine'=>'ON','statusPedal'=>'ON'],
        'SportsCar'=>['obj'=>$sportcar,'maxspeed'=>200,'speed'=>60,'statusEngine'=>'ON','statusPedal'=>'ON'],
        'Truck'=>['obj'=>$truck,'maxspeed'=>100,'speed'=>80,'statusEngine'=>'ON','statusPedal'=>'ON'],
    'BrokenCar'=>['obj'=>$brokencar,'maxspeed'=>100,'speed'=>0]];
foreach($mas as $class=>$masOptions){
     echo "<div><h1>". $masOptions['obj']->name." (".$class::TYPE.")</h1>";
    $masOptions['obj']->setMaxSpeed($masOptions['maxspeed']);
    $masOptions['obj']->speed=$masOptions['speed'];
    if(isset($masOptions['statusEngine'])){
        echo switch_status($masOptions['obj'],$masOptions['statusEngine'],"Engine");
        echo switch_status($masOptions['obj'],$masOptions['statusPedal'],"GazPedal");

    }else{
        echo "Поломанные машины не двигаются";
    }
echo "</div> ";

}

