<?php
$num1 = trim($_REQUEST['num1']);
$op = trim($_REQUEST['op']);
$num2 = trim($_REQUEST['num2']);

function filter($var, $filter)
{
    if (!filter_var($var, $filter)) {
        throw new Exception('تحقق من قيمة الرقم ' . $var . ' بحيث تكون رقم', 200);
    }
}


try {

    filter($num1, FILTER_VALIDATE_FLOAT);
    filter($num2, FILTER_VALIDATE_FLOAT);


    if ($op != '+' && $op != '-' && $op != '*' && $op != '/') {

        throw new Error('تحقق من قيمة العملية', 200);
    }

    switch ($op) {
        case '+':
            echo $num1 + $num2;
            break;
        case '-':
            echo $num1 - $num2;
            break;
        case '*':
            echo $num1 * $num2;
            break;
        case '/':
            // if ($num2 == 0) {
            //     throw new Exception('لا يمكن القسمة على 0');
            // }
            echo $num1 / $num2;
            break;
    }

} catch (Exception $e) {
    echo $e->getMessage();
}catch(Error $e){
    echo $e->getMessage();  
}





