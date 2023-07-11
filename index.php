<?php
require_once './oop/Car.php';
require_once './oop/Ford.php';
$ford=new Ford(1.5,1.8);
$ford->max_Speed();

echo $ford::$is_electric_window;
echo "<br>";
echo $ford;

$ford2=new Ford(1.5,1.8);
echo $ford2::$is_electric_window;
echo "<br>";
echo $ford2;
Ford::change_window();
$ford3=new Ford(1.5,1.8);
$ford3->max_Speed();

echo $ford3::$is_electric_window;
echo "<br>";
echo $ford3;

$ford4=new Ford(1.5,1.8);
echo $ford4::$is_electric_window;
echo "<br>";
echo $ford4;
