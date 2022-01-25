
<?php
$servername = "localhost";
$username = "root";
$database = "store";
    $conn = new PDO("mysql:host=$servername;dbname=$database", $username);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if ($_SERVER["REQUEST_METHOD"]=="GET") {
	$value= $_GET["id"];
    $sql = "DELETE FROM products WHERE id=$value";
    $conn->exec($sql);
    echo "Record deleted successfully";
	header ('location: http://localhost/PHP/formvalidation/admin/products/');
}



?>