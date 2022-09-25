<main>
<nav>
<ul>
    <?php

        if(isset($_SESSION['name'])){
            echo '<li><a href="logout.php">Log Out</a></li>';

        }
        else{
            echo '<li><a href="index.php?activityReq=registration">Registration</a></li>';
            echo '<li><a href="index.php?activityReq=login">Log In</a></li>';
        }
    
    ?>


    
</ul>
</nav>