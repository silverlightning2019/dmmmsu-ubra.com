<?php
	session_start();

	if (isset($_POST['next'])) {
		foreach ($_POST as $key => $value)
		{
			$_SESSION ['info'][$key] = $value;
		}

		$keys = array_keys($_SESSION['info']);

		if (in_array('next', $keys)) {
			unset($_SESSION['info']['next']);
		}

		header("Location: userregistration3.php");
	}	
?>
<!DOCTYpE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Registration Step 2</title>

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
						<?php
							/* echo "<pre>";
							print_r ($_SESSION['info']);
							echo "</pre>"; */
						?> 
						<a href="./"><h3 class="center reg">UBRA</h3></a>
						<p class="center">Register Now!</p>
						<p class="step center">Step 2 - Personal</p>
						
						<div class="input-field col s12 m3">
							<input type="text" name="house" class="validate" value="<?= isset($_SESSION['info']['house']) ? $_SESSION ['info']['house'] : ''?>" placeholder="">
							<label for="house">House #/Stress #</label>
						</div>
						
						<div class="input-field col s12 m3">
							<input type="text" name="barangay" class="validate" value="<?= isset($_SESSION['info']['barangay']) ? $_SESSION ['info']['barangay'] : ''?>" placeholder="">
							<label for="barangay">Barangay</label>
						</div>
						
						<div class="input-field col s12 m3">
							<input type="text" name="municipality" class="validate" value="<?= isset($_SESSION['info']['municipality']) ? $_SESSION ['info']['municipality'] : ''?>" placeholder="">
							<label for="municipality">Municipality</label>
						</div>
						
						<div class="input-field col s12 m3">
							<input type="text" name="province" class="validate" value="<?= isset($_SESSION['info']['province']) ? $_SESSION ['info']['province'] : ''?>" placeholder="">
							<label for="province">Province</label>
						</div>
								
						<div class="input-field col s12 m4">
							<input type="text" class="datepicker" name="date" value="<?= isset($_SESSION['info']['date']) ? $_SESSION ['info']['date'] : ''?>" placeholder="">
							<label>Birth Date</label>
						</div>
						
						<div class="input-field col s12 m4">
							<input type="text" name="age" class="validate" value="<?= isset($_SESSION['info']['age']) ? $_SESSION ['info']['age'] : ''?>" placeholder="">
							<label for="age">Age</label>
						</div>

						<div class="input-field col s12 m4">
							<input type="text" name="cnumber" class="validate" value="<?= isset($_SESSION['info']['cnumber']) ? $_SESSION ['info']['cnumber'] : ''?>" placeholder="">
							<label for="cnumber">Contact Number</label>
						</div>

						<div class="input-field col s12 m4">
							<select name="gender" value="<?= isset($_SESSION['info']['gender']) ? $_SESSION ['info']['gender'] : ''?>">
							<option value="<?php echo isset($_SESSION['info']['gender']) ? '' : $_SESSION ['info']['gender'] = "Male" ?>" disabled></option>
							<option value="Male" <?php echo $_SESSION['info']['gender'] == 'Male' ? 'selected' : ''; ?> >Male</option>
							<option value="Female" <?php echo $_SESSION['info']['gender'] == 'Female' ? 'selected' : ''; ?> >Female</option>
							</select>
							<label for="gender">Gender</label>
					 	</div>
						
						<div class="input-field col s12 m4">
					    <select name="cstatus" value="<?= isset($_SESSION['info']['cstatus']) ? $_SESSION ['info']['cstatus'] : ''?>" placeholder="">
						  <option value="<?php echo isset($_SESSION['info']['cstatus']) ? '' : $_SESSION ['info']['cstatus'] = "" ?>" disabled></option>
						  <option value="Single" <?php echo $_SESSION['info']['cstatus'] == 'Single' ? ' selected' : ''; ?> >Single</option>
					      <option value="Married" <?php echo $_SESSION['info']['cstatus'] == 'Married' ? ' selected' : ''; ?> >Married</option>
					      <option value="Widowed" <?php echo $_SESSION['info']['cstatus'] == 'Widowed' ? ' selected' : ''; ?> >Widowed</option>
					      <option value="Separated" <?php echo $_SESSION['info']['cstatus'] == 'Separated' ? ' selected' : ''; ?> >Separated</option>
					      <option value="Live In" <?php echo $_SESSION['info']['cstatus'] == 'Live In' ? ' selected' : ''; ?> >Live In</option>
					    </select>
						<label for="cstatus">Civil Status</label>
					  </div>

					  <div class="input-field col s12 m4">
					    <select name="estatus" value="<?= isset($_SESSION['info']['estatus']) ? $_SESSION ['info']['estatus'] : ''?>">
						<option value="<?php echo isset($_SESSION['info']['estatus']) ? '' : $_SESSION ['info']['estatus'] = "" ?>" disabled></option>
					      <option value="Employed" <?php echo $_SESSION['info']['estatus'] == 'Employed' ? ' selected' : ''; ?> >Employed</option>
					      <option value="Unemployed" <?php echo $_SESSION['info']['estatus'] == 'Unemployed' ? ' selected' : ''; ?>>Unemployed</option>
					    </select>
						  <label for="estatus">Employment Status</label>
					  </div>
							
							<p class="center">
							<a href="userregistration1.php" class="waves-effect waves-light btn blue">PREVIOUS</a>
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
