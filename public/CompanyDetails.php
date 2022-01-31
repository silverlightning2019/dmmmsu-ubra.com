<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Details</title>

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

    .qualifications{
      font-weight: 200;
      font-size: 20px;
    }

    .job-title{
     margin: 0 auto;
     margin-bottom:15px !important;
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
        <h4 class="header center-align blue-grey-text">Details</h4>
        <h5 class="center-align light">See Details Here!</h5>
      </div>
    </div>
  </div>

<!--Details-->
<div class="container">
  <br>
  <div class="col s12 m7">
      <div class="card horizontal card1">
        <div class="card-stacked">
          <div class="card-content">
            <h3 class="center job-title">Job Title</h3><hr><br>
            <h4 class="job-title1">Job Qualification/s:</h4><br>
            <p class="left-align qualifications"> Qualifications </p>
            <p class="left-align qualifications"> Qualifications </p>
            <p class="left-align qualifications"> Qualifications </p>
            <p class="left-align qualifications"> Qualifications </p>
            <p class="left-align qualifications"> Qualifications </p><br>

            <h4 class="job-title1">Job Requirement/s:</h4><br>
            <p class="left-align qualifications"> Requirements </p>
            <p class="left-align qualifications"> Requirements </p>
            <p class="left-align qualifications"> Requirements </p>
            <p class="left-align qualifications"> Requirements </p><br>

            <h4 class="job-title1">Other Note/s:</h4><br>
            <p class="left-align qualifications"> Requirements </p>
            <br><br>
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
