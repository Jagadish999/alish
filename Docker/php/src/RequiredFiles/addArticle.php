<?php

    require '../databaseCon/dbConn.php';

    if(isset($_POST['submitArticle'])){

        $articleTitle = $_POST['articleTitle'];
        $articleContent = $_POST['articleContent'];
        $articleCategoryId = $_POST['articleCategoryId'];
        $currentDate = date("y-m-d");
        $currentTime = date("h:i:s");

        $dateAndTime = $currentDate . " " . $currentTime;

        /*Create table for article*/

        $articleTable = "CREATE TABLE IF NOT EXISTS article(
            id INT(5) NOT NULL auto_increment,
            title VARCHAR(255) NOT NULL,
            content VARCHAR(255) NOT NULL,
            categoryId INT(5) NOT NULL,
            publishDate DATETIME NOT NULL,
            imageName VARCHAR(255) NOT NULL, 
            PRIMARY KEY (id),
            FOREIGN KEY (categoryId) REFERENCES category(id)
            )";


        $articleId = "ALTER TABLE article AUTO_INCREMENT = 1";

        $pdo->query($articleTable);
        $pdo->query($articleId);
        

        /*code for image upload*/
        $imgDetails = $_FILES['articleImage'];

        $name = $imgDetails['name'];
        $tmp_name = $imgDetails['tmp_name'];
        $error = $imgDetails['error'];
        $size = $imgDetails['size'];

        $portInfo = $_SERVER["HTTP_HOST"];

        if($error === 0){

            $extension = strtolower(pathinfo($name, PATHINFO_EXTENSION));

            $extSupported = ['png','jpg','jpeg'];

            foreach($extSupported as $key){
                if($key == $extension){

                    $imgNewName = uniqid("Article-Img:", true) . '.' . $extension;
                    $imgPath = '../Admin/images/' . $imgNewName;

                    move_uploaded_file($tmp_name, $imgPath);
                    
                    $insertDataArticle = "INSERT INTO article(title, content, categoryId, publishDate, imageName)
                                   VALUES('$articleTitle', '$articleContent', '$articleCategoryId', '$dateAndTime', '$imgNewName')";

                    $insertedStatus = $pdo->query($insertDataArticle);

                    if($insertedStatus){
                        $pageToMove = "http://".$portInfo."/Admin/View/adminArticles.php";
                        header("Location: " . $pageToMove);
                        exit();
                        
                    }
                    
                }

                $pageToMove = "http://".$portInfo."/Admin/View/adminArticles.php?activityReq=addArticles&error=imgExtError";
                header("Location: " . $pageToMove);
            }
        }

        else{
            
            $pageToMove = "http://".$portInfo."/Admin/View/adminArticles.php?activityReq=addArticles&error=imgError";
            header("Location: " . $pageToMove);
        }
    }
?>