<?php
	session_start();
  if (!isset($_SESSION['emp_uname'])){
		header("location: ./");
	}	
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Post/Edit Job Registration/Step 2</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>

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
        <li><a href="job-annoucements.php">Job Announcements</a></li>
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
      <h5 class="header left-align blue-grey-text">Step 2!</h5>
    </div>
  </div>

<!--Post and Edit-->
<div class="container">
<div class="col s12 m7">
    <div class="card horizontal" style="margin-top:20px;margin-bottom: 145px;">
      <div class="card-stacked">
        <div class="card-content cardhorizontal">
          <div class="row">
            <form class="col s12" action="qualifications.php" method="POST">
              <div class="row">
                <div class="center">
                  <a href = "javascript:void(0)" class="add-qualification waves-effect btn blue" style="width:100%;margin-bottom: 10px;">Add Job Qualification</a>
                </div>
                
                <input type="hidden" name="job_id[]" id="job_id" class="validate" value="<?php echo $_SESSION['job_id']; ?>" placeholder="Job ID" readonly>

               <div class="input-field col s12">
                  <input placeholder="Job Qualification" name="jobquali[]" id="jobquali" type="text" class="validate">
                </div>

                <form>
                  <div class="paste-new-qualification">
                  </div>
                </form>

                <div class="center">
                  <a class="btn btn-medium waves-effect waves-light blue disabled"><i class="material-icons">navigate_before</i></a>
                  <button type="submit" name="requirements" class="btn btn-medium waves-effect waves-light blue"><i class="material-icons">navigate_next</i></a>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<!--Footer-->
  <footer class="page-footer  blue darken-4">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">About Us</h5>
          <p class="grey-text text-lighten-4">UBRA is a Job Finder System by DMMMSU-MLUC to help
          people, graduates and working students find the suitable job for them.</p>
        </div>
        <div class="col l3 s12">
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
                      <input type="hidden" name="job_id[]" id="job_id" class="validate" value="<?php echo $_SESSION['job_id']; ?>" placeholder="Job ID" readonly>\
                      <div class="col s12">\
                      <div class="row">\
                          <div class="input-field col s10">\
                            <input placeholder="Job Qualification" name="jobquali[]" id="jobquali" type="text" class="validate">\
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

	  });
  </script>

  </body>
</html>
