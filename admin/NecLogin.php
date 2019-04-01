<?php
session_start();
?>
<html>
  <head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href="/admincss/neclogin.css" rel="stylesheet">
<!------ Include the above in your HEAD tag ---------->
  </head>
<body id="LoginForm">
<div class="container">
<h1 class="form-heading">login Form</h1>
<div class="login-form">
<div class="main-div">
    <div class="panel">
   <h2>Admin Login</h2>
   <p>Please enter your username and password</p>
   </div>
    <form action="" method="post" id="Login">

        <div class="form-group">


            <input type="text" class="form-control" id="inputUsername" name="loginUsername" placeholder="Username">

        </div>

        <div class="form-group">

            <input type="password" class="form-control" id="inputPassword" name="loginPassword" placeholder="Password">

        </div>
        <div class="forgot">
       <!--  <a href="reset.html">Forgot password?</a> -->
</div>
        <!-- <button type="submit" class="btn btn-primary">Login</button> -->
        <input type="submit" name="btnLogin" class="btn btn-primary">
    </form>
    </div>
</div></div></div>


</body>
</html>
<?php
include("connectionString.php");
if (isset($_POST['btnLogin'])) 
{
	$varcharEmail = mysqli_real_escape_string($connect, $_POST['loginUsername']);
	$varcharPassword = mysqli_real_escape_string($connect, $_POST['loginPassword']);
	$queryAccount = "SELECT * FROM tbl_adminaccount WHERE adminUsername LIKE '$varcharEmail' AND adminPassword LIKE '$varcharPassword' ";
	$resultAccount = mysqli_query($connect, $queryAccount);

	while($res = mysqli_fetch_array($resultAccount)) 
	{
		$varcharAdminID = $res['adminID'];
	}
	if (mysqli_num_rows($resultAccount) == 1) 
	{
		$_SESSION['sessionAdminID'] = $varcharAdminID;
		$_SESSION['loggedin'] = "yes";
		$message = "Successfully Logged In";
		echo "<script type='text/javascript'>alert('$message');</script>";
		echo "<script type='text/javascript'>location.href = 'NecDashboard.php';</script>";
	}
	else 
	{
		$message = "No account matches the given information";
		echo "<script type='text/javascript'>alert('$message');</script>";
	}
}
?>
