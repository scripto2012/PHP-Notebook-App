<?

//Подключение
$pdo = new PDO("mysql:host=localhost; dbname=dbname", "username", "pass");

//Запись запроса
$sql = "INSERT INTO blocknot (title, content) VALUES (:title, :content)";

//Подготовка запроса к использованию с созданием меток :title, :content
$statement = $pdo->prepare($sql);

//Привязка полученных через $_POST данных к меткам с помощью bindParam по итогу не требуется так делать
//$statement->bindParam(":title", $_POST['title']);
//$statement->bindParam(":content", $_POST['content']);

//Выполнение запроса с передачей массива $_POST
$statement->execute($_POST);

header("Location: /notebook"); exit;

?>