<?php
	
	session_start();
	require_once '../classes/Config.php';
	$config = new Config();

	if(isset($_SESSION['admin_username']) || isset($_SESSION['admin_email'])) {
		$config->redirect('./dashboard.php');
	}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Bryan Balaga | Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../assets/css/theme.css" />
    <link rel="stylesheet" href="../assets/css/template2.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../style.css"/>
</head>
<body data-spy="scroll" data-target="#navbar1" data-offset="60">
	<main>
	    <div class="container h-199">
	        <div class="row h-100">
	            <div class="col-12">
	                <div class="text-center m-0 vh-75 d-flex flex-column justify-content-center text-light">
	                    <h1 class="display-4">Bryan <span class="bg-primary" id="spanlogo">Balaga</span></h1>
	                    <p class="lead">Login</p>
	                    <form method="post" action="<?php echo htmlspecialchars($_SERVER['REQUEST_URI']); ?>" id="login-form">
	                    <div class="row">
                            <div class="col-lg-4 col-sm-6 mx-auto">
			                    <div class="alert alert-danger alert-dismissable show fade" role="alert" id="error">
									<button type="button" class="close" data-dismiss="alert" aria-label="Close">
										<span aria-hidden="true">×</span>
									</button>
								</div>
                            </div>
                        </div>
	                    <div class="row">
                            <div class="col-lg-4 col-sm-6 mx-auto">
                                <div class="form-group">
			                    	<input type="text" name="username" id="username" class="form-control" placeholder="Username or Email" required/>
			                    	<div id="username-error"></div>
			                    </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-sm-6 mx-auto">
                                <div class="form-group">
			                    	<input type="password" name="password" id="password" class="form-control" placeholder="Password" required/>
			                    	<div id="password-error"></div>
			                    </div>
                            </div>
                        </div>
	                    <div class="mt-1 mx-auto">
	                    	<input type="submit" class="btn btn-outline-light" id="login" name="login" value="Log in"/>
                        </div>
                    	</form>
                    	<div class="row">
                            <div class="col-lg-4 col-sm-6 mx-auto text-left">
                                <hr class="bg-primary">
                                <a class="text-light" href="./resetpassword.php">Forgot Password.</a><br>
                                <a class="text-primary" href="./register.php">Sign up.</a>
                            </div>
                        </div>
	                </div>
	            </div>
	        </div>
	    </div>
	</main>
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../assets/js/jquery.counterup.js"></script>
    <script type="text/javascript" src="../assets/js/waypoints.js"></script>
    <script type="text/javascript" src="../custom.js"></script>
</body>
</html>