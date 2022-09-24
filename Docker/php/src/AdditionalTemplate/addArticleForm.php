<article> 
	<h2>Add articles </h2>
		<form action="../../RequiredFiles/addArticle.php" method="POST" enctype="multipart/form-data">

			<label for="ArtTitle"> Article Title: </label>
			<input type="text" name = "articleTitle" id = "ArtTitle" required/>

			<label for="ArtContent"> Article content: </label>
			<textarea name="articleContent"  cols="30" rows="10" id="ArtContent" required></textarea>


			<label for="categoryType">Choose category: </label>
			<select name="articleCategoryId" id="categoryType">
				
					<?php
                        require '../../databaseCon/dbConn.php';

						$query = "SELECT id, name FROM category";

                        $categoryInfo = $pdo->query($query);

						foreach($categoryInfo as $categoryRow){
							echo '<option value="'.$categoryRow['id'].'">'.$categoryRow['name'].'</option>';
						
						}
					?>

			</select>

			<label for="image">Choose image: </label>
			<input type="file" name = "articleImage" id = "image" required/>

			<input type="submit" name="submitArticle" value="Submit Article" />
		</form>

</article>

<?php
	if(isset($_GET['error'])){

		if($_GET['error'] == 'imgSize'){
			echo '<p>Error in image please select another image.</p>';
		}
		else if($_GET['error'] == 'imgSizeError'){
			echo '<p>Too Large sized images</p>';
		}

		else if($_GET['error'] == 'imgExtError'){
			echo '<p>Image extension not supported</p>';
		}
	}
?>