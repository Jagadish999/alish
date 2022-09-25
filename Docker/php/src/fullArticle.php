

<article>

	<?php

        $id = (int)$_GET['id'];

        require 'dbConn.php';

        $query = "SELECT id, title, content, publishDate FROM article WHERE id = $id";

        $articles = $pdo->query($query);

        foreach($articles as $row){
            echo '<h1>'.$row['title'].'</h1>';
            echo '<em>'.$row['publishDate'].'</em>';
            echo '<p>'.$row['content'].'</p>';
        }

	?> 

</article>