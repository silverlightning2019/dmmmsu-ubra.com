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

			.card{
				margin-top: 35px;
			}
		</style>
</head>
<body>
	<div class="row">
		<div class="col l3 m5 s12"></div>
			<div class="col l6 m6 s12">
				<form action="complain.php" method="POST">
					<div class="card card-panel z-depth-5">
						<h3 class="center reg">UBRA</h3>
						<p class="center">Employer Registration</p>
						<p class="step center">Employer Other Details</p>

						<div class="input-field col s12">
							<input type="text" name="cname" class="validate" placeholder="Employer/Company Name">
						</div>

						<div class="input-field col s12">
							<input type="text" name="cbrand" class="validate" placeholder="Employer/Company Brand">
						</div>
					  
					  <div class="input-field col s12">
					  	<input type="text" name="ctax" class="validate" placeholder="Tax Identification">
					  </div>
						
						<div class="input-field col s6">
							<select>
					      <option value="" disabled selected>Employer Type</option>
					      <option value="1">Government</option>
					      <option value="2">Private</option>
					      <option value="3">Local</option>
					      <option value="4">Overseas</option>
					    </select>
					  </div>
						
						<div class="input-field col s6">
							<select>
					      <option value="" disabled selected>Employee's Number</option>
					      <option value="1">1-9</option>
					      <option value="2">10-99</option>
					      <option value="3">100-199</option>
					      <option value="3">200 and up</option>
					    </select>
					  </div>

					  <div class="input-field col s12">
					  	<input type="text" name="municipality" class="validate" placeholder="Municipality">
					  </div>

					  <div class="input-field col s12">
					  	<input type="text" name="province" class="validate" placeholder="Province">
					  </div>

					  <div class="input-field col s12">
					  	<input type="text" name="barangay" class="validate" placeholder="Barangay">
					  </div>

					  <p class="step center">Employer Contact Details</p>
					  <div class="input-field col s12">
					  	<input type="text" name="cperson" class="validate" placeholder="Contact Person (Full Name)">
					  </div>

					  <div class="input-field col s12">
					  	<input type="text" name="cposition" class="validate" placeholder="Position">
					  </div>

					  <div class="input-field col s12">
					  	<input type="text" name="ctelephone" class="validate" placeholder="Telephone Number">
					  </div>

					  <div class="input-field col s12">
					  	<input type="text" name="cmobile" class="validate" placeholder="Mobile Number">
					  </div>

					  <div class="input-field col s12">
					  	<input type="email" name="cemail" class="validate" placeholder="Email Address">
					  </div>

					  <p class="center">
						<a href="CompanyRegistration.html" class="waves-effect waves-light btn btn1">Previous</a>
						<a href="CompanyLogIn.html" class="waves-effect waves-light btn btn1">Finish</a>
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