<?php

    require 'dbConn.php';

    $id = (int) $_GET['categoryDelete'];

    $article = "DELETE FROM article WHERE categoryId = $id";

    $delQuery = "DELETE FROM category WHERE id = $id ";

    $resultOfdel2 = $pdo->query($article);
    $resultOfdel1 = $pdo->query($delQuery);

    $portInfo = $_SERVER["HTTP_HOST"];
            
    $pageToMove = "http://".$portInfo."/adminArticles.php?activityReq=viewCategory";
    header("Location: " . $pageToMove);

?>