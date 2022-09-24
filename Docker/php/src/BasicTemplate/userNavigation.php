<main>
<nav>
<ul>
    <?php
        if(isset($_SESSION['username'])){
            echo '<li><a href="index.php?activityReq=logout">Log Out</a></li>';


        }
        else{
            echo '<li><a href="index.php?activityReq=registration">Registration</a></li>';
            echo '<li><a href="index.php?activityReq=login">Log In</a></li>';
        }
    
    ?>


    
</ul>
</nav>