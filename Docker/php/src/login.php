<?php

    require 'dbConn.php';

    $name = $_POST['fullname'];
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $category = $_POST['usertype'];

    $query = "SELECT fullname from users WHERE email = '$email' AND password = '$pass'";

    $resultSet = $pdo->query($query);

    $res = false;

    foreach($resultSet as $row){

        if($row['fullname'] == $name){
            $res = true;
        }
    }
    $portInfo = $_SERVER["HTTP_HOST"];

    if($res == true){

        session_start();
        $_SESSION['name'] = $name;

        if($category == 'Admin'){
            
            $pageToMove = "http://".$portInfo . "/adminArticles.php";

            header("Location: " . $pageToMove);
        }
        else if($category == 'User'){

            $pageToMove = "http://".$portInfo . "/index.php";

            header("Location: " . $pageToMove);
        }
    }
    else{
        echo "invalid user name or password";
    }
?>