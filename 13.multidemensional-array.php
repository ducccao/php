<?php 
$aa=array(array(1,2,3),array(4,3,5),array(1,1,1));

for($i=0;$i<count($aa);$i++){
    for($j=0;$j<count($aa[$i]);$j++){
        echo $aa[$i][$j]." ";
    }
    echo "<br/>";

}


?>