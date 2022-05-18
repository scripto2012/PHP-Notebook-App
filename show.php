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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
  <div class="row">
    <div class="col-md-12">
        <h1><?= $task['title']; ?></h1>
        <p><?= $task['content']; ?></p>
   
      <button class="btn"><a href="/notebook/">Вернуться назад</a></button>
    </div>
  </div>
</div>
</body>
</html>




