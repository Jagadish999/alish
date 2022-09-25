<article> 

    <h2>Update Article Information</h2>

    <form action="editArticle.php" method="POST">
        
        <p>Edit Article: </p>

        <?php

            require 'dbConn.php';

            $id = (int) $_GET['articleEdit'];

            $query = "SELECT title, content FROM article WHERE id = $id";

            $articleInfo = $pdo->query($query);

            foreach($articleInfo as $row){
                $title = $row['title'];
                $content = $row['content'];
            }

            echo '<label for="title">Edit Article: </label>';
            echo '<input type="text" name = "titleArticle" id = "title" value = "'.$title.'" required/>';

            echo '<label for="content">Article Content: </label>';
            echo '<textarea name="contentArticle" id="content" cols="30" rows="10" required>'.$content.'</textarea>';

            echo '<input type="hidden" name = "id" value = "'.$id.'">';
        ?>
        

        <input type="submit" name="editArticleSubmit" value="EDIT" />
    </form>



</article>