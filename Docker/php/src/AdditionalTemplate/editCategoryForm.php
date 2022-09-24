<article>

    <h2>Edit Category</h2>
    <form action="../../RequiredFiles/editCategory.php" method="POST">

        <label for="CategoryName"> Category You Selected: </label>
        
            <?php
                require '../../databaseCon/dbConn.php';

                $id = (int) $_GET['categoryEdit'];

                $query = "SELECT name FROM category WHERE id = $id";

                $categoryInfo = $pdo->query($query);

                foreach($categoryInfo as $row){
                    $selected = $row['name'];
                }

                $opt = '<select name="oldCategory" id="oldCategory">
                            <option value="'.$id.'">'.$selected.'</option>
                        </select>';
                echo $opt;
            ?>
            
        

        <label for="CategoryName">  Edit Category name: </label>
        <input type="text" name = "newCategoryName" id = "CategoryName" required/>

        <input type="submit" name="editCategorySubmit" value="Edit Category" />
    </form>


</article>

