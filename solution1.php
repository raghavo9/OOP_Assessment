<?php 

//   Demonstrate the concept of method chaining in PHP.


// Answer :  Mehtod chaining is the serial way of calling the class methods that all return the original object


class Animate{

    public $original_x;
    public $original_y;

    public function __construct($xval,$yval)
    {
        $this->original_x =$xval;
        $this->original_y =$yval;
    }



    function translate($x,$y){
        echo "doing translation with values: x=".$x." and y=".$y."<br><br>";
        $this->original_x +=$x;
        $this->original_y +=$y;
        return $this;                                      
    }
    function rotate($deg)
    {
        echo "doing rotation with : ".$deg." degree <br><br>";
        $this->original_x +=(3.14*$deg); 
        $this->original_y +=(3.14*$deg);                // dont know the exact formula for rotation

        return $this;
    }
    function scaling($ratio)
    {
        echo "doing scaling with a factor of  : ".$ratio."  <br><br>";
        $this->original_x *=$ratio;
        $this->original_y *=$ratio;
        return $this;
    }

    public function show_x()
    {
        return $this->original_x;
    }
    public function show_y()
    {
        return $this->original_y;
    }
}


$ob= new Animate(12,25);

echo "original value of x and y : ".$ob->show_x()."  and  ".$ob->show_y()."<br><br>";


$ob->translate(20,50)->scaling(5)->rotate(20)->scaling(12)->translate(200,500);

echo "modified value of x and y : ".$ob->show_x()."  and  ".$ob->show_y()."<br><br>";



?>