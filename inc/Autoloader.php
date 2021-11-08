<?php
class Autoloader{
      public function __invoke($class)  {
      $filename='car_classes/'. $class.'.php';
      if(file_exists($filename)){
          include $filename;
  }

}
}