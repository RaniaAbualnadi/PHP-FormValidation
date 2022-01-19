<?php
session_start();
include "dp.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
<body>

<?php
$msg="";
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
	
	$email=$_POST['email'];
	$password=$_POST['password'];
		   try{
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				if(empty($email) || empty($password) ){
					$msg="<label>All Field Required!!</label>";
				}
				else{
					$query="SELECT * FROM users WHERE password='$password' AND email='$email'";
					$stmt = $conn->prepare($query);
					$stmt->execute();
					$count=$stmt->rowCount();
					$admin=$conn->prepare("SELECT * FROM users WHERE password='$password' AND email='$email' AND is_admin=1");
				
					$admin->execute();
				
					if($admin->rowCount()>0){
					
						header("Location: admin");
					}
					else if($count>0){
							$_SESSION['username']=$email;
							header("Location: welcome.php");
						  }
					else {
						$msg="<label>Username or password are wrong!!</label>";
					}
				}
		  } catch(PDOException $e) {
			echo "Error: " . $e->getMessage();
		  }


}


?>

<div class="container">
			<div class="row main">
				<div class="panel-heading">
	               <div class="panel-title text-center">
	               		<h1 class="title">Login Form</h1>
	               		<hr />
	               	</div>
	            </div> 
				<div class="main-login main-center">
					
                 
					<form class="form-horizontal" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
						
			

						<div class="form-group">
							<label for="email" class="cols-sm-2 control-label">Your Email</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="email" id="email"  placeholder="Enter your Email" 
                                    
                                 />
								</div>
							</div>
						</div>

	

						<div class="form-group">
							<label for="password" class="cols-sm-2 control-label">Password</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<input type="password" class="form-control" name="password" id="password"  placeholder="Enter your Password"/>
								</div>
							</div>
						</div>

	

						<div class="form-group ">
							<button type="submit" class="btn btn-primary btn-lg btn-block login-button" value="Login">Login</button>
						</div>
						<div class="login-register">
				            <a href="test1.php">Register</a>
				         </div>
					</form>
				</div>
			</div>
		</div>

		<script type="text/javascript" src="assets/js/bootstrap.js"></script>
</body>
</html>