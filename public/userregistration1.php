<?php
	session_start();

	include 'database.php';

	$conn = mysqli_connect($servername, $username, $password, $dbname);
	$query2 = "SELECT * FROM user ORDER BY app_id DESC LIMIT 1";
    $result2 = mysqli_query($conn,$query2);
	if (mysqli_num_rows($result2) == 0) { 
		$applicant_id = "APP1";
	}
	else {
		$row = mysqli_fetch_array($result2);
    	$last_id = $row['app_id'];
		$applicant_id = substr($last_id, 3);
        $applicant_id = intval($applicant_id);
        $applicant_id = "APP" . ($applicant_id + 1);
	}
	if (isset($_POST['next'])) {
		foreach ($_POST as $key => $value)
		{
			$_SESSION ['info'][$key] = $value;
		}

		$keys = array_keys($_SESSION['info']);

		if (in_array('next', $keys)) {
			unset($_SESSION['info']['next']);
		}

		header("Location: userregistration2.php");
		
	}

	
?>
<!DOCTYpE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Registration Step 1</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
		
		<style>
			h3{
				color:#64b5f6;
				font-weight: bold;
				text-transform: uppercase;
			}
			
			.material-icons{
				color: #03a9f4;
			}

			.step{
				font-weight: bold;
			}

			.card-panel{
				margin-top: 35px;
			}
		</style>
</head>
<body>
	<div class="row">
		<div class="col l3 m5 s12"></div>
			<div class="col l6 m6 s12">
				<form action="" method="POST">
					<div class="card-panel z-depth-5">
						<a href="./"><h3 class="center reg">UBRA</h3></a>
						<p class="center">Register Now!</p>
						<p class="step center">Step 1 - Account</p>

						<div class="input-field col s12">
							<input type="hidden" name="app_id" id="app_id" class="validate" value="<?php echo $applicant_id; ?>" placeholder="Applicant ID" readonly>
						</div>

						<div class="input-field col s12 m4">
							<input type="text" name="fname" class="validate" value="<?= isset($_SESSION['info']['fname']) ? $_SESSION ['info']['fname'] : ''?>" placeholder="">
							<label for="fname">First Name</label>
						</div>
						
						<div class="input-field col s12 m4">
							<input type="text" name="mname" class="validate" value="<?= isset($_SESSION['info']['mname']) ? $_SESSION ['info']['mname'] : ''?>" placeholder="">
							<label for="mname">Middle Name</label>
						</div>

						<div class="input-field col s12 m4">
							<input type="text" name="lname" class="validate" value="<?= isset($_SESSION['info']['lname']) ? $_SESSION ['info']['lname'] : ''?>" placeholder="">
							<label for="lname">Last Name</label>
						</div>
						
						<div class="input-field col s12 m12">
							<input type="email" name="email" class="validate" value="<?= isset($_SESSION['info']['email']) ? $_SESSION ['info']['email'] : ''?>" placeholder="">
							<label for="email">Email Address</label>
						</div>
						
						<div class="input-field col s12 m4">
							<input type="text" name="uname" class="validate" value="<?= isset($_SESSION['info']['uname']) ? $_SESSION ['info']['uname'] : ''?>" placeholder="">
							<label for="uname">User Name</label>
						</div>
		  
						<div class="input-field col s12 m4">
							<input type="password" name="pass1" value="<?= isset($_SESSION['info']['pass1']) ? $_SESSION ['info']['pass1'] : ''?>" placeholder="">
							<label for="pass1">Password</label>
						</div>

						<div class="input-field col s12 m4">
							<input type="password" name="pass2" value="<?= isset($_SESSION['info']['pass2']) ? $_SESSION ['info']['pass2'] : ''?>" placeholder="">
							<label for="pass2">Confirm Password</label>
						</div>
							
							<p class="center">
							<button type="submit" name="next" class="waves-effect waves-light btn blue">Next</button>
							</p>
							<div class="clearfix"></div>
					</div>
				</form>
			</div>
		</div>
</div>
<!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>
  

  </body>
</html>
