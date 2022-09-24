<?php

    require '../databaseCon/dbConn.php';

    $name = $_POST['fullname'];
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $category = $_POST['usertype'];

    $query = "SELECT email from users WHERE fullname = '$name' AND email = '$email' AND password = '$pass'";

    if($name == 'admin'){
        $portInfo = $_SERVER["HTTP_HOST"];
        $pageToMove = "http://".$portInfo . "/Admin/View/adminArticles.php";

        header("Location: " . $pageToMove);
        exit();
    }
    else{

        
    if($pdo->query($query)){

        $_SESSION['username'] = $name;

        

        $portInfo = $_SERVER["HTTP_HOST"];
        $pageToMove = "http://".$portInfo . "/index.php";
    
        header("Location: " . $pageToMove);
    }
    else{
        echo "not found";
    }

    }



?>