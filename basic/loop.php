<?php

// for , foreach ,while , do while
// عداد  , شرط   ,  معامل زيادة أو نقصان

// for($i=0;$i<100;$i++){
//  echo "welcome". $i." <br>";   
// }

$count=0;
// while($count<10){
//     echo "welcome". $count." <br>";
    
//     $count++;
// }


// do{
//     echo "welcome". $count." <br>"; 
//     $count++;
// }while($count>10);

$names=['ali','fhd','wael','ahmad'];
// for($i=0;$i< count($names) ;$i++){
//       echo $names[$i]."<br>";   
//      }

// foreach($names as $name){
//     echo $name ."<br>";
// }


// break , continue
$students=[
    ['name'=>'ali','age'=>20,'birth'=>'2010-05-06'],
    ['name'=>'ahmad','age'=>20,'birth'=>'2010-05-05']
];
// foreach($students as $key=> $student){
//     if($student['birth']=='2010-05-06'){
//         break;
//     }
//     echo "<pre>";
//     print_r($student);
//     echo "</pre>";


// }

foreach($students as $key=> $student){
    if($student['birth']=='2010-05-06'){
        continue;
    }
    echo "<pre>";
    print_r($student);
    echo "</pre>";


}




?>