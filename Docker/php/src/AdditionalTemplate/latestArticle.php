<article>
    
	<h2>Recent 10 Articles Today</h2>

	<?php

        require 'databaseCon/dbConn.php';

        $query = "SELECT id, title, content, publishDate, imageName FROM article ORDER BY id DESC";
		
		$printedNum = 1;

        $articles = $pdo->query($query);

		foreach($articles as $row){

            echo '<h3><a href = "#">'.$row['title'] . '<br>' . $row['publishDate'] .'</a></h3>';
            echo '<img src = "http://localhost:7000/Admin/images"'.$row['imageName'].'" alt="'.$row['imageName'].'" width="500" height="600">';

			$printedNum++;

			if($printedNum > 10){
				break;
			}
		}
	?> 

</article>

</main>