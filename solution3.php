<?php

//Multiple-Inheritance is the resources of the  OOP Language in which child class 
//or subclass can inherit the resources of the multiple parent classes or superclasses.




interface A{
    public function method1($val);

}

abstract class B{
    public function method2()
    {
        echo "this is method 2 belongs to class ".__class__."<br><br>";
    }
    abstract function method3($val2);
}

trait MyTrait
{
    public function method4()
    {
        echo "this is method 2 belongs to MyTrait <br><br>";
    }
}


class ConcreteClass extends B implements A{
    use MyTrait;
    public function method1($val)
    {
        echo "this function(method1) is implemented in class".__class__."<br><br>";
    }
    public function method3($val)
    {
        echo "this function(method3) is implemented in class".__class__."<br><br>";
    }

}



$obj = new ConcreteClass();
$obj->method1(100);
$obj->method2();
$obj->method3(99);
$obj->method4();


// this way multiple inheritance is handled in php using traits




?>