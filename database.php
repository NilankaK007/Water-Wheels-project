<?php
define('SEVERNAME','127.0.0.1');
define('USERNAME','root');
define('PASSWORD','mariadb');
define('DBNAME','waterwheels');


try{
    $connect=mysqli_connect(SEVERNAME,USERNAME,PASSWORD,DBNAME);
    if(!$connect){
        die("connection failed".mysqli_connect_error());
    }else{
        echo "connected successfully<br>";
    }
}
catch(Exception $e){
    die($e->getmessage());
}
?>