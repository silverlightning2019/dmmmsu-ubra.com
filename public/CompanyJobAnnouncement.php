<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Job Announcement</title>

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
      margin-bottom: -100px;
    }

    .card1{
      margin-top: -25px;
    }
  </style>
</head>
<body class="body">

<!--Navigation Bar-->
  <nav class=" blue darken-4" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo"><span class="logo">UBRA</span></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="CompanyDashboard.php">Home</a></li>
        <li><a href="CompanyProfile.php">Company Profile</a></li>
        <li><a href="CompanyJobAnnouncement.php">Job Announcements</a></li>
        <li><a href="CompanyJobPosted.php">Job Registered</a></li>
        <li><a href="CompanyLogIn.php"><i class="material-icons">logout</i></a></li>
      </ul>

      <ul id="nav-mobile" class="sidenav">
        <li><a href="CompanyDashboard.php">Home</a></li>
        <li><a href="CompanyProfile.php">Company Profile</a></li>
        <li><a href="CompanyJobAnnouncement.php">Job Announcements</a></li>
        <li><a href="CompanyJobPosted.php">Job Registered</a></li>
        <li><a href="CompanyLogIn.php">Log Out</a></li>
      </ul>
      <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons icon">menu</i></a>
    </div>
  </nav>
<!--End-->

<!--Banner-->
  <div class="section no-pad-bot work" id="index-banner">
    <div class="container">
      <div class="row">
        <h4 class="header center-align blue-grey-text">Job Announcement!</h4>
        <h5 class="center-align light">Manage your Job Announcements Here!</h5>
      </div>
    </div>
  </div>

<!--Posted Announcement-->
<div class="container">
  <br>
  <div class="row">
    <div class="col s12 m6">
      <div class="card card1">
        <div class="card-image">
          <img class="materialboxed" src="jobfair.jpg">
          <div class="card-content">
            <h3 class="title">Job Events Name</h3>
            <h5 class="date">Date of the Event</h5>
            <article class="article blue-grey-text">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sed blandit libero volutpat sed. Praesent semper feugiat nibh sed pulvinar proin gravida. Scelerisque mauris pellentesque pulvinar pellentesque habitant morbi. Urna duis convallis convallis tellus id interdum velit. Sollicitudin aliquam ultrices sagittis orci a scelerisque purus semper. Imperdiet massa tincidunt nunc pulvinar sapien. Interdum velit laoreet id donec ultrices tincidunt arcu non. Ut sem viverra aliquet eget sit amet. Ut eu sem integer vitae justo. Id consectetur purus ut faucibus pulvinar elementum.
            </article><br>
            <p class="center-align">
              <a href="CompanyAnnouncement.php" class="btn waves-effect blue"><i class="material-icons">edit</i></a>
              <a class="btn waves-effect red"><i class="material-icons">delete</i></a>
            </p>
        </div>
        </div>
      </div>
    </div>
  </div>
</div><br>
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
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>

  </body>
</html>
