<?php
require_once './constants.php';
if (isset($_GET['id'])) {
    try {
        $result = query("DELETE FROM tasks WHERE project_id=" . $_GET['id']);
    } catch (Exception $e) {
        echo $e->getMessage();
    }

    if ($result) {
        try {
            $result = query("DELETE FROM projects WHERE id=" . $_GET['id']);
            if ($result) {
                header('location:projects.php');
            } else {
                echo "لم يتم الحذف";
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }
        
    }
}

$connection->close();