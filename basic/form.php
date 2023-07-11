<?php
$name= $_REQUEST['name'];
$email= $_REQUEST['email'];
$password= $_REQUEST['password'];
$country=$_REQUEST['country'];
print_r($country);
echo "<br>";
echo $_REQUEST['city'];
echo "<br>";
echo $_REQUEST['color'];
echo "<br>";
if($name=='ahmad'){
    echo "welcome ahmad";
}else{
    echo 'This Not Register';
}

?>