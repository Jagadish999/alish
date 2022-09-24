<nav>
		<ul>
			<li><a href="index.php">Latest Articles</a></li>
			<li><a href="#">Select Category</a>
				<ul>

					<?php

                        require 'databaseCon/dbConn.php';

						$query = "SELECT id, name FROM category";

                        $categoryInfo = $pdo->query($query);

						foreach($categoryInfo as $categoryRow){
							echo '<li><a href ="index.php?activityReq=viewSelectedArticel&id='.$categoryRow['id'].'">'.$categoryRow['name'] . '</a></li>';
						}
					?>
					

				</ul>
			</li>
		</ul>
	</nav>