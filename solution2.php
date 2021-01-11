<?php


interface A{
    public function method1($val1);
    public function method2();
    
}

abstract class B implements A{

    public function method1($value1)
    {
        echo "defination provided in class ".__class__." and value increased by a factor of 5".($value1*5)."<br><br>";
    }
    abstract public function method2(); 
}


class ConcreteClass extends B{

    public function method2()
    {
        echo "this defination is provided in class : ".__class__." and this is concrete class <br><br>";
    }
}



$obj = new ConcreteClass();
$obj->method1(1999);                        // method1 called from object of concrete class
$obj->method2();





?>