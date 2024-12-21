<?php
    require_once "functions.php";
    $connection = DBConnect();
    $sql = "SELECT * FROM news";
    $result = $connection->query($sql);
    $articles = $result->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container py-2">
        <div class="row mb-2">
            <div class="col">
                <h1>Новости</h1>
            </div>
        </div>
        <div class="row mb-2">
            <div class="col">
                <?php foreach ($articles as $article) : ?>
                    <div class="card mb-2">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $article['title'] ?></h5>
                            <p class="card-text">
                                <?php echo $article['short'] ?>
                            </p>
                            <div class="text-secondary"><?php echo $article['time'] ?></div>
                        </div>
                        <div class="card-footer">
                            <a href="article.php?id=<?php echo $article['id'] ?>" class="btn btn-primary">Подробнее</a>
                            <a href="#" class="btn btn-warning">Изменить</a>
                            <a href="#" class="btn btn-outline-danger">Удалить</a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="row mb-2">
            <div class="col">
                <a href="" class="btn btn-success">Добавить новость</a>
            </div>
        </div>
    </div>
</body>
</html>