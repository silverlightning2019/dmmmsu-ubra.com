<?php
	session_start();

	include 'database.php';

	$conn = mysqli_connect($servername, $username, $password, $dbname);
	$query2 = "SELECT * FROM employer ORDER BY emp_id DESC LIMIT 1";
    $result2 = mysqli_query($conn,$query2);
	if (mysqli_num_rows($result2) == 0) { 
		$emp_id = "EMP1";
	}
	else {
		$row = mysqli_fetch_array($result2);
    	$last_id = $row['emp_id'];
		$emp_id = substr($last_id, 3);
        $emp_id = intval($emp_id);
        $emp_id = "EMP" . ($emp_id + 1);
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
	}
?>
<!DOCTYpE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Registration</title>

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
				<form action="complain.php" method="POST">
					<div class="card-panel z-depth-5">
						<a href="../"><h3 class="center reg">UBRA</h3></a>
						<p class="step center">Employer Registration</p>
						<br>
						<p class="center">Employer Account Details</p>

						<div class="input-field col s12">
							<input type="text" name="emp_id" id="emp_id" class="validate" value="<?php echo $emp_id; ?>" placeholder="Applicant ID" readonly>
						</div>

						<div class="input-field col s12">
							<input type="text" name="emp_uname" id="emp_uname" class="validate" placeholder="Enter User Name">
						</div>
					  
						<div class="input-field col s12">
							<input type="password" name="emp_pass" id="emp_pass" placeholder="Enter Password">
						</div>

						<div class="input-field col s12">
							<input type="password" name="emp_cpass" id="emp_cpass" placeholder="Confirm Password">
						</div>

						<p class="center">Employer Other Details</p>

						<div class="input-field col s12">
							<input type="text" name="emp_name" id="emp_name" class="validate" placeholder="Employer/Company Name">
						</div>

						<div class="input-field col s12">
							<input type="text" name="emp_brand" id="emp_brand" class="validate" placeholder="Employer/Company Brand">
						</div>
					  
					  	<div class="input-field col s12">
					  		<input type="text" name="tax_id" id="tax_id" class="validate" placeholder="Tax Identification">
					  	</div>
						
						<div class="input-field col s6">
							<select name="emp_type" id="emp_type">
								<option value="" disabled selected>Employer Type</option>
								<option value="1">Government</option>
								<option value="2">Private</option>
								<option value="3">Local</option>
								<option value="4">Overseas</option>
							</select>
					  	</div>
						
						<div class="input-field col s6">
							<select name="emp_num" id="emp_num">
								<option value="" disabled selected>Employee's Number</option>
								<option value="1">1-9</option>
								<option value="2">10-99</option>
								<option value="3">100-199</option>
								<option value="3">200 and up</option>
							</select>
					  	</div>

						<div class="input-field col s12">
							<input type="text" name="emp_municipal" id="emp_municipal" class="validate" placeholder="Municipality">
						</div>

						<div class="input-field col s12">
							<input type="text" name="emp_province" id="emp_province" class="validate" placeholder="Province">
						</div>

						<div class="input-field col s12">
							<input type="text" name="emp_barangay" id="emp_barangay" class="validate" placeholder="Barangay">
						</div>

						<p class="center">Employer Contact Details</p>
						<div class="input-field col s12">
							<input type="text" name="emp_person" id="emp_person" class="validate" placeholder="Contact Person (Full Name)">
						</div>

						<div class="input-field col s12">
							<input type="text" name="emp_position" id="emp_position" class="validate" placeholder="Position">
						</div>

						<div class="input-field col s12">
							<input type="text" name="emp_telephone" id="emp_telephone" class="validate" placeholder="Telephone Number">
						</div>

						<div class="input-field col s12">
							<input type="text" name="emp_mobile" id="emp_mobile" class="validate" placeholder="Mobile Number">
						</div>

						<div class="input-field col s12">
							<input type="email" name="emp_email" id="emp_email" class="validate" placeholder="Email Address">
						</div>
							
						<p class="center"><a id="register" name="register" class="waves-effect waves-light btn btn1">REGISTER</a></p>
								
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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="js/script.js"></script>
  

  </body>
</html>