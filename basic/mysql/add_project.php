<?php

require_once "./constants.php";
$error = null;
if (isset($_POST['name'])) {
    $name = $_POST['name'];
    $date = $_POST['date'];
    $status = $_POST['status'];
    $user_id = 1;
    $result = '';
    try {
        $result = query("Insert INTO `projects` (`name`,`start_date`,`status`,`user_id`) Values('$name','$date','$status','$user_id')");
       if($result){
        header("location:projects.php");
       }
    } catch (Exception $e) {
        $error = $e->getMessage();
    }
    if (strlen($result) > 0) {
        $error = "لم تتم الإضافة";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <?php
    if ($error != null) {
        echo "<h1>$error</h1>";
    }
    ?>


    <form action="<?= $_SERVER['PHP_SELF'] ?>" method=post>
        <label for="">اسم المشروع :</label>
        <input type="text" name='name'><br>
        <label for="">تاريخ المشروع :</label>
        <input type="date" name='date'><br>
        <label for="">حالة المشروع :</label>
        <select name="status">
            <option value="pending">في الإنتظار</option>
            <option value="complete">منتهية</option>
            <option selected value="ready">جاهز</option>
        </select>

        <button type="submit">حفظ</button>
    </form>
</body>

</html>