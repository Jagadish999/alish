<?php

session_start();

?>

<!--Page heading-->
<?php
    $pageTitle = "View Articles";
    $cssPath = "";

    require 'head.php';
?>

<!--Constant page title-->
<?php
    require 'heading.php';
?>

<!--Navigation menu for latest article and category-->
<?php
    require 'userViewArticle.php';
?>

<!--Navigation for user activities-->
<?php
    require 'userNavigation.php';
?>

<?php

    if(isset($_GET['activityReq'])){
        if($_GET['activityReq'] == 'registration'){

            require 'registerForm.php';
        }
        else if($_GET['activityReq'] == 'login'){

            require 'loginForm.php';
        }
        else if($_GET['activityReq'] == 'viewSelectedArticel'){
            require 'categoryArticle.php';
        }
        else if($_GET['activityReq'] == 'fullArticle'){
            require 'fullArticle.php';
        }
    }
    else{
        require 'latestArticle.php';
    }

    
?>


<!--footer-->
<?php
    require 'endFoot.php';
?>