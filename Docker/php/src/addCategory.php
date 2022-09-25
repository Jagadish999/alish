<?php

    if(isset($_POST['CategorySubmit'])){

        $name = $_POST['newCategoryName'];
        
        require 'dbConn.php';

        $createTable = "CREATE TABLE IF NOT EXISTS category(
                        id INT(5) NOT NULL auto_increment,
                        name VARCHAR(255) NOT NULL,
                        PRIMARY KEY (id)
                        )";

        $firstPkValue = "ALTER TABLE category AUTO_INCREMENT = 3001";

        $insert = "INSERT INTO category(name) VALUES('$name')";

        $activityCreate = $pdo->query($createTable);
        $activityAlter= $pdo->query($firstPkValue);

        $activityInsert = $pdo->query($insert);

        if($activityCreate && $activityAlter && $activityInsert){

            $portInfo = $_SERVER["HTTP_HOST"];
            
            $pageToMove = "http://".$portInfo."/adminArticles.php?activityReq=viewCategory";
            header("Location: " . $pageToMove);
        }
    }


?>