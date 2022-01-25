<!-- form -->
<form method="post" action="<?php $_SERVER["PHP_SELF"]; ?>">
					<div class="modal-header">
						<h4 class="modal-title">Add Employee</h4>
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
							<input type="password" class="form-control" name="password" required>
						</div>
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
						<input type="submit" class="btn btn-success" value="Add" name='add'>
					</div>
					<?php

					if ($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['add']) {
						$email = $_POST['email'];
						$password = $_POST['password'];
						$username = $_POST['username'];

						//storing new user in database
						$sql = "INSERT INTO users (email,password,username)
	                     	VALUES ('$email','$password','$username')";
						// use exec() because no results are returned
						$conn->exec($sql);
						echo "New record created successfully";

					}


					?>
				</form>