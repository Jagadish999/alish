<?php
    require 'dbConn.php';

    if(isset($_POST['editCategorySubmit'])){
        
        $name = $_POST['newCategoryName'];
        $id = (int) $_POST['oldCategory'];

        $update = "UPDATE category
                    SET name = '$name'
                    WHERE id = $id";

        $pdo->query($update);

        $portInfo = $_SERVER["HTTP_HOST"];
            
        $pageToMove = "http://".$portInfo."/adminArticles.php?activityReq=viewCategory";
        header("Location: " . $pageToMove);

    }
        
?>