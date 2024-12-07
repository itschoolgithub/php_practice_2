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
                <h1>Редактирование новости №1</h1>
            </div>
        </div>
        <div class="row mb-2">
            <div class="col">
                <form>
                    <div class="mb-3">
                        <label for="title" class="form-label">
                            Название
                        </label>
                        <input type="text" class="form-control" id="title" name="title" value="Тайны древних цивилизаций: что мы знаем о Атлантиде?">
                    </div>
                    <div class="mb-3">
                        <label for="short" class="form-label">Краткое описание</label>
                        <textarea class="form-control" id="short" name="short" rows="3">Атлантида — одна из самых загадочных утопий древности. Мы расскажем о легендах, теориях и открытиях, которые могут пролить свет на местоположение и судьбу этой мифической цивилизации.</textarea>
                    </div> 
                    <div class="mb-3">
                        <label for="full" class="form-label">Текст</label>
                        <textarea class="form-control" id="full" name="full" rows="8">Атлантида — это не только миф, но и одна из самых захватывающих тем для археологов, историков и любителей загадок. Согласно Платону, эта могущественная цивилизация процветала более 11 тысяч лет назад, но исчезла в результате катастрофического события. В этой статье мы рассмотрим основные теории о местоположении Атлантиды, включая варианты, что она могла располагаться в Атлантическом океане, на территории Антарктиды или даже в Средиземном море. Мы также обсудим исторические и археологические находки, которые могли бы подтвердить существование древней цивилизации, а также мифы, которые окружают этот объект, и как они сформировались с течением времени. Существуют ли доказательства существования Атлантиды, или это всего лишь вымысел, который пережил века?</textarea>
                    </div> 
                    <div class="mb-3">
                        <a href="#" class="btn btn-outline-secondary">Назад</a>
                        <button class="btn btn-primary">Изменить</button>
                    </div> 
                </form>
            </div>
        </div>
    </div>
</body>
</html>