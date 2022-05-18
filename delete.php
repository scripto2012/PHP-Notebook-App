<?

$pdo = new PDO("mysql:host=localhost; dbname=dbname", "username", "pass");
$statement = $pdo->prepare("DELETE FROM blocknot WHERE id=:id");
$statement->bindParam(":id", $_GET['id']);
$statement->execute();
header("Location: /notebook");


?>