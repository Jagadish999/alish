<?php

    //database connection statements

    $host = 'dbFinal';
    $user = 'jagadish';
    $key = 'pass';
    $dbName = 'assignment1';

    $pdo = new PDO('mysql:dbname=' . $dbName . ';host=' . $host , $user , $key);

?>