<?php
include('categoryCount.php');
//For count section on HOME page
include('homeCount.php');
include('membersCount.php');
include('companyCount.php');
include('jobpostedCount.php');
?>
<!DOCTYPE html>
<html>
<title>UBRA</title>
<head>

	<!-- Script -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">
	<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script src="js/materialize.js"></script>
	<script src="js/init.js"></script>
	<script src="js/script.js"></script>
	<!--  script for search-->
	<script>
	$(document).ready(function(){
		$("#j_name").keyup(function(){
			$.ajax({
			type: "POST",
			url: "readJob.php",
			data:'keyword='+$(this).val(),
			success: function(data){
				$("#suggesstion-box").show();
				$("#suggesstion-box").html(data);
				$("#j_name").css("background","#FFF");
			}
			});
		});
	});

	function selectJob(val) {
	$("#j_name").val(val);
	$("#suggesstion-box").hide();
	}
	</script>
	
	<!-- CSS -->
	<link rel="stylesheet" href="css/searchbar.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
	<link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>

	<style>
	.work{
      padding: 5px;
    }

    .color1{
      background: #e3f2fd;
      padding-top: 10px;
    }

    .color2{
      background: white;
      padding: 10px;
    }

    .icon{
      padding: 5px;
    }

    .start{
      margin-top: 5px;
      margin-bottom: 20px;
    }

    .header{
      font-weight: bolder;
    }

    .span{
      font-weight: normal;
    }

    .font{
      font-size: 20px;
    }

    .material{
      display: inline-flex;
      vertical-align: top;
      margin-right: 10px;
    }

    .job{
      font-size: 25px;
      font-weight: normal;
      text-transform: uppercase;
    }

    .logo{
      color:#64b5f6;
      font-weight: bolder;
      text-transform: uppercase;
    }

    .icon{
      color:  #64b5f6;
    }

    .number{
      color: #0d47a1;
      font-weight: bolder;
      font-size: 40px;
      text-align: center;
      margin: 0 auto;
    }

    .btn-flat{
      background-color: #e0e0e0 ;
    }

    .material1{
      display: inline-flex;
      vertical-align: top;
      margin-right: 10px;
      margin-bottom: 5px;
    }
	
	
		
	</style>
	
</head>	
<body class="body">

<!--Navigation Bar-->
<nav class=" blue darken-4" role="navigation" >
    <div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo"><span class="logo">UBRA</span></a>
		<ul class="right hide-on-med-and-down">
			<li><a href="home.php">Home</a></li>
			<li><a href="job-offer.php">Job Offers</a></li>
			<li><a href="job-events.php">Job Events</a></li>
			<li><a href="application.php">My Applications</a></li>
			<li><a href="profile.php">Profile</a></li>
			<li><a href="./">Log Out</a></li>
		</ul>

		<ul id="nav-mobile" class="sidenav">
			<li><a href="home.php">Home</a></li>
			<li><a href="job-offer.php">Job Offers</a></li>
			<li><a href="job-events.php">Job Events</a></li>
			<li><a href="application.php">My Applications</a></li>
			<li><a href="profile.php">Profile</a></li>
			<li><a href="./">Log Out</a></li>
		</ul>
		<a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons icon">menu</i></a>
    </div>
</nav>
<!--End-->
	
<!--Slider-->
<section class="slider">
    <div class="caption center-align">
    <h3 class="welcome">Welcome to <span class="logo">UBRA</span> : DMMMSU-MLUC Job Finder System</h3>
    <h5 class="slogan">"You can find the Job that suits you!"</h5><br>    
	<!--Search Bar-->
        <div class="container">
			<div>
				<div class="nav-wrapper search">
					<?php 
					if(isset($_POST['j_name'])){
						$j_name=$_POST["j_name"];
					}
					?>
					<form action="job.php" method="POST">
						<div class="input-field">
							<div class="frmSearch">
								<input type="search" name="j_name" id="j_name" placeholder="Job Name/Title..." />
								<div id="suggesstion-box"></div>
							</div>
						</div>
					</form>
				</div>
			<div>
		</div>
	</div>
</section>
<!--End-->

<!--Banner-->
<div class="section no-pad-bot work" id="index-banner">
    <div class="container">
		<br><br>
		<h1 class="header center blue-grey-text">How it works?</h1>
		<div class="row center">
			<h5 class="col s12 light">Ubra will help you connect to the right resources to help you achieve your career goals or find qualified candidate.</h5>
		</div>
		<br>
    </div>
</div>
<!--End-->

