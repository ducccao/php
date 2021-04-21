<body>
<form  method="POST"  action="<?php echo $_SERVER['PHP_SELF'];?>" >
Name: <input type="text" name="fname" >
<button type="submit" >Submit</button>

</form>


<?php 

if($_SERVER["REQUEST_METHOD"]==="POST"){
    $name=$_POST['fname'];
    if(empty($name)){
        echo "Name is empty";
    }
    else{
        echo "Name is ". $name;
    }
}
?>
</body>