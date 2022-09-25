<article>
    
	<h2>Articles of specific category</h2>

	<?php

        require 'dbConn.php';

        $id = (int)$_GET['id'];

        $query = "SELECT id, title, content, publishDate FROM article WHERE categoryId = $id";

		$result = $pdo->query($query);

		foreach($result as $row){

            echo '<h3><a class="articleLink"  href = "index.php?activityReq=fullArticle&id='.$row['id'].'">'.$row['title'] . '<br>' . $row['publishDate'] .'</a></h3>' . '<br>';
		}
	?> 

</article>

</main>