<?php
function find_class($classname){
$filename='car_classes/'. $classname.'.php';
if(!file_exists($filename)){$filename='interfaces/'. $classname.'.php';}
if(file_exists($filename)){include $filename;
}
}
spl_autoload_register('find_class');
