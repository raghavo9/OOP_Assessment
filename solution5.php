<?php

// Dependency injection is a way of injecting one class in another class in PHP
// we can inherit the property of the parent class without using the concept of inheritance



class first_name{
    public $fname ="Raghav";
    public function getName(){
        return $this->fname;
    }
}

class full_name{
    public $fullname ="";
    function __construct(first_name $obj1)
    {
        $this->fullname =$obj1->fname."Rastogi";
    }
}


$obj1 = new first_name();
$obj2 = new full_name($obj1);

echo $obj2->fullname;


?>