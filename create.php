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
                <h1>Создание новости</h1>
            </div>
        </div>
        <div class="row mb-2">
            <div class="col">
                <form>
                    <div class="mb-3">
                        <label for="title" class="form-label">
                            Название
                        </label>
                        <input type="text" class="form-control" id="title" name="title" >
                    </div>
                    <div class="mb-3">
                        <label for="short" class="form-label">Краткое описание</label>
                        <textarea class="form-control" id="short" name="short" rows="3"></textarea>
                    </div> 
                    <div class="mb-3">
                        <label for="full" class="form-label">Текст</label>
                        <textarea class="form-control" id="full" name="full" rows="8"></textarea>
                    </div> 
                    <div class="mb-3">
                        <a href="#" class="btn btn-outline-secondary">Назад</a>
                        <button class="btn btn-success">Создать</button>
                    </div> 
                </form>
            </div>
        </div>
    </div>
</body>
</html>