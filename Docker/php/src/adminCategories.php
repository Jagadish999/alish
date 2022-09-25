<article>
    <?php
        $categoryAction;
        echo '<h2>'.$categoryAction.'</h2>';
        echo '<button><a href = "adminArticles.php?activityReq=addCategory">Add Category</a></button>';

        require 'dbConn.php';

        $query = "SELECT id, name FROM category";

        $categoryInfo = $pdo->query($query);

        echo '<table>
                <tr>
                    <th>Category Id</th>
                    <th>Category Name</th>
                </tr>';

        foreach($categoryInfo as $categoryRow){

            $tableInfo = '<tr>
                            <td>'.$categoryRow['id'].'</td>
                            <td>'.$categoryRow['name'].'</td>
                            <td><button><a href = "adminArticles.php?activityReq=editCategory&categoryEdit='.$categoryRow['id'].'">EDIT</a><button></td>
                            <td><button><a href = "deleteCategory.php?categoryDelete='.$categoryRow['id'].'">DELETE</a><button></td>
                          </tr>';

            echo $tableInfo;
        }
        echo '</table>';        
    ?>

</article>