<?php

    require 'dbConn.php';

    if(isset($_POST['submitArticle'])){

        $articleTitle = $_POST['articleTitle'];
        $articleContent = $_POST['articleContent'];
        $articleCategoryId = $_POST['articleCategoryId'];
        $currentDate = date("y-m-d");
        $currentTime = date("h:i:s");

        $dateAndTime = $currentDate . " " . $currentTime;
        
        $insertDataArticle = "INSERT INTO article(title, content, categoryId, publishDate)
        VALUES('$articleTitle', '$articleContent', '$articleCategoryId', '$dateAndTime')";

        $insertedStatus = $pdo->query($insertDataArticle);

        $portInfo = $_SERVER["HTTP_HOST"];

        if($insertedStatus){
        $pageToMove = "http://".$portInfo."/adminArticles.php";
        header("Location: " . $pageToMove);
        exit();

        }

        else{
            $pageToMove = "http://".$portInfo."/adminArticles.php?activityReq=addArticles&error=imgError";
            header("Location: " . $pageToMove);
        }
    }
?>