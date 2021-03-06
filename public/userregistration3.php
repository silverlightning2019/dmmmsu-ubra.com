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

		echo "<pre>";
		print_r ($_SESSION['info']);
		echo "</pre>";

		header("Location: userregistration4.php");
	}	
?>
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
				<form action="" method="POST">
					<div class="card-panel z-depth-5">
						<?php
							/* echo "<pre>";
							print_r ($_SESSION['info']);
							echo "</pre>"; */
						?>
						<a href="./"><h3 class="center reg">UBRA</h3></a>
						<p class="center">Register Now!</p>
						<p class="step center">Step 3 - Educational</p>

						<div class="input-field col s12">
						<p class="center">
							<a href = "javascript:void(0)" class="add-more-form waves-effect blue btn"><i class="material-icons left">add</i>Add Educational</a>
						</p>
						</div>
						<form>

							<div class="paste-new-forms">

							</div>
						</form>

						<p class="center">
							<a href="userregistration2.php" class="waves-effect waves-light btn blue">PREVIOUS</a>
							<button type="submit" name="next" class="waves-effect waves-light btn blue">Next</button>
						</p>
							
							<div class="clearfix"></div>
					</div>
				</form>
			</div>
		</div>
</div>
<!--  	s-->
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>
  <script>
	  $(document).ready(function (){
		  $(document).on('click', '.add-more-form', function(){
			$('.paste-new-forms').append('<a class="btn-floating btn-large waves-effect waves-light red right"><i class="material-icons">close</i></a>\
							<div class="input-field col s12 m6">\
							<select>\
								<option value="" disabled selected></option>\
								<option value="1">Elementary</option>\
								<option value="2">High School</option>\
								<option value="2">Vocational/Trade Course</option>\
								<option value="2">College</option>\
								<option value="2">Graduate Studies</option>\
								<option value="2">N/A</option>\
							</select>\
							 <label for="">Level</label>\
							</div>\
							<div class="input-field col s12 m6">\
								<input type="text" name="school" class="validate" placeholder="">\
								<label for="school">Name of School</label>\
							</div>\
							<div class="input-field col s12 m4">\
								<input type="text" name="basic" class="validate" placeholder="">\
								<label for="basic">Basic Education/Degree/Course</label>\
							</div>\
							<div class="input-field col s12 m4">\
								<input type="text" name="from" class="validate" placeholder="">\
								<label for="from">From (Year)</label>\
							</div>\
							<div class="input-field col s12 m4">\
								<input type="text" name="to" class="validate" placeholder="">\
								<label for="to">To (Year)</label>\
							</div>\
							<div class="input-field col s12 m6">\
								<input type="text" name="hlevel" class="validate" placeholder="">\
								<label for="hlevel">Highest Level/Unit Earned</label>\
							</div>\
							<div class="input-field col s12 m6">\
								<input type="text" name="graduated" class="validate" placeholder="">\
								<label for="graduated">Year Graduated</label>\
							</div>\
							<div class="input-field col s12 m12">\
								<input type="text" name="scholarsip" class="validate" placeholder="">\
								<label for="scholarship">Scholarship/Academic Honors Received</label>\
							</div>')
		  });
	  });
  </script>
  

  </body>
</html>
