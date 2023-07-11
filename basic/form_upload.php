<?php
require './constans/file_constanse.php';
$name='ali';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="upload.php" method="post" enctype="multipart/form-data">
<input type="file" accept="image/gif,image/jpeg,image/png" name="upload">
<span><?= $name ?></span>

<button type="submit">رفع الملف</button>
    </form>
</body>
</html>