<?php
    require_once "functions.php";
    $connection = DBConnect();
    $sql = "SELECT * FROM news WHERE id = ?";
    $result = $connection->prepare($sql);
    $result->execute([$_GET['id']]);
    $article = $result->fetch();
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
                <h1><?php echo $article['title'] ?></h1>
            </div>
        </div>
        <div class="row mb-2">
            <div class="col">
                <div class="card mb-2">
                    <div class="card-body">
                        <div class="text-secondary"><?php echo $article['time'] ?></div>
                        <p class="card-text">
                            <?php echo $article['full'] ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mb-2">
            <div class="col">
                <a href="index.php" class="btn btn-outline-secondary">Назад</a>
            </div>
        </div>
    </div>
</body>
</html>