<?php


// we cannot have two classes with same name in the same directory
// so namespace llow the same name to be used for more than one class by acting as some virtual directory 




// traits are used to implement multiple inheritence in php


include 'file01.php';


class Check{

    public function __construct()
    {
        echo "object of Rootfolder1\Check create <br><br>";
    }
}


$obj1 =new other\Check();

$obj2 = new Check();


trait MyTrait1
{
    public function method1()
    {
        echo "this is method1 belongs to MyTrait1 <br><br>";
    }
}
trait MyTrait2
{
    public function method2()
    {
        echo "this is method2 belongs to MyTrait2 <br><br>";
    }
}

class ConcreteClass{
    use MyTrait1;
    use MyTrait2;
    public function method3()
    {
        echo "this is method3 belongs to ".__class__." <br><br>";
    }

}


$obj3 = new ConcreteClass();
$obj3->method1();
$obj3->method2();
$obj3->method3();





?>