<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>My Applications</title>

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

    .table{
      margin-bottom: 164px !important;
      margin-top: 20px;
      font-weight: 400;
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
        <li><a href="UserDashboard.php">Home</a></li>
        <li><a href="UserJobOfferPage.php">Job Offers</a></li>
        <li><a href="UserJobEvents.php">Job Events</a></li>
        <li><a href="UserApplication.php">My Applications</a></li>
        <li><a href="UserProfile.php">Profile</a></li>
        <li><a href="LogIn.php">Log Out</a></li>
      </ul>

      <ul id="nav-mobile" class="sidenav">
        <li><a href="UserDashboard.php">Home</a></li>
        <li><a href="UserJobOfferPage.php">Job Offers</a></li>
        <li><a href="UserJobEvents.php">Job Events</a></li>
        <li><a href="UserApplication.php">My Applications</a></li>
        <li><a href="UserProfile.php">Profile</a></li>
        <li><a href="LogIn.php">Log Out</a></li>
      </ul>
      <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons icon">menu</i></a>
    </div>
  </nav>
<!--End-->


<!--Table-->
<div class="container">
  <table class="responsive-table table">
            <thead>
              <tr>
                  <th>Company/Employer</th>
                  <th>Position</th>
                  <th>Date Apply</th>
                  <th>Status</th>
                  <th>Action</th>
              </tr>
            </thead>

            <tbody>
              <tr>
                <td>DMMMSU-MLUC HR</td>
                <td>Engineer</td>
                <td>Date</td>
                <td>Pending</td>
                <td>
                  <a class="btn-small waves-effect waves-light red"><i class="material-icons">delete</i></a>
                </td>
              </tr>

              <tr>
                <td>DMMMSU-MLUC HR</td>
                <td>Engineer</td>
                <td>Date</td>
                <td>Pending</td>
                <td>
                  <a class="btn-small waves-effect waves-light red"><i class="material-icons">delete</i></a>
                </td>
              </tr>

              <tr>
                <td>DMMMSU-MLUC HR</td>
                <td>Engineer</td>
                <td>Date</td>
                <td>Pending</td>
                <td>
                  <a class="btn-small waves-effect waves-light red"><i class="material-icons">delete</i></a>
                </td>
              </tr> 

            </tbody>
          </table>
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
        <div class="col l3 s12">
          <h5 class="white-text">Categories</h5>
          <ul>
            <li><a class="white-text" href="#!"><i class="material-icons material1">arrow_right</i>HealthCare</a></li>
            <li><a class="white-text" href="#!"><i class="material-icons material1">arrow_right</i>Construction</a></li>
            <li><a class="white-text" href="#!"><i class="material-icons material1">arrow_right</i>Educational</a></li>
            <li><a class="white-text" href="#!"><i class="material-icons material1">arrow_right</i>Restaurant/Food Service</a></li>
            <li><a class="white-text" href="#!"><i class="material-icons material1">arrow_right</i>Sales & Marketing</a></li>
            <li><a class="white-text" href="#!"><i class="material-icons material1">arrow_right</i>IT Solution</a></li>
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
