<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog</title>
    <style>
        .post {
            margin-bottom: 50px;
        }
        .post-content {
            margin-top: 30px;
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
        print_r($connection);
    ?>
<h2>Dodaj nowy wpis</h2>
<form action="" method="post">
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