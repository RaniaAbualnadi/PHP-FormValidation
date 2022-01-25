<form method="post" action="<?php $_SERVER["PHP_SELF"]; ?>" >
				<form >
					<div class="modal-header">						
						<h4 class="modal-title">Edit Employee</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">					
						<div class="form-group">
							<label>Name</label>
							<input type="text" class="form-control" name="username" required>
						</div>
						<div class="form-group">
							<label>Email</label>
							<input type="email" class="form-control" name="email" required>
						</div>
						<div class="form-group">
							<label>Address</label>
							<textarea class="form-control" required></textarea>
						</div>
						<div class="form-group">
							<label>Phone</label>
							<input type="text" class="form-control" required>
						</div>					
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
						<input type="submit" class="btn btn-info" value="Save" name='edit'>
					</div>
				</form>
                <?php

if ($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['edit']) {

	$value=  $_POST['edit'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$username = $_POST['username'];
    $sql = "UPDATE users (email,password,username)
    VALUES ('$email','$password','$username') WHERE id=$value";
    // $sql = "UPDATE users SET username='$username', email='$email', password='$password'  WHERE id=$value";
    
    // Prepare statement
  $stmt = $conn->prepare($sql);

  // execute the query
  $stmt->execute();

  // echo a message to say the UPDATE succeeded
  echo $stmt->rowCount() . " records UPDATED successfully";
	
}

?>