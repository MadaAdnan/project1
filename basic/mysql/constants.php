<?php
define('HOST','127.0.0.1');
define('DB_NAME', 'trello');
define('DB_USER', 'root');
define('DB_PASS', '');


$connection=mysqli_connect(HOST,DB_USER,DB_PASS,DB_NAME);

//$result=mysqli_query($connection,"select * from users");
//$data=mysqli_fetch_all($result);
//print_r($data);
//print_r($result);
function query($sql){
    try{
        $result=mysqli_query($GLOBALS['connection'],$sql);
       
        return $result;
    }catch(Exception|Error $e){
        throw new Exception($e->getMessage());
    }
    
}

?>