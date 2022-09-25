<?php

    session_start();

    if(!isset($_SESSION['name'])){

        $portInfo = $_SERVER["HTTP_HOST"];
        $pageToMove = "http://".$portInfo;
    
        header("Location: " . $pageToMove);
    }
?>

<!--Page heading-->
<?php
    $pageTitle = "Admin Articles";
    $cssPath = "";

    require 'head.php';
?>

<!--Constant page title-->
<?php
    require 'heading.php';
?>

<!--Navigation menu for latest article and category-->
<?php
    require 'articleAndCategory.php';
?>

<!--Navigation menu for admin-->
<?php
    require 'navigationAdmin.php';
?>


<!--main page-->
<?php

    if(isset($_GET['activityReq'])){

        if($_GET['activityReq'] == 'addArticles'){
            require 'addArticleForm.php';
        }
        else if($_GET['activityReq'] == 'viewCategory'){
            $categoryAction = "Category Details";
            require 'adminCategories.php';
        }
        else if($_GET['activityReq'] == 'addCategory'){
            require 'addCategoryForm.php';
        }
        else if($_GET['activityReq'] == 'editCategory'){
            require 'editCategoryForm.php';
        }
        else if($_GET['activityReq'] == 'editArticle'){
            require 'editArticleForm.php';
        }
    }
    else{
        require 'adminViewArticles.php';
    }
?>

<!--footer-->
<?php
    require 'endFoot.php';
?>