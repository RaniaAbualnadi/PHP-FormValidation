<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <title>Document</title>
</head>
<body>

<h1>Register</h1>
<?php require_once 'message.php'; ?>
    <form action="signup.php" method="POST">
      Username: <input type="text" name="username" /><br />
      Email: <input type="text" name="email" /><br />
      Password: <input type="password" name="password" /><br />
      Confirm password: <input type="password" name="password_confirm" /><br />
      <input type="submit" value="Register" />
    </form>


</body>
</html>