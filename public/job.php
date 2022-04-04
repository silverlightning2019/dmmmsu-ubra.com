<?php
include('conndb.php');
$search=$_POST["search"];
$sql = ("SELECT COUNT(j_id) FROM job_tbl WHERE j_name='".$search."' ");
$rs = $conn->query($sql);
$rst = mysqli_fetch_array($rs);
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


<!--Part 1-->
<div class="container">
	<div class="card">
		<form action="homesearch.php" method="POST">
        <div class="card1">
            <form class="col s12">
				<div class="row">
					<div class="input-field col s12 m3">
					  <button class="waves-effect waves-effect blue lighten-2 btn-large btn1">Browse Job(s)</button>
					</div>
				</div>
            </form>
        </div>
<!--Part 2-->
		<div class="card">
			<div class="card horizontal">
			  <div class="card-stacked">
				<div class="card-content">
				  <div class="row" style="margin-bottom: 0;">
					<div class="left-side" style="float: left; display: flex;align-items: center;">
					  <i class="material-icons" style="font-size:1.5rem">format_list_bulleted</i><span style="font-size:15px;font-weight: 500;">Job Lists:</span>
					</div>
					<div class="right-side" style="float: right;">
					  <p class="right-align blue-grey-text" style="font-size: 15px; font-weight:500;">Result: 
					  <span style="color:#64b5f6; text-align:left;"><?php echo $rst[0]; ?> Job(s)</span></p>
					</div>
				  </div>
				</div>
			  </div>
			</div>
		  </div>
		</div>
		</form>

<!--Part 3-->
		<form action="pass.php" method="POST">
		<div class="card2">
			<div class="row">
			<?php
				$servername = "localhost";
				$username = "root";
				$password = "";
				$dbname = "hub";
				
				
				// Create connection
				$conn = new mysqli($servername, $username, $password, $dbname);
				// Check connection
				if ($conn->connect_error) {
					die("Connection failed: " . $conn->connect_error);
				}
				
				
				
				$sql = "SELECT * FROM job_tbl WHERE j_name='".$search."'";
				$result = $conn->query($sql);
									
				if ($result->num_rows > 0) 
				{
					// output data of each row
					while($row = $result->fetch_assoc()) 
					{
			?>	
			<div class="col s12 m6 l4">
				<div class="card hoverable">
					<div class="card-image left-align" >
						<img src="img/<?php echo $row['j_img']; ?>">
					</div>
					<div class="card-content" style="padding: 10px 10px 10px 10px;">
						<p class="job"><?php echo $row['j_name']; ?></p>
						<i class="material material-icons">work</i><?php echo $row['j_specialization']; ?><br>
						<i class="material material-icons">place</i><?php echo $row['j_location']; ?><br>
						<i class="material material-icons">business</i><?php echo $row['j_organization']; ?><br>
						<i class="material material-icons">check_circle_outline</i><?php echo $row['j_count']; ?><br><br>
						<center><button name="show" value="<?php echo $row['j_id']; ?>" class="waves-effect btn-flat">Show Details</button></center>
					</div>
				</div>
			</div>
			<?php } ?>
		<?php } ?>
			</div>
		</div>
		</form>
	</div>
</div>



  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>

</body>
</html>