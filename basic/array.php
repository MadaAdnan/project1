<?php
// $arr= ['h',2,3,4,5,6,7,8,9,0,'hello',true,12.5];
//  echo $arr[5];

// $arr2=[];
// $arr2[]="text";
// $arr2[]="hello";
// $arr2[]=12.6;
// $arr2[]='new array value';

// echo $arr2[6];
//  echo count($arr2);

// $dimention2=[];

// $dimention2[]=[4,5];
// $dimention2[]=[8,9];
// $dimention2[]=['ahmad','fadi'];
// echo "<pre>";
// print_r($dimention2[2][1]);
// echo "</pre>";


// $students=[];

// $students[0]=['name'=>'ahmad','age'=>18,'is_success'=>true];
// $students[1]=['name'=>'fadi','age'=>19,'is_success'=>false];
// $students[2]['name']='waleed';
// $students[2]['age']=22;
// $students[2]['is_success']=true;
// echo $students[2]['is_success'];

$array1 = [1, 2, 3, 4, 5, 6];
$array2 = ['ahmad', 'fhd', 'fadi'];

// دمج المصفوفات
$array_result = array_merge($array1, $array2);
// إضافة عناصر جديدة للمصفوفة بعد آخر عنصر
array_push($array_result, "ali", 100, "test");
//حذف أول عنصر من المصفوفة
array_shift($array_result);
//إضافة عناصر جديدة للمصفوفةفي البداية
array_unshift($array_result, 'test');
// حذف آخر عنصر من المصفوفة
$position = array_pop($array_result);
// تعديل قيمة عنصر في المصفوفة
$array_result[3] = "waleed";
// حذف عنصر من المصفوفة
unset($array_result[5]);
// إستبدال قيمة حسب الإندكس
$array_result = array_replace($array_result, [2 => 'test', 9 => 'wael']);
//
$student = [
    'name' => 'ahmad',
    'age' => 18,
    'is_success' => true,
];

$keys = array_keys($student);
$values = array_values($student);

$rev_array = array_reverse($array_result);
// بحث في المصفوفة
$position = array_search(18, $student);
echo $position;

echo '<pre>';
print_r($array_result);
echo '<br>';
print_r($rev_array);
echo '</pre>';

// مجموع ناتج جمع عناصر المصفوفة
$total = array_sum($array1);
$array3 = [1, 2, 3, 4, 5, 6, 2, 6, 5];
$array4 = [4, 7, 6, 10];
//مقارنة بين مصفوفتين وجلب القيم غير المكررة من المصفوفة الأولى فقط
$new_array = array_diff($array3, $array4);
echo '<pre>';
// قص عدد من العناصر من مصفوفة معينة 
$new_array = array_slice($array3, 2, 2);
// حذف تكرار العناصر وجلب قيم فريدة من المصفوفة
$new_array = array_unique($array3);
print_r($new_array);
echo '</pre>'
?>