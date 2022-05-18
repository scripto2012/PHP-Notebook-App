<?

$pdo = new PDO("mysql:host=localhost; dbname=9876207546", "9876207546", "jlbytuj,ydti");
$statement = $pdo->prepare("SELECT * FROM blocknot WHERE id=:id");
$statement->bindParam(":id", $_GET['id']);
$statement->execute();
$task = $statement->fetch(PDO::FETCH_ASSOC);

?>

<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Редактирование заметки</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Редактирование заметки</h1>
                    <form action="update.php?id=<?= $task['id']?>" method="post">
                        <div class="form-group">
                            <input type="text" name="title" class="form-control" value="<?= $task['title'];?>">
                        </div>
                        <div class="form-group">
                            <textarea name="content" class="form-control"><?= $task['content'];?></textarea>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-warning" type="submit">Сохранить изменения</button>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
  </body>
</html>