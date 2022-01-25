<form method="post" action="<?php $_SERVER["PHP_SELF"]; ?>">
					<div class="modal-header">						
						<h4 class="modal-title">Delete Employee</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">					
						<p>Are you sure you want to delete these Records?</p>
						<p class="text-warning"><small>This action cannot be undone.</small></p>
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel" >
						<input type="submit" class="btn btn-danger" value="delete"   >
					</div>
					<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['delete'] ) {

	$value=  $_POST['delete'];


	//storing new user in database
	$sql = "DELETE FROM users WHERE id=$value";
	print_r($sql);
	$conn->exec($sql);
	echo "Record deleted successfully";
	
}

?>
				</form>