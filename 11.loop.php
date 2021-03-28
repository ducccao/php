<?php 
for($i=0;$i<=10;$i++){
    echo $i;
}
?>

<?php 
$a=array(1,2,3);

foreach ($a as $y) {
    # code...
    echo $y;
}


$age=array("duc"=>"21","Ben"=>"20");
foreach ($age as $x =>$val) {
    # code...
    echo "$x = $val <br/>";
}

?>