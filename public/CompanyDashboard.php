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
    .logo{
      color:#64b5f6;
      font-weight: bolder;
      text-transform: uppercase;
    }

    .log{
      color:#64b5f6;
       text-transform: uppercase;
    }
    
    .header{
      font-weight: 600;
    }

    .abc{
      font-weight: 900;
      font-size: 15px;
    }

    .abcd{
      font-weight: 500;
      font-size: 15px;
      text-transform: uppercase;
    }

    .material1{
      display: inline-flex;
      vertical-align: top;
      margin-right: 10px;
      margin-bottom: 5px;
    }

    .icon{
      padding: 5px;
    }

    .number{
      color: #0d47a1;
      font-weight: bolder;
      font-size: 40px;
      text-align: center;
      margin: 0 auto;
    }

    .color1{
      background: #e3f2fd;
      padding-top: 10px;
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

    .btn-flat{
      background-color: #e0e0e0 ;
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
      <h4 class="header left-align blue-grey-text">Welcome, <span class="log">DMMMSU-MLUC</span></h4>
      <h5 class="col s12 light">Start To Hire, Post and Help People .</h5>
    </div>
  </div>

<!--Manage-->
<div class="container">
<div class="row">

    <div class="col s12 m4">
      <a href="CompanyAnnouncement.php">
      <div class="card hoverable">
        <div class="card-image">
          <img src="img/applicants.png">
          <span class="card-title">Card Title</span>
        </div>
        <div class="card-content">
          <p class="center abc">Post/Edit Job Announcement/s</p><br>
          <p class="center blue-grey-text abcd">Post Now!</p>
        </div>
      </div>
      </a>
    </div>

    <div class="col s12 m4">
      <a href="CompanyJobRegistration.php">
      <div class="card hoverable">
        <div class="card-image">
          <img src="img/offer.png">
          <span class="card-title">Card Title</span>
        </div>
        <div class="card-content">
          <p class="center abc">Post/Edit Job Registration</p><br>
          <p class="center blue-grey-text abcd">Post Now!</p>
        </div>
      </div>
      </a>
    </div>

    <div class="col s12 m4">
      <a href="CompanyApplicants.php">
      <div class="card hoverable">
        <div class="card-image">
          <img src="img/announce.png">
          <span class="card-title">Card Title</span>
        </div>
        <div class="card-content">
          <p class="center abc">Manage Applicants</p><br>
          <p class="center blue-grey-text abcd">Manage Here!</p>
        </div>
      </div>
    </a>
    </div>

  </div><br>
</div>


<!--Banner2-->
<div class="color1">
  <div class="section no-pad-bot work" id="index-banner">
    <div class="container">
      <h4 class="header left-align blue-grey-text">See Your Status Here!</h4>
        <h5 class="col s12 light">List of your stats and how many people you've been help find a job.</h5>
    </div>
  </div>

<!--Company Stats-->
<div class="container">
      <div class="row">
        <div class="col s12 m3">
            <div class="card hoverable">
              <div class="icon-block icon">
                <h2 class="center light-blue-text"><i class="material-icons ">task</i></h2>
                   <p class="number center">50</p>
                  <h5 class="center blue-grey-text">Jobs Filled</h5><br> 
            </div>
          </div>
      </div>

      <div class="col s12 m3">
            <div class="card hoverable">
              <div class="icon-block icon">
                <h2 class="center light-blue-text"><i class="material-icons">groups</i></h2>
                  <p class="number center">100</p>
                  <h5 class="center blue-grey-text">Applicants</h5><br>
            </div>
          </div>
      </div>

      <div class="col s12 m3">
            <div class="card hoverable">
              <div class="icon-block icon">
                <h2 class="center light-blue-text"><i class="material-icons">campaign</i></h2>
                  <p class="number center">1</p>
                  <h5 class="center blue-grey-text">Job Announcement</h5><br>
            </div>
          </div>
      </div>

      <div class="col s12 m3">
            <div class="card hoverable">
              <div class="icon-block icon">
                <h2 class="center light-blue-text"><i class="material-icons">post_add</i></h2>
                  <p class="number center">145</p>
                  <h5 class="center blue-grey-text">Jobs Posted</h5><br>
            </div>
          </div>
      </div>
      </div>
      <br>
  </div>
</div>
</div>

<!--Banner3-->
<div class="section no-pad-bot work" id="index-banner">
    <div class="container">
      <h4 class="header left-align blue-grey-text">Recent Posted Jobs!</h4>
    </div>
  </div>
<!--Posted Jobs-->
<div class="container">
<div class="row">
  <div class="col s12 m4">
    <div class="card hoverable">
      <div class="card-image">
        <img src="img/dmmmsu.png">
      </div>
      <div class="card-content">
        <p class="job">Civil Engineer</p>
          <i class="material material-icons">place</i>San Fernando City of La Union<br>
          <i class="material material-icons">business</i>DMMMSU-MLUC Human Resource<br>
          <i class="material material-icons">check_circle_outline</i>3 positions available<br><br>
          <p class="center-align">
              <a href="CompanyDetails.php" class="btn waves-effect blue"><i class="material-icons">info</i></a>
              <a href="CompanyJobRegistration.php" class="btn waves-effect blue"><i class="material-icons">edit</i></a>
              <a class="btn waves-effect red"><i class="material-icons">delete</i></a>
          </p>
      </div>
    </div>
  </div>
</div><br>     
</div>

<!--Banner4-->
<div class="color1">
<div class="section no-pad-bot work" id="index-banner">
    <div class="container">
      <h4 class="header left-align blue-grey-text">Recent Posted Announcement!</h4>
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

<!--Banner 4-->
<div class="section no-pad-bot work" id="index-banner">
    <div class="container">
      <h4 class="header left-align blue-grey-text">Recent Applying Applicants!</h4>
    </div>
  </div>
<!--Applicants-->
<div class="container">
<br>
 <table class="responsive-table">
        <thead>
          <tr>
              <th>Name</th>
              <th>Position</th>
              <th>Date Apply</th>
              <th>File</th>
              <th>Action</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td>Kenneth Lorenzo</td>
            <td>Technician</td>
            <td>January 20, 2022</td>
            <td>files here</td>
            <td>
              <a class="btn-floating waves-effect blue"><i class="material-icons">visibility</i></a>
              <a class="btn-floating waves-effect red"><i class="material-icons">delete</i></a>
            </td>
          </tr>

          <tr>
            <td>Kenneth Lorenzo</td>
            <td>Technician</td>
            <td>January 20, 2022</td>
            <td>files here</td>
            <td>
              <a class="btn-floating waves-effect blue"><i class="material-icons">visibility</i></a>
              <a class="btn-floating waves-effect red"><i class="material-icons">delete</i></a>
            </td>
          </tr>

          <tr>
            <td>Kenneth Lorenzo</td>
            <td>Technician</td>
            <td>January 20, 2022</td>
            <td>files here</td>
            <td>
              <a class="btn-floating waves-effect blue"><i class="material-icons">visibility</i></a>
              <a class="btn-floating waves-effect red"><i class="material-icons">delete</i></a>
            </td>
          </tr>
        </tbody>
      </table><br><br>
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
