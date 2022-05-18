<?php

$pdo = new PDO("mysql:host=localhost; dbname=dbname", "username", "pass");
$statement = $pdo->prepare("SELECT * FROM blocknot");
$statement->execute();
$tasks = $statement->fetchall(PDO::FETCH_ASSOC);


?>




<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Блокнот</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="header col-md-12">
                        <h1>Заметки</h1>
                        <a href="/notebook/create.php" class="btn btn-success"><i class="fa fa-plus"></i></a>
                    </div>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>№</th>
                                <th>Название</th>
                                <th>Действие</th>
                            </tr>
                        </thead>
                        
                        <tbody>
                            <?php foreach($tasks as $task):?>
                            <tr>
                                <td><?= $task['id']; ?></td>
                                <td><?= $task['title']; ?></td>
                                <td>
                                    <a href="/notebook/show.php?id=<?=$task['id'];?>" class="btn btn-info"><i class="fa fa-eye"></i></a>
                                    <a href="/notebook/edit.php?id=<?=$task['id'];?>" class="btn btn-warning"><i class="fa fa-pencil"></i></a>
                                    <a href="/notebook/delete.php?id=<?=$task['id'];?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                            <?php endforeach;?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
  
      
      
  </body>
</html>