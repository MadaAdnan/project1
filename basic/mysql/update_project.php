<?php

require_once "./constants.php";
$error = null;
if (isset($_POST['project_id']) && !empty($_POST['project_id'])) {
    $name = $_POST['name'];
    $date = $_POST['date'];
    $status = $_POST['status'];
    $id=$_POST['project_id'];
    $result = '';
    try {
        $result = query("Update  `projects` SET `name`='$name',`start_date`='$date',`status`='$status' WHERE id=$id");
       if($result){
        header("location:projects.php");
       }
    } catch (Exception $e) {
        $error = $e->getMessage();
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

<?php
$result=query("SELECT * FROM `projects` WHERE id=".$_GET['id']);
$row=mysqli_fetch_assoc($result);

?>
    <form action="<?= $_SERVER['PHP_SELF'].'?id='.$_GET['id'] ?>" method=post>
    <input type="hidden" value="<?=$_GET['id']?>" name='project_id'>
        <label for="">اسم المشروع :</label>
        <input type="text" name='name' value="<?=$row['name']?>"><br>
        <label for="">تاريخ المشروع :</label>
        <input type="date" name='date' value="<?=$row['start_date']?>"><br>
        <label for="">حالة المشروع :</label>
        <select name="status">
            <option <?=$row['status']=='pending'?'selected':'
            ' ?> value="pending">في الإنتظار</option>
            <option <?=$row['status']=='complete'?'selected':'
            ' ?> value="complete">منتهية</option>
            <option <?=$row['status']=='ready'?'selected':'
            ' ?> value="ready">جاهز</option>
        </select>

        <button type="submit">حفظ</button>
    </form>
</body>

</html>