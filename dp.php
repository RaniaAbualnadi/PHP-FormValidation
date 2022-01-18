
<?php
$servername = "localhost";
// $username = "raniaab";
// $password = "p@ssw0rdrania1993";
$username = "root";
$database = "store";
try {
    $conn = new PDO("mysql:host=$servername;dbname=$database", $username);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
  } catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
  }


?>

