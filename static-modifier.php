<?php

class Cars {

    static $wheel_count = 4;
    static $door_count = 4;
    
static function car_detail(){

    echo Cars::$wheel_count;
    echo Cars::$door_count;
    

}

}

$bmw = new Cars();



echo Cars::$door_count;
echo Cars::car_detail();





?>