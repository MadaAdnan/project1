<?php
require_once './constants.php';

$result=query('SELECT * FROM projects');



?>


<table border=1 width="100%">
   <tr>
    <td>id</td>
    <td>name</td>
    <td>status</td>
    <td>date</td>
    <td>تحكم</td>
   </tr> 
<?php while($row=mysqli_fetch_assoc($result)): ?>
   <tr>
    <td><?=$row['id']?></td>
    <td><?=$row['name']?></td>
    <td><?=$row['status']?></td>
    <td><?=$row['start_date']?></td>
    <td>
        <a href="delete_project.php?id=<?=$row['id']?>">حذف</a>
        <a href="update_project.php?id=<?=$row['id']?>">تعديل</a>
        
    </td>
   </tr> 
   <?php endwhile; ?>
</table>