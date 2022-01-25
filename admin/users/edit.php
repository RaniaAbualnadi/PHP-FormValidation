<form method="post" name="editForm" action="<?php $_SERVER["PHP_SELF"]; ?>">
    <div class="modal-header">
        <h4 class="modal-title">Edit Employee</h4>
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    </div>
    <div class="modal-body">
        <div class="form-group">
            <label>username</label>
            <input type="text" class="form-control" name="username" required>
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control" name="email" required>
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="text" class="form-control" name="password" required>
        </div>
    </div>
    <div class="modal-footer">
        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
        <input type="submit" class="btn btn-info" value="Save" name="edit_submit">
    </div>

</form>
<?php
$servername = "localhost";
$username = "root";
$database = "store";
    $conn = new PDO("mysql:host=$servername;dbname=$database", $username);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if($_SERVER["REQUEST_METHOD"]=="GET"){
	$value= $_GET["id"];
	$sql =$conn->prepare("SELECT * FROM users WHERE is_admin='0' AND id='$value'");
	$sql->execute();
	$data=$sql->fetch(PDO::FETCH_ASSOC);
	}
   
	if($_SERVER["REQUEST_METHOD"]=="POST"){
	   $value= $_GET["id"];
	   $username = $_POST['username'];
	   $email = $_POST['email'];
	   $password = $_POST['password'];
	   $sql =$conn->prepare("UPDATE users SET username='$username',email='$email',password='$password' WHERE id='$value'");
	   $sql->execute();
	 
	   header('http://localhost/PHP/formvalidation/admin/users/');
   
   }
?>
