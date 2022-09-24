<nav>
		<ul>
			<li><a href="#">Latest Articles</a></li>
			<li><a href="#">Select Category</a>
				<ul>

					<?php

                        require '../../databaseCon/dbConn.php';

						$query = "SELECT id, name FROM category";

                        $categoryInfo = $pdo->query($query);

						foreach($categoryInfo as $categoryRow){
							echo '<li><a href ="#">'.$categoryRow['name'] . '</a></li>';
						}
					?>
					

				</ul>
			</li>
		</ul>
	</nav>