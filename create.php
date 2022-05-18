<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Новая заметка</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Создание новой заметки</h1>
                    <form action="store.php" method="post">
                        <div class="form-group">
                            <input type="text" class="form-control" name="title">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="content"></textarea>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-success" type="submit">Создать</button>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
  </body>
</html>