<?php
print_r($_GET);
echo "السلام عليكم"; //هذا أمر طباعة
echo "<br>"; # أمر لطباعة سطر جديد
echo " hello";
echo "<br>" ;
/*
تعلمنا في هذا الدرس
طريقة طباعة النصوص
و جعل كل أمر طباعة في سطر 
*/

//المتغيرات
$first_name = "mohammad";
$last_name="khaled";
$full_name=$first_name .' ' .$last_name;
echo $full_name;
echo "<br>";
// أنواع المتغيرات
/*
1- string => 'hello World ' , "Hello Ahmad I am very (: "
2- integer => -9999999 ---------------> 999999 , 1000 , 9999999999
3- double  => -9999999 ------------> 99999999 , 0.5 , 0.2232435464
4- float   => -999999 -------------> 99999999 , 0.5 , 0.2222 
5- boolean => 0 ,1  true , false
*/
$str="hello world"; // string

$num1=9; // integer

$num2=0.33; // float , double

$b= true; // boolean 
############### العمليات الحسابية  ###########################
/*
+  -  *   /    %
++ -- += -= 

// الأولوية بالعمليات 
1- ()
2- * /
3-  +  - 

*/


$number1=77;
$number2=15;

$result=$number1 + $number2; 

$result=$number1 - $number2;

$result=$number1 * $number2;

$result=$number1 / $number2;

$result=$number1 % $number2; // باقي القسمة



$result /=5; // $result= $result+5;

//echo $result;
#########  العمليات المنطقية   ####################
/*
>  <  >=   <=  ==  ===  !  !=  
ناتج العمليات دائما يكون true , false

&&    || 

*/
$name="ali";
$age=18;



$b= ($name=='ali' || $age==17) && 5!=5 ;
echo  $b;









?>