<!--icon block-->
<div class="container">
    <div class="section">

		<!--   Icon Section   -->
		<div class="row">
			<div class="col s12 m4">
				<div class="icon-block">
					<h2 class="center light-blue-text"><i class="material-icons">person</i></h2>
					<h5 class="center">Create Account</h5>

					<p class="light">Have the best chance of landing that job, create an account and be able to use UBRA's services.</p>
				</div>
			</div>

			<div class="col s12 m4">
				<div class="icon-block">
					<h2 class="center light-blue-text"><i class="material-icons">manage_search</i></h2>
					<h5 class="center">Search Job</h5>

					<p class="light">Here at UBRA provides you with varying selection of jobs best suited to your skills. Use our search job to easily navigate the job you're looking for.</p>
				</div>
			</div>

			<div class="col s12 m4">
				<div class="icon-block">
					<h2 class="center light-blue-text"><i class="material-icons">business_center</i></h2>
					<h5 class="center">Apply for Job</h5>

					<p class="light">UBRA makes it easy to submit your ct/resume to your desired company. Click on the apply button to send your requirements to your target company.</p>
				</div>
			</div>
		</div>
    </div>
    <br><br>
</div>
<!--End-->

<!--Part 3 and Part 4-->
<div class="color1">
	<div class="container">
		<!--Part3-->
		<!--Job Categories-->
		<h1 class="header center blue-grey-text">Job Categories</h1>
		<div class="row center">
        <h5 class="col s12 light start">Start your search by using any of the following job categories.</h5>
		
			<form action="category.php" method="POST">
			<!--Job Cards-->
			<div class="container">
				<div class="card2">
					<div class="row">
						<!-- Display category data -->
						<div id="data"></div>				
					</div>
				</div>
			</div>
			</form>
			
		</div>
		<!--End-->
		
		
		
	</div>
		<!--Part4-->
		<div class="color2">
			<!--Featured Jobs--><!-- Need some loop for data display -->
			<div class="container">
				<h1 class="header center blue-grey-text">Featured Jobs</h1>
				<div class="row center">
					<h5 class="col s12 light">Featured Jobs available in UBRA. Apply to Editorial Specialist, Account Manager, Human Resources Specialist and more!</h5>
				</div>
				
				<?php 
				if(isset($_POST['show'])){
					$show=$_POST["show"];
				}
				?>
				<form action="apply.php" method="POST">
				<!--Featured Jobs List-->
				<div class="row">
					<!-- Display Featured Jobs -->
					<div id="featured"></div>
				</div>
				</form>
				
			</div>
		</div>
		<!--End-->
		
	</div>
</div>
<!--End-->

<!--Part 5--><!--Need Count Data(s)-->
<div class="color1">
	<div class="container">
		<h1 class="header center blue-grey-text">Job Finder Stats</h1>
		<div class="row center">
			<h5 class="col s12 light start">Here we list our site statsand how many people we've helped find a job and companies have found recruits.</h5>

			<!--Job Cards-->
			<div class="row">
				<div class="col s12 m3">
					<div class="card hoverable">
						<div class="icon-block icon">
							<h2 class="center light-blue-text"><i class="material-icons ">task</i></h2>
							<p class="number center"><?php echo $result1[0]; ?></p>
							<h5 class="center black-text">Jobs Filled</h5> 
						</div>
					</div>
				</div>

				<div class="col s12 m3">
					<div class="card hoverable">
						<div class="icon-block icon">
							<h2 class="center light-blue-text"><i class="material-icons">groups</i></h2>
							<p class="number center"><?php echo $result2[0]; ?></p>
							 <h5 class="center black-text">Members</h5>
						</div>
					</div>
				</div>

				<div class="col s12 m3">
					<div class="card hoverable">
						<div class="icon-block icon">
							<h2 class="center light-blue-text"><i class="material-icons">corporate_fare</i></h2>
							<p class="number center"><?php echo $result3[0]; ?></p>
							<h5 class="center black-text">Companies</h5>
						</div>
					</div>
				</div>

				<div class="col s12 m3">
					<div class="card hoverable">
						<div class="icon-block icon">
							<h2 class="center light-blue-text"><i class="material-icons">post_add</i></h2>
							<p class="number center"><?php echo $result4[0]; ?></p>
							<h5 class="center black-text">Jobs Posted</h5>
						</div>
					</div>
				</div>
			</div>
			
		</div>
	</div>
</div>
<!--End-->

<!--Part 6-->
<div class="color2">
	<div class="container">
    <h1 class="header center blue-grey-text">Employers</h1>
		<div class="row center">
        <h5 class="col s12 light start">UBRA helps job seekers and employers the right fit everyday.</h5>
		<form>
			<div class="row">
				<!--Display Employers-->
				<div id="employers"></div>
			</div>
		</form>
		</div>
	</div>
</div>
<!--End-->

<!--Footer-->	
<?php
include('footer.php');
?>
<!--End-->
</body>
</html>