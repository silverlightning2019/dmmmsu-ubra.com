<?php 
include('jobcount.php');
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
		<title>Job Offer</title>

		<!-- CSS  -->
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
		<link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>

		<style>
		.material{
		  display: inline-flex;
		  vertical-align: top;
		  margin-right: 10px;
	   
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

		.prefix{
		  color:#64b5f6;
		}

		.btn1{
		  background-color:#64b5f6;
		  width: 100%;
		  display: inline-block;
		  font-size:15px;
		  font-weight: 500;
		}

		.job{
		  font-size: 25px;
		  font-weight: normal;
		  text-transform: uppercase;
		}

		.card1{
		  margin: 10px 20px;
		}

		.joblist{
		  text-transform: uppercase;
		  font-weight: bolder;
		  font-size: 25px;
		}

		.page{
		  text-align: center;
		}

		.active1{
		  background:  #64b5f6 !important;
		}

		.ulol{
		  background-color: #e3f2fd ;
		}

		.material1{
		  display: inline-flex;
		  vertical-align: top;
		  margin-right: 10px;
		  margin-bottom: 5px;
		}
		#pmargin a{
			margin:10px 10px 10px 10px;
		}
		
	  </style>
	</head>
	<body class="body">

		<!--Navigation Bar-->
		<nav class=" blue darken-4" role="navigation">
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
		
		<form action="" method="POST">
		
			<table>
				
			</table>
		
		</form>
  
		<!--  Scripts-->
		<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
		<script src="js/materialize.js"></script>
		<script src="js/init.js"></script>
  

	</body>
</html>