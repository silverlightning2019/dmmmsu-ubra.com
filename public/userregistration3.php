<!DOCTYpE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Registration Step 3</title>

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
						<p class="step center">Step 3 - Educational</p>

						<div class="input-field col s12">
						<p class="center">
							<a class="waves-effect blue btn"><i class="material-icons left">add</i>Add Educational</a>
						</p>
						</div>

						<div class="input-field col s12">
					    <select>
					      <option value="" disabled selected>Choose your option</option>
					      <option value="1">Elementary</option>
					      <option value="2">High School</option>
					      <option value="2">Vocational/Trade Course</option>
					      <option value="2">College</option>
					      <option value="2">Graduate Studies</option>
					      <option value="2">N/A</option>
					    </select>
					    <span class="helper-text" >Level</span>
					  </div>
						
						<div class="input-field col s12">
							<input type="text" name="school" class="validate">
							<span class="helper-text" >Name of School</span>
						</div>

						<div class="input-field col s12">
							<input type="text" name="basic" class="validate">
							<span class="helper-text" >Basic Education/Degree/Course</span>
						</div>
								
						<div class="input-field col s12">
							<input type="text" name="to" class="validate" placeholder="Year">
							<span class="helper-text" >From</span>
						</div>
							
						<div class="input-field col s12">
							<input type="text" name="to" class="validate" placeholder="Year">
							<span class="helper-text" >To</span>
						</div>
								  
						<div class="input-field col s12">
							<input type="text" name="hlevel" class="validate">
							<span class="helper-text" >Highest Level/Unit Earned</span>
						</div>

						<div class="input-field col s12">
							<input type="text" name="graduated" class="validate">
							<span class="helper-text" >Year Graduated</span>
						</div>

						<div class="input-field col s12">
							<input type="text" name="scholarsip" class="validate">
							<span class="helper-text" >Scholarship/Academic Honors Received</span>
						</div>

							<p class="center">
							<a href="UserRegistration2.php" class="waves-effect waves-light btn blue">PREVIOUS</a>
							<a href="UserRegistration4.php" class="waves-effect waves-light btn blue">NEXT</a>
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
