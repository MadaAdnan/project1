<?php
$input=9;
$name='ahmad';

if($input>9 && strlen($name)>4){

echo "this variable Is gt 9";

}else{
    echo "the cond is false";
}
$mark=50;
if($mark>90){
    echo 'excelant';
}elseif($mark>80){
echo "good";
}elseif($mark>60){
    echo 'middle';
}else{
    echo 'bad';
}
echo "<br>";
// switch
$day='sat';

switch($day){
    case 'sat':
        echo "Today Is Saturday";
        break;
    
    case 'sun':
        echo "Today Is Sunday";
        break;
    case 'mon':
        echo "Today Is Monday";
        break;
    default:
        echo 'The Day is not in range';


}
/// if مختصرة
echo "<br>";
echo 4<5?'ok':'not';


