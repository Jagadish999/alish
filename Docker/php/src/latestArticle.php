<article>
    
	<h2>Recent 10 Articles Today</h2>

	<?php

        require 'dbConn.php';

        $query = "SELECT id, title, content, publishDate FROM article ORDER BY id DESC";
		
		$printedNum = 1;

        $articles = $pdo->query($query);

		foreach($articles as $row){

            echo '<h3><a class="articleLink"  href = "index.php?activityReq=fullArticle&id='.$row['id'].'">'.$row['title'] . '<br>' . $row['publishDate'] .'</a></h3>';

			$printedNum++;

			if($printedNum > 10){
				break;
			}
		}
	?> 

</article>

</main>