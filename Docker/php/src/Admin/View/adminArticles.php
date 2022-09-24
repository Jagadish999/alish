<?php
    session_start();
?>

<!--Page heading-->
<?php
    $pageTitle = "Admin Articles";
    $cssPath = "../../";

    require '../../BasicTemplate/head.php';
?>

<!--Constant page title-->
<?php
    require '../../BasicTemplate/heading.php';
?>

<!--Navigation menu for latest article and category-->
<?php
    require '../../BasicTemplate/articleAndCategory.php';
?>

<!--Navigation menu for admin-->
<?php
    require '../../AdditionalTemplate/navigationAdmin.php';
?>


<!--main page-->
<?php

    if(isset($_GET['activityReq'])){

        if($_GET['activityReq'] == 'addArticles'){
            require '../../AdditionalTemplate/addArticleForm.php';
        }
        else if($_GET['activityReq'] == 'viewCategory'){
            $categoryAction = "Category Details";
            require '../../AdditionalTemplate/adminCategories.php';
        }
        else if($_GET['activityReq'] == 'addCategory'){
            require '../../AdditionalTemplate/addCategoryForm.php';
        }
        else if($_GET['activityReq'] == 'editCategory'){
            require '../../AdditionalTemplate/editCategoryForm.php';
        }
        else if($_GET['activityReq'] == 'editArticle'){
            require '../../AdditionalTemplate/editArticleForm.php';
        }
    }
    else{
        require '../../AdditionalTemplate/adminViewArticles.php';
    }
?>

<!--footer-->
<?php
    require '../../BasicTemplate/endFoot.php';
?>

<?php
    session_destroy();
?>