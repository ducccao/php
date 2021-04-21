<?php 

$x="string";
$y=5;
$z=3.2;
$flag=true;
$a=[1,2,3];
$car=array("Volvo","BMW");
var_dump($car);
echo $car



?>

<?php 

class Car{
    public $color;
    public $model;

    public function __construct( $color,$model)
    {
        # code...
        $this->color=$color;
        $this->model=$model;
    }

    public function message( )
    {
        # code...
        return "My car is ". $this->color." ".$this->model;  
    }
 
}


$myCar= new Car("Black","voval");
echo $myCar->message();
?>



<?php 
$x=null;
var_dump($x);
?>