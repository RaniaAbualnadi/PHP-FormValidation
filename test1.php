<?php
// Start the session
session_start();
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

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $email =($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
         echo "Invalid email format";
        }
        $flag = false;

    if (($_POST['password'] != $_POST['confirmpassword'])) {
        echo "passwords do not match! <br>";
        $flag == false;
    } else {
        $flag = true;
    }
    if (strlen($_POST['password']) < 8) {
        echo " Passwords need to be 8 characters or more";
        $flag == false;
    } else {
        $flag = true;
    }

    if ($flag == true) {
    
        // $_SESSION["email"] = $_POST['email'];
        // $_SESSION["password"] = $_POST['password'];

  
        //check array is set or not          // Start the session
        // $_SESSION['user']=array(); // Makes the session an array
         $email_name=$_POST['email']; //student_name form field name
         $password_number=$_POST['password'];   //city_id form field name

        // $useremail = ["email" =>  $email_name];
        // $userpassword = [ "password" =>$password_number];
	
        // array_push($_SESSION['user'],$useremail,$userpassword);   

		$_SESSION['user'][]= [
			'email' => $_POST['email'],
			'password' => $_POST['password']
		];

        print_r($_SESSION['user']);
	
        // var_dump($_SESSION['user']);
        header("Location: Login.php");
    } } 

  
    



?>

<div class="container">
			<div class="row main">
				<div class="panel-heading">
	               <div class="panel-title text-center">
	               		<h1 class="title">Register Form</h1>
	               		<hr />
	               	</div>
	            </div> 
				<div class="main-login main-center">
					<form class="form-horizontal" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" onsubmit="return validation()">
						
			

						<div class="form-group">
							<label for="email" class="cols-sm-2 control-label">Your Email</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="email" id="email"  placeholder="Enter your Email"/>
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

						<div class="form-group">
							<label for="confirm" class="cols-sm-2 control-label">Confirm Password</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<input type="password" class="form-control" name="confirmpassword" id="confirmpassword"  placeholder="Confirm your Password"/>
								</div>
							</div>
						</div>

						<div class="form-group ">
							<button type="submit" class="btn btn-primary btn-lg btn-block login-button" value="Register">Register</button>
						</div>
						<div class="login-register">
				            <a href="Login.php">Login</a>
				         </div>
					</form>
				</div>
			</div>
		</div>

		<script type="text/javascript" src="assets/js/bootstrap.js">
			
		</script>

<script> 

</script>
</body>
</html>