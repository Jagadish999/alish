<?php
    
    $portInfo = $_SERVER["HTTP_HOST"];
    $pageToMove = "http://".$portInfo;

    header("Location: " . $pageToMove);

    session_destroy();
?>