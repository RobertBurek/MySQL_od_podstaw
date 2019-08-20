<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog</title>
    <style>
        .post {
            margin-bottom: 10px;
        }
        .post-content {
            margin-top: 10px;
        }
    </style>
</head>
<body>
<h2>Najnowsze wpisy</h2>
    <?PHP
        $host = 'localhost:3307';
        $dbName = 'blog';
        $user = 'blogadmin';
        $password = 'blogadmin';

        $connection = new mysqli($host, $user, $password, $dbName);
        $postList = $connection->query("SELECT post_title, post_date, post_content FROM post ORDER BY post_date DESC");
        while($post = mysqli_fetch_array($postList)){
            echo '<article class="post">';
            echo '<h3>'.$post['post_title'].'</h3>';
            echo '<span>'.$post['post_date'].'</span>';
            echo '<div class="post-content">'.$post['post_content'].'</div>';
            echo '</article>';
        }
    ?>
    <?PHP
        if ( isset($_POST['add-post']) ) {
            $title = $_POST['title'];
            $content = $_POST['content'];
            $categoryId = $_POST['category_id'];
            print_r($title);
            print_r($content);
            print_r($categoryId);
        }
    ?>
<h2>Dodaj nowy wpis</h2>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <label for="title">Tytuł</label><br>
    <input type="text" id="title" name="title"><br>
    <label for="content">Treść wpisu</label><br>
    <textarea name="content" id="content" cols="30" rows="8"></textarea><br>
    <label for="category_id">ID kategorii</label><br>
    <input type="number" id="category_id" name="category_id"><br>
    <input type="submit" name="add-post" value="Dodaj artykuł">
</form>

</body>
</html>