<?

$pdo = new PDO("mysql:host=localhost; dbname=9876207546", "9876207546", "jlbytuj,ydti");
$statement = $pdo->prepare("DELETE FROM blocknot WHERE id=:id");
$statement->bindParam(":id", $_GET['id']);
$statement->execute();
header("Location: /blocknot"); 


?>