<?php
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
<div class="container">
			<div class="row main">
				<div class="panel-heading">
	               <div class="panel-title text-center">
	               		<h1 class="title">Login Form</h1>
	               		<hr />
	               	</div>
	            </div> 
				<div class="main-login main-center">
                    <?php  
                $x= $_SESSION['user'];   

                //    print_r($x[0]['email']);
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                   
    
                   $email_name=$_POST['email']; 
                   $password_number=$_POST['password'];   
				   foreach($_SESSION['user'] as $key => $val){

                   if($x[$key]['email'] === $email_name && $password_number ===$x[$key]['password'] )
                   {
                      header("Location: welcome.php");
                    print_r( 'logged in');

                   }
                   else{
                       print_r('not correct');
                   }
				   }





                //    if($x[0]['email'] === $email_name && $password_number ===$x[1]['password'] )
                //    {
                //       header("Location: welcome.php");
                //     print_r( 'logged in');

                //    }
                //    else{
                //        print_r('not correct');
                //    }
            //   print_r( $email_name);
            //        print_r($x[0]);
}              
                    ?> 
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