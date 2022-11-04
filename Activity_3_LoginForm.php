<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/loginform.css">
	<title>Log-in Form</title>
</head>
<body id="particles-js">
	<?php
		$error_message = 'invalid';

		if (isset($_POST['btnlogin'])) {
			$username = $_POST['Username'];
			$password = $_POST['Password'];

			if ($_POST['userType'] == 'admin') {
				if (($username == 'admin' AND $password == 'Pass1234') OR ($username == 'renmark' AND $password == 'Pogi1234')) {
					$error_message = 'success';
				}
			}elseif ($_POST['userType'] == 'contentmanager') {
				if (($username == 'pepito' AND $password == 'manaloto') OR ($username == 'juan' AND $password == 'delacruz')) {
					$error_message = 'success';
				}

			}elseif($_POST['userType'] == 'systemuser'){
				if ($username == 'pedro' AND $password == 'penduko'){
					$error_message = 'success';
				}
			}
		}
	  ?>


<div class="animated bounceInDown">
	<div class="center">
		<?php
			if (isset($_POST['btnlogin'])) {
				if ($error_message =='success') {

					echo '<div class="alert alert-success alert-dismissible"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><b>Welcome to the System: '. $username .' </b></div>';

				} elseif ($error_message =='invalid') {

					echo '<div class="alert alert-danger alert-dismissible"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><center><b>Invalid Username / Password</b></center></div>';

				}
			}
		 ?>
		<br>
	</div>
  <div class="container" style="margin-top: 70px;  ">
  	
  	<div style=""></div>
    <form method="post" name="login" id="login" class="box" onsubmit="return checkStuff()">
      <h4>Admin<span>Dashboard</span></h4>
      <h5>Sign in to your account.</h5>
	    	<select name="userType" class="form-control">
	    		<option value="admin">Admin</option>
	    		<option value="contentmanager">Content Manager</option>
	    		<option value="systemuser">System User</option>
	    	</select>


      	<input type="text" name="Username" placeholder="User Name" autocomplete="off">
        <input type="password" name="Password" placeholder="Passsword" id="pwd" autocomplete="off">
        <input type="submit" name="btnlogin" value="Sign in" class="btn1">


      </form>
        
  </div>
</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>