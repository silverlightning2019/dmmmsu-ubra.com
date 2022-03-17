<?php
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

  </style>
</head>
<body class="body">
	
	<div class="color2">
	<!--Featured Jobs-->
	<div class="container">
	<h1 class="header center blue-grey-text">Featured Jobs</h1>
		<div class="row center">
			<h5 class="col s12 light">Featured Jobs available in UBRA. Apply to Editorial Specialist, Account Manager, Human Resources Specialist and more!</h5>
        </div>
		<form action="pass.php" method="POST">
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
			
			
			
			$sql = "SELECT j_id, j_name, j_location, j_organization, j_count FROM job_tbl";
			$result = $conn->query($sql);
								
			if ($result->num_rows > 0) 
			{
				// output data of each row
				while($row = $result->fetch_assoc()) 
				{
					//to pass 
					if(isset($_POST['show'])){
					$show=$_POST["show"];
			}
		?>
		<!--Featured Jobs List-->
        <div class="row">
			<div class="col s12 m4">
				<div class="card hoverable">
				<div class="card-image">
					<img src="img/Engineers.jpg">
				</div>
				<div class="card-content">
					<p class="job"><?php echo $row['j_name']; ?></p>
					<i class="material material-icons">place</i><?php echo $row['j_location']; ?><br>
					<i class="material material-icons">business</i><?php echo $row['j_organization']; ?><br>
					<i class="material material-icons">check_circle_outline</i><?php echo $row['j_count']; ?><br><br>
					<center><button name="show" value="<?php echo $row['j_id']; ?>" class="waves-effect btn-flat">Show Details</button></center>
				</div>
				
				</div>
			</div>
			<?php } }else{ echo "error"; ?>
						
		<?php } ?>
		</div>
		</form>
		
	</div>
	</div>
	<center>
		<ul class="pagination">
			<li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
			<li class="active"><a href="#!">1</a></li>
			<li class="waves-effect"><a href="#!">2</a></li>
			<li class="waves-effect"><a href="#!">3</a></li>
			<li class="waves-effect"><a href="#!">4</a></li>
			<li class="waves-effect"><a href="#!">5</a></li>
			<li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
		</ul>
	</center>




  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>

  </body>
</html>
