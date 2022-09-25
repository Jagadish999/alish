<article> 
	<h2>Add articles </h2>
		<form action="addArticle.php" method="POST" enctype="multipart/form-data">

			<label for="ArtTitle"> Article Title: </label>
			<input type="text" name = "articleTitle" id = "ArtTitle" required/>

			<label for="ArtContent"> Article content: </label>
			<textarea name="articleContent"  cols="30" rows="10" id="ArtContent" required></textarea>


			<label for="categoryType">Choose category: </label>
			<select name="articleCategoryId" id="categoryType">
				
					<?php
                        require 'dbConn.php';

						$query = "SELECT id, name FROM category";

                        $categoryInfo = $pdo->query($query);

						foreach($categoryInfo as $categoryRow){
							echo '<option value="'.$categoryRow['id'].'">'.$categoryRow['name'].'</option>';
						
						}
					?>

			</select>

			<input type="submit" name="submitArticle" value="Submit Article" />
		</form>

</article>