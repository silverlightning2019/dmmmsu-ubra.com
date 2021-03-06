<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Applicants</title>

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
      <h4 class="header left-align blue-grey-text">Applicants</h4>
      <h5 class="left-align light">Manage your Job Applicants Here!</h5>
    </div>
  </div>

<!--Search-->
<div class="container">
  <p class="left-align">
    <a class="waves-effect waves-light btn blue"><i class="material-icons left">search</i>Search Applicants Here</a>
  </p>
</div>

<!--Applicants-->
<div class="container">
<br>
 <table class="responsive-table highlight tables">
        <thead class="theads">
          <tr>
              <th>First Name</th>
              <th>Middle Name</th>
              <th>Last Name</th>
              <th>Position</th>
              <th>Date Apply</th>
              <th>File</th>
              <th>Action</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td>Kenneth Jhon</td>
            <td>Robles</td>
            <td>Lorenzo</td>
            <td>Technician</td>
            <td>January 20, 2022</td>
            <td>files here</td>
            <td>
              <a class="btn-floating waves-effect blue"><i class="material-icons">visibility</i></a>
              <a class="btn-floating waves-effect red"><i class="material-icons">delete</i></a>
            </td>
          </tr>

          <tr>
            <td>Kenneth Jhon</td>
            <td>Robles</td>
            <td>Lorenzo</td>
            <td>Technician</td>
            <td>January 20, 2022</td>
            <td>files here</td>
            <td>
              <a class="btn-floating waves-effect blue"><i class="material-icons">visibility</i></a>
              <a class="btn-floating waves-effect red"><i class="material-icons">delete</i></a>
            </td>
          </tr>

          <tr>
            <td>Kenneth Jhon</td>
            <td>Robles</td>
            <td>Lorenzo</td>
            <td>Technician</td>
            <td>January 20, 2022</td>
            <td>files here</td>
            <td>
              <a class="btn-floating waves-effect blue"><i class="material-icons">visibility</i></a>
              <a class="btn-floating waves-effect red"><i class="material-icons">delete</i></a>
            </td>
          </tr>
        </tbody>
      </table><br><br><br>
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
      <a class="orange-text text-lighten-3" href="#">Copyright ?? 2022 UBRA. All rights reserved.</a>
      </div>
    </div>
  </footer>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>

  </body>
</html>
