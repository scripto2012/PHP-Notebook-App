<?

$data = [
    "id" => $_GET['id'],
    "title" => $_POST['title'],
    "content" => $_POST['content']
    ];

//Подключение
$pdo = new PDO("mysql:host=localhost; dbname=9876207546", "9876207546", "jlbytuj,ydti");

$sql = "UPDATE blocknot SET title=:title, content=:content WHERE id=:id";
$statement = $pdo->prepare($sql);
$statement->execute($data);

/*
$statement->bindParam(":id", $_POST['id']);
$statement->bindParam(":title", $_POST['title']);
$statement->bindParam(":content", $_POST['content']);
*/
header("Location: /blocknot"); 



?>