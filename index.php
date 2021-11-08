<?php ini_set('display_errors', 1);error_reporting(E_ALL);
include('inc/autoload.php');


$bus=new Bus('Mersedez','300','USA');
$truck=new Truck('KAMAZ','400','France');


$mas=['Bus'=>['auto'=>$bus,'maxspeed'=>70,'transfer'=>50],
    'Truck'=>['auto'=>$truck,'maxspeed'=>100,'transfer'=>10000]];

foreach($mas as $class=>$masOptions){
     echo "<div><h1>". $masOptions['auto']->name." (".$class::TYPE.")</h1>";
   $masOptions['auto']->setMaxSpeed($masOptions['maxspeed']);

    echo "Технические характеристики мотора : Мощность - ".$masOptions['auto']->getEngine()->get_power().", Страна производитель - ".$masOptions['auto']->getEngine()->get_strana()."<br>\n";
    echo $masOptions['auto']->transfer($masOptions['transfer']);
    echo $masOptions['auto']->changeStateEngine();
    echo $masOptions['auto']->changeStatePedal();


echo "</div> ";

}

