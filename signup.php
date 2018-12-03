<?php
include("include.php");
?>
<?php
if(isset($_POST['insert'])){

$username=$_POST['name'];
$email=$_POST['email'];
$pwd=$_POST['pwd'];

/*insert query*/
$sql="INSERT INTO regis (name,email,pwd) VALUES('$username','$email','$pwd')";
if($con->query($sql)==TRUE){
echo "<script> alert('You has successfully Done.')</script>";
header("location:login.php");
}
else{
	echo "please register correctly";
}
/*insert query*/

}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
	 crossorigin="anonymous">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="stylesheet" href="css/style.css" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
	<title>Registration Form</title>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<style type="text/css">
		/* bannerindex page */

    .bgimage {
        width: 100%;
        height: 660px;
        background: url("img/n1.jpg");
        background-repeat: no-repeat;
        background-position: center;
        background-size: cover;
        background-attachment: fixed;
    }

    .bgimage h5 {
        color: #fff;
        text-shadow: 1px 1px #333;
    }

    /* banner end */
		body {
			color: #fff;
			background: #f5f5f5;
			font-family: 'Roboto', sans-serif;
		}

		.form-control {
			height: 40px;
			box-shadow: none;
			color: #969fa4;
		}

		.form-control:focus {
			border-color: #5cb85c;
		}

		.form-control,
		.btn {
			border-radius: 3px;
		}

		.signup-form {
			width: 300px;
			margin: 0 auto;
			padding: 30px 0;
		}

		.signup-form h2 {
			color: #636363;
			margin: 0 0 15px;
			position: relative;
			text-align: center;
		}

		.signup-form h2:before,
		.signup-form h2:after {
			content: "";
			height: 2px;
			width: 30%;
			background: #d4d4d4;
			position: absolute;
			top: 50%;
			z-index: 2;
		}

		.signup-form h2:before {
			left: 0;
		}

		.signup-form h2:after {
			right: 0;
		}

		.signup-form .hint-text {
			color: #999;
			margin-bottom: 30px;
			text-align: center;
		}

		.signup-form form {
			color: #999;
			border-radius: 3px;
			margin-bottom: 15px;
			background: #f2f3f7;
			box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
			padding: 30px;
		}

		.signup-form .form-group {
			margin-bottom: 20px;
		}

		.signup-form input[type="checkbox"] {
			margin-top: 3px;
		}

		.signup-form .btn {
			font-size: 16px;
			font-weight: bold;
			min-width: 140px;
			outline: none !important;
		}

		.signup-form .row div:first-child {
			padding-right: 10px;
		}

		.signup-form .row div:last-child {
			padding-left: 10px;
		}

		.signup-form a {
			color: #fff;
			text-decoration: underline;
		}

		.signup-form a:hover {
			text-decoration: none;
		}

		.signup-form form a {
			color: #5cb85c;
			text-decoration: none;
		}

		.signup-form form a:hover {
			text-decoration: underline;
		}
	</style>
</head>

<body>
	   <!-- Fixed navbar -->
	   <nav class="navbar navbar-default navbar-fixed-top" style="background: #fff;color:#000000;">
        <div class="container">
            <div class="navbar-header">
               
                <a class="navbar-brand" href="index.php">Urban Clap</a>
            </div>
            
            <!--/.nav-collapse -->
        </div>
    </nav>

    <!-- navend -->
    <section class="bgimage">
        <div class="container-fluid">
	

	<div class="signup-form">

		<form action="signup.php" method="POST">
			<div class="col-sm-12">
				<a class="close" href="index.php">×</a>
			</div>
			<br>
			<h2>Register</h2>
			<p class="hint-text">Create your account. It's free and only takes a minute.</p>
			<div class="form-group">
				<div class="row">
					<div><input type="text" class="form-control" name="name" placeholder="Name" required="required"></div>
				</div>
			</div>
			<div class="form-group">
				<input type="email" class="form-control" name="email" placeholder="Email" required="required">
			</div>
			<div class="form-group">
				<input type="password" class="form-control" id="pwd" name="pwd" placeholder="Password" required="required">
			</div>
			<div class="form-group">
				<input type="password" class="form-control" id="cpwd" name="cpwd" placeholder="Confirm-password" required="required">
			</div>
			<div class="form-group">
				<button type="submit" name="insert" id="btnSubmit" class="btn btn-success btn-lg btn-block" onclick="myFunction()">Register Now</button>
			</div>
		</form>
		
		<div class="text-center">Already have an account? <a href="login.php">Sign in</a></div>
	</div>
	</div>
	
	</section>
	
    <script>
function myFunction() {
    alert("Hello! You are Success Fully Login Your Account!");
}
</script>
	<!--script for password and confirm password-->
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	<script type="text/javascript">
		$(function () {
			$("#btnSubmit").click(function () {
				var password = $("#pwd").val();
				var confirmPassword = $("#cpwd").val();
				if (password != confirmPassword) {
					alert("Passwords do not match.");
					return false;
				}
				return true;
			});
		});

	</script>
	<!--end password and confirm  password script-->

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
	 crossorigin="anonymous"></script>
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
</body>

</html>