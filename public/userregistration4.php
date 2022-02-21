<?php
	session_start();

	if (isset($_POST['submit'])) {
		foreach ($_POST as $key => $value)
		{
			$_SESSION ['info'][$key] = $value;
		}

		$keys = array_keys($_SESSION['info']);

		if (in_array('submit', $keys)) {
			unset($_SESSION['info']['submit']);
		}

		header("Location: submit.php");
	}	
?>
<!DOCTYpE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Registration Step 4</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="js/script.js"></script>
		
		<style>
			h3{
				color:#64b5f6;
				font-weight: bold;
				text-transform: uppercase;
			}
			
			.material-icons{
				color: white;
			}

			.btn1{
				background-color:#03a9f4; ;
			}
			
			.btn2{
				background-color: green;
			}

			.step{
				font-weight: bold;
			}

			.card-panel{
				margin-top:35px;
			}
		</style>
</head>
<body>

	<div class="row">
		<div class="col l3 m5 s12"></div>
			<div class="col l6 m6 s12">
				<form action="" method="POST">
					<div class="card-panel z-depth-5">
						<h3 class="center reg">UBRA</h3>
						<?php
							echo "<pre>";
							print_r ($_SESSION['info']);
							echo "</pre>";
						?> 
						<p class="center">Register Now!</p>
						<p class="step center">Step 4 - Work</p>

						<div class="input-field col s12">
							<input type="text" id="app_id" name="app_id" class="validate" value="<?= isset($_SESSION['info']['app_id']) ? $_SESSION ['info']['app_id'] : ''?>" placeholder="Applicant ID">
						</div>

						<div class="input-field col s12">
							<input type="text" id="fname" name="fname" class="validate" value="<?= isset($_SESSION['info']['fname']) ? $_SESSION ['info']['fname'] : ''?>" placeholder="Enter First Name">
						</div>
						
						<div class="input-field col s12">
							<input type="text" id="mname" name="mname" class="validate" value="<?= isset($_SESSION['info']['mname']) ? $_SESSION ['info']['mname'] : ''?>" placeholder="Enter Middle Name">
						</div>

						<div class="input-field col s12">
							<input type="text" id="lname" name="lname" class="validate" value="<?= isset($_SESSION['info']['lname']) ? $_SESSION ['info']['lname'] : ''?>" placeholder="Enter Last Name">
						</div>
								
						<div class="input-field col s12">
							<input type="text" id="uname" name="uname" class="validate" value="<?= isset($_SESSION['info']['uname']) ? $_SESSION ['info']['uname'] : ''?>" placeholder="Enter User Name">
						</div>

						<div class="input-field col s12">
							<input type="email" id="email" name="email" class="validate" value="<?= isset($_SESSION['info']['email']) ? $_SESSION ['info']['email'] : ''?>" placeholder="Enter Email Address">
						</div>
								  
						<div class="input-field col s12">
							<input type="password" id="pass1" name="pass1" value="<?= isset($_SESSION['info']['pass1']) ? $_SESSION ['info']['pass1'] : ''?>" placeholder="Enter Password">
						</div>

						<div class="input-field col s12">
							<input type="password" id="pass2" name="pass2" value="<?= isset($_SESSION['info']['pass2']) ? $_SESSION ['info']['pass2'] : ''?>" placeholder="Confirm Password">
						</div>

						<div class="input-field col s12">
						<p class="center">
							<a class="waves-effect blue btn"><i class="material-icons left">add</i>Add Work</a>
						</p>
						</div>

						<div class="input-field col s8">
							<input type="text" class="datepicker" placeholder="From">
						</div>

						<div class="input-field col s4">
							 <form action="#">
							    <p>
							      <label>
							        <input type="checkbox" />
							        <span>Up to Present?</span>
							      </label>
							    </p>
							  </form>
						</div>

						<div class="input-field col s12">
							<input type="text" class="datepicker" placeholder="To">
						</div>

						<div class="input-field col s12">
							<input type="text" name="position" class="validate" placeholder="Position Title">
						</div>

						<div class="input-field col s12">
							<input type="text" name="agency" class="validate" placeholder="Agency/Company">
						</div>

						<div class="input-field col s12">
							<input type="text" name="status" class="validate" placeholder="Status Appointment">
						</div>

							<p class="center">
							<a href="userregistration3.php" class="waves-effect waves-light btn blue">PREVIOUS</a>
							<input type="button" id="register" name="register" class="waves-effect waves-light btn blue" value="REGISTER">
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
