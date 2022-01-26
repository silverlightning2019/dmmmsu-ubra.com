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
				<form action="complain.php" method="POST">
					<div class="card-panel z-depth-5">
						<h3 class="center reg">UBRA</h3>
						<p class="center">Register Now!</p>
						<p class="step center">Step 2 - Personal</p>

						<div class="input-field col s12">
							<input type="text" name="province" class="validate" placeholder="Province">
						</div>
						
						<div class="input-field col s12">
							<input type="text" name="municipality" class="validate" placeholder="Municipality">
						</div>

						<div class="input-field col s12">
							<input type="text" name="barangay" class="validate" placeholder="Barangay">
						</div>
								
						<div class="input-field col s12">
							<input type="text" name="house" class="validate" placeholder="House Number/Street Number">
						</div>
							
						<div class="input-field col s12">
							<input type="text" class="datepicker" placeholder="Birth Date">
						</div>
						
						<div class="input-field col s12">
							<input type="text" name="age" class="validate" placeholder="Age">
						</div>

						<div class="input-field col s12">
							<input type="text" name="cnumber" class="validate" placeholder="Contact Number">
						</div>

						<div class="input-field col s12">
					    <select>
					      <option value="" disabled selected>Gender</option>
					      <option value="1">Male</option>
					      <option value="2">Female</option>
					    </select>
					  </div>
						
						<div class="input-field col s12">
					    <select>
					      <option value="" disabled selected>Civil Status</option>
					      <option value="1">Single</option>
					      <option value="2">Married</option>
					      <option value="2">Widowed</option>
					      <option value="2">Separated</option>
					      <option value="2">Live In</option>
					    </select>
					  </div>

					  <div class="input-field col s12">
					    <select>
					      <option value="" disabled selected>Employement Status</option>
					      <option value="1">Employed</option>
					      <option value="2">Unemployed</option>
					    </select>
					  </div>
							
							<p class="center">
							<a href="UserRegistration1.php" class="waves-effect waves-light btn blue">PREVIOUS</a>
							<a href="UserRegistration3.php" class="waves-effect waves-light btn blue">NEXT</a>
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
