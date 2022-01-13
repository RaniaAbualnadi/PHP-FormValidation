<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
session_start();
if (empty($_SESSION['messages'])){
    return;
}
$messages = $_SESSION['messages']; 
unset($_SESSION['messages']);
?>

<ul>
    <?php foreach ($messages as $message): ?> 
        <li> <?php echo $message; ?> </li>;
<?php endforeach; ?>
</ul>
</body>
</html>