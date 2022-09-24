<article>
    <?php
        echo '<h2>List of all articles</h2>';

        require '../../databaseCon/dbConn.php';

        $query = "SELECT id, title FROM article";

        $articleInfo = $pdo->query($query);

        echo '<table>
                <tr>
                    <th>Article id</th>
                    <th>Article Title</th>
                </tr>';

        foreach($articleInfo as $articleRow){

            $tableInfo = '<tr>
                            <td>'.$articleRow['id'].'</td>
                            <td>'.$articleRow['title'].'</td>
                            <td><button><a href = "adminArticles.php?activityReq=editArticle&articleEdit='.$articleRow['id'].'">EDIT</a><button></td>
                            <td><button><a href = "../../RequiredFiles/deleteArticle.php?deleteArticle='.$articleRow['id'].'">DELETE</a><button></td>
                          </tr>';

            echo $tableInfo;
        }
        echo '</table>';        
    ?>

</article>