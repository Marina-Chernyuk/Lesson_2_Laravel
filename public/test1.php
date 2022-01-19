<?php
class Car {
    static  $model = 'машина';
    static $action = 'зажигание';

    function makeSounds() {
        echo self:: makeSound() . ', ';
        echo static:: makeSound() . PHP_EOL;
    }
    function makeSound() {
        echo static:: $model . ': ' . static:: $action;
    }
}

class  ProtectedCar extends Car {
    static $model = 'машина с защитой';
    static $action = 'сигнализация';

    function  makeSound()
    {
        echo static::$model . ': '. "снятие с сигнализации";
    }
}
 ProtectedCar:: makeSounds();
