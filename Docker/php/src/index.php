<?php
    session_start();
    
?>

<!--Page heading-->
<?php
    $pageTitle = "Admin Articles";
    $cssPath = "";

    require 'BasicTemplate/head.php';
?>

<!--Constant page title-->
<?php
    require 'BasicTemplate/heading.php';
?>

<!--Navigation menu for latest article and category-->
<?php
    require 'BasicTemplate/userViewArticle.php';
?>

<!--Navigation for user activities-->
<?php
    require 'BasicTemplate/userNavigation.php';
?>

<?php

    if(isset($_GET['activityReq'])){
        if($_GET['activityReq'] == 'registration'){

            require 'AdditionalTemplate/registerForm.php';
        }
        else if($_GET['activityReq'] == 'login'){

            require 'AdditionalTemplate/loginForm.php';
        }
        else if($_GET['activityReq'] == 'viewSelectedArticel'){
            require 'AdditionalTemplate/categoryArticle.php';
        }

    }
    else{
        require 'AdditionalTemplate/latestArticle.php';
    }

    
?>



<!--footer-->
<?php
    require 'BasicTemplate/endFoot.php';
?>


<a href="Admin/View/adminArticles.php">Admin Articles</a>


<?php
    session_destroy();
?>