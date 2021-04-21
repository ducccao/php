<?php 
$x=123;

var_dump(is_int($x));


$x=123.123;

var_dump(is_int($x));

$x=1.e23;
var_dump($x);


?>