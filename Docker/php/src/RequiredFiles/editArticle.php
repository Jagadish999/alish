<?php

    require '../databaseCon/dbConn.php';

    $id = $_POST['id'];

    $title = $_POST['titleArticle'];

    $content = $_POST['contentArticle'];

    $articleUpdate = "UPDATE article
        SET title = '$title', content = '$content'
        WHERE id = $id";


    if($pdo->query($articleUpdate)){

        $portInfo = $_SERVER["HTTP_HOST"];
            
        $pageToMove = "http://".$portInfo."/Admin/View/adminArticles.php";
        header("Location: " . $pageToMove);
    }

?>