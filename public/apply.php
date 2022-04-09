<?php
$show=$_POST["show"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Dashboard</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>

  <style>
    .search{
      background: white;
    }

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
      color: #64b5f6;
    }

    .material1{
      display: inline-flex;
      vertical-align: top;
      margin-right: 10px;
      margin-bottom: 5px;
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

    .reg{
        color:#64b5f6;
        font-weight: bold;
        text-transform: uppercase;
      }

    .caption{
      margin-top: -50px;
    }

    .content{
      margin-top: 50px;
    }

    .modal{
        height: 400px !important;
        width: 300px !important;
      }
	.child{
		padding:10px 10px 10px 10px;
		text-align: justify;
		float: left;
		width: 50%;
		height: 100%;
		box-sizing: border-box;
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

<div class="container">
    <div class="card">
	<form>
		<!-- Section Parent -->
		<section class="parent">
			<div class="card2">
				<div class="row">
					<!--1st Section-->
					<section class="child">
						<div id="data"></div>
					</section>
					
					<!--2nd Section-->
					<section class="child">
						<h4>What is Lorem Ipsum?</h4>
						<p>
							Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
							Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
							when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
							It has survived not only five centuries, but also the leap into electronic typesetting, remaining 
							essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing 
							Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including 
							versions of Lorem Ipsum.
						</p>
					</section>
				</div>
			</div>
			<button type="button" name="show" id="show" value="<?php echo $show ?>" class="waves-effect btn-flat">APPLY</button>
		</section>
		<!--End-->
	</form>
	</div>
</div>

  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>
  <script src="js/apply.js"></script>

</body>
</html>
