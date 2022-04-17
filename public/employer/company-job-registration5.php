<?php
  session_start();
	if (!isset($_SESSION['emp_uname'])){
		header("location: ./");
	}
?>
<?php

	include 'database.php';

	$conn = mysqli_connect($servername, $username, $password, $dbname);
	$query2 = "SELECT * FROM job ORDER BY job_id DESC LIMIT 1";
    $result2 = mysqli_query($conn,$query2);
	if (mysqli_num_rows($result2) == 0) { 
		$job_id = "JOB1";
	}
	else {
		$row = mysqli_fetch_array($result2);
    	$last_id = $row['job_id'];
		  $job_id = substr($last_id, 3);
      $job_id = intval($job_id);
      $job_id = "JOB" . ($job_id + 1);
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Post/Edit Job Registration</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="js/script.js"></script>

  <style>
    .logo{
      color:#64b5f6;
      font-weight: bolder;
      text-transform: uppercase;
    }

    .header{
      font-weight: 600;
      margin-bottom: 20px;
    }

    .material1{
      display: inline-flex;
      vertical-align: top;
      margin-right: 10px;
      margin-bottom: 5px;
    }

    .cardhorizontal{
      margin-bottom: -50px;
    }
    
    .btn-flat{
      background-color: #e0e0e0 ;
    }

    .material{
      display: inline-flex;
      vertical-align: top;
      margin-right: 10px;
      color: #64b5f6;
    }

    .job{
      font-size: 25px;
      font-weight: normal;
      text-transform: uppercase;
    }
  </style>
</head>
<body class="body">

<!--Navigation Bar-->
  <nav class=" blue darken-4" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo"><span class="logo">UBRA</span></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="home.php">Home</a></li>
        <li><a href="profile.php">Company Profile</a></li>
        <li><a href="job-annoucements.php">Job Announcements</a></li>
        <li><a href="job-registered.php">Job Registered</a></li>
        <li><a href="logout.php"><i class="material-icons">logout</i></a></li>
      </ul>

      <ul id="nav-mobile" class="sidenav">
        <li><a href="home.php">Home</a></li>
        <li><a href="profile.php">Company Profile</a></li>
        <li><a href="job-annoucements.php">Job Announcements</a></l
        <li><a href="job-registered.php">Job Registered</a></li>
        <li><a href="logout.php">Log Out</a></li>
      </ul>
      <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons icon">menu</i></a>
    </div>
  </nav>
<!--End-->

<!--Banner-->
  <div class="section no-pad-bot work" id="index-banner">
    <div class="container">
      <h4 class="header left-align blue-grey-text">Job Registration Here!</h4>
    </div>
  </div>

<!--Post and Edit-->
<div class="container">
<div class="col s12 m7">
    <div class="card horizontal">
      <div class="card-stacked">
        <div class="card-content cardhorizontal">
          <div class="row">
            <form class="col s12">
              <div class="row">
                <div class="input-field col s12">
                  <input type="text" name="job_id" id="job_id" class="validate" value="<?php echo $job_id; ?>" placeholder="Job ID" readonly>
                </div>
                <?php
                  include 'database.php';

                  $conn = new mysqli($servername, $username, $password,$dbname);

                  if ($conn->connect_error) 
                  {
                    die("Connection failed: " . $conn->connect_error);
                  }

                  $sql = "SELECT * FROM employer WHERE emp_uname='{$_SESSION['emp_uname']}'";
                  $result = $conn->query($sql);	
                  if ($result->num_rows > 0)  
                  {
                    while ($row = mysqli_fetch_assoc($result)){
                ?>
                <div class="input-field col s6">
                  <input placeholder="Job Position" id="job_position" name="job_position" type="text" class="validate">
                  <label for="jobtitle">Job Position</label>
                </div>

                <div class="input-field col s6">
                  <input placeholder="Location" id="location" name="location" type="text" class="validate">
                  <label for="location">Location</label>
                </div>

                <div class="input-field col s6">
                  <input placeholder="Company/Employer" id="employer" name="employer" type="text" class="validate" value="<?php echo $row["emp_name"]; ?> " disabled>
                  <label for="Date">Company/Employer</label>
                </div>

                <div class="input-field col s6">
                  <input placeholder="Job Position Available" id="available" name="available" type="text" class="validate">
                  <label for="available">Job Position Available</label>
                </div>

                <!--Job Qualification-->
                <p class="center-align kenneth">Job Qualification/s</p><br>

                 <p class="center-align">
                  <a href = "javascript:void(0)" class="add-qualification waves-effect blue btn"><i class="material-icons left">add</i>Add Job Qualification</a>
                </p>
                <div class="col s12">
                  <div class="row">
                    <div class="input-field col s12">
                      <input placeholder="Job Qualification" id="jobquali" type="text" class="validate">
                    </div>
                  </div>
                </div>
                <form>
                  <div class="paste-new-qualification">
                  </div>
                </form>

                <!--Job Requirements-->
                <p class="center-align kenneth">Job Requirement/s</p><br>

                <p class="center-align">
                  <a href = "javascript:void(0)" class="add-requirement waves-effect blue btn"><i class="material-icons left">add</i>Add Job Requirement</a>
                </p>
                <div class="col s12">
                  <div class="row">
                    <div class="input-field col s12">
                      <input placeholder="Job Requirement" id="jobreq" type="text" class="validate">
                    </div>
                  </div>
                </div>

                <form>
                  <div class="paste-new-requirement">
                  </div>
                </form>

                 <!--Other Notes-->
                <p class="center-align kenneth">Other Notes</p>

                <div class="input-field col s12">
                  <input placeholder="Additional Notes" id="notes" type="text" class="validate">
                </div>

                <p class="center-align">
                  <a id="postjob" name="postjob" class="btn waves-effect blue"><i class="material-icons">post_add</i></a>
                  <a id="updatep" name="updatep" class="btn waves-effect red"><i class="material-icons">clear</i></a>
                </p>

              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div><br><br>
</div>
<?php
  }
} 
?>

<!--Footer-->
  <footer class="page-footer  blue darken-4">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">About Us</h5>
          <p class="grey-text text-lighten-4">UBRA is a Job Finder System by DMMMSU-MLUC to help
          people, graduates and working students find the suitable job for them.</p>
        </div>
        <div class="col l4 offset-l2 s12">
          <h5 class="white-text">Connect With Us</h5>
          <ul>
            <li><a class="white-text" href="#!"><i class="material-icons material1">phone</i>09997589145</a></li>
            <li><a class="white-text" href="#!"><i class="material-icons material1">mail</i>DMMMSU-MLUC EMAIL</a></li>
            <li><a class="white-text" href="#!"><i class="material-icons material1">facebook</i>DMMMSU-MLUC FACEBOOK</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
      <a class="orange-text text-lighten-3" href="#">Copyright © 2022 UBRA. All rights reserved.</a>
      </div>
    </div>
  </footer>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>
  <script>
	  $(document).ready(function (){
		  $(document).on('click', '.add-qualification', function(){
        $('.paste-new-qualification').append('<div class="quali">\
                    <div class="col s12">\
                      <div class="row">\
                          <div class="input-field col s10">\
                            <input placeholder="Job Qualification" id="jobquali" type="text" class="validate">\
                          </div>\
                          <a id="remove" name="remove" class="remove-quali btn waves-effect red"><i class="material-icons">clear</i></a>\
                      </div>\
                  </div>\
                </div>\
        ')
		  });

      $(document).on('click', '.remove-quali', function(){
        $(this).closest('.quali').remove();
      });

      $(document).on('click', '.add-requirement', function(){
        $('.paste-new-requirement').append('<div class="req">\
                    <div class="col s12">\
                      <div class="row">\
                          <div class="input-field col s10">\
                          <input placeholder="Job Requirement" id="jobreq" type="text" class="validate">\
                          </div>\
                          <a id="remove" name="remove" class="remove-req btn waves-effect red"><i class="material-icons">clear</i></a>\
                      </div>\
                  </div>\
                </div>\
        ')
		  });

      $(document).on('click', '.remove-req', function(){
        $(this).closest('.req').remove();
      });

	  });
  </script>

  </body>
</html>
