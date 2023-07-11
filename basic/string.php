<?php
$text="hello World";
# يجلب طول النص كم حرف
//echo strlen($text); 

###  بحث وإستبدال

// $replace=str_replace("l","",$text);
// echo $text;
// echo "<br>";
// echo $replace;


### قص النص بطول معين

//$end=strlen($text) -1;
// $cut=substr($text,6,$end);
// echo $cut;

### حذف المسافات من النص
/*
$t=trim($text);// حذف المسافات من البداية والنهاية
$lt=ltrim($text,'+'); // حذف المسافات من البداية فقط
$rt=rtrim($text); // حذف المسافات من النهاية فقط
echo $text;
echo "<br>";
echo $lt;
*/
### عكس النص
// $rev=strrev($text);
// echo $rev;

### معرفة بداية كلمة
// $position_start=strpos($text,"World");
// echo $position_start;
 
#### تحويل النص إلى وقت
// $text_date="-53 years";
// $time=strtotime($text_date);
// echo $time;

##  تحويل النص إلى مصفوفة 

$arr=explode(" ",$text);
print_r($arr);

?>