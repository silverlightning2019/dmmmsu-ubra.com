<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Job Events</title>

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

    .title{
      margin-top: 5px !important;
      font-weight: bolder;
      text-transform: uppercase;
      font-size: 30px;
    }
    
    .title1{
      margin-bottom: 10px;
    }

    .article{
      text-align: justify;
      text-justify: inter-word;
    }

    .date{
      font-weight: bolder;
      font-size: 20px;
    }

    .events{
      font-weight: normal;
      font-size: 50px;
      text-transform: uppercase;
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



<!--Events-->
<div class="container">
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
            </article>
        </div>
        </div>
      </div>
    </div>

    <div class="col s12 m6">
      <div class="card card1">
        <div class="card-image">
          <img class="materialboxed" src="jobfair2.jpg">
          <div class="card-content">
            <h3 class="title">Job Events Name</h3>
            <h5 class="date">Date of the Event</h5>
            <article class="article blue-grey-text">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sed blandit libero volutpat sed. Praesent semper feugiat nibh sed pulvinar proin gravida. Scelerisque mauris pellentesque pulvinar pellentesque habitant morbi. Urna duis convallis convallis tellus id interdum velit. Sollicitudin aliquam ultrices sagittis orci a scelerisque purus semper. Imperdiet massa tincidunt nunc pulvinar sapien. Interdum velit laoreet id donec ultrices tincidunt arcu non. Ut sem viverra aliquet eget sit amet. Ut eu sem integer vitae justo. Id consectetur purus ut faucibus pulvinar elementum.
            </article>
        </div>
        </div>
      </div>
    </div>
  </div>
</div>


<!--Footer-->
<?php
include('footer.php');
?>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>

  </body>
</html>
