<?php
    require 'dbConn.php';

    $id = (int) $_GET['deleteArticle'];

    $articleDel = "DELETE FROM article WHERE id = $id";

    $resultOfdel2 = $pdo->query($articleDel);

    $portInfo = $_SERVER["HTTP_HOST"];
            
    $pageToMove = "http://".$portInfo."/adminArticles.php";
    header("Location: " . $pageToMove);
?>