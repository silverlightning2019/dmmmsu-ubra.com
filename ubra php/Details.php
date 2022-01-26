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
    .body{
      background:#e3f2fd;
    }

    .logo{
      color:#64b5f6;
      font-weight: bolder;
      text-transform: uppercase;
    }

    .img{
      width: 150px;
      height: 100px;
      margin: 50px 40px;
      float: right;
    }

    .material{
      display: inline-flex;
      vertical-align: top;
      margin-right: 10px;
    }

    .job-title{
     margin: 0 auto;
     margin-bottom:15px !important;
    }

    .job-title1{
      font-size: 25px;
     margin: 0 auto;
     font-weight: bolder;
    }

   

    .qualifications{
      font-weight: 200;
      font-size: 20px;
    }

    .button{
      height: 50px;
      font-size: 25px;
    }

    .btn1{
      font-weight: 900;
      width: 200px;
      height: 50px;
    }

    .reg{
        color:#64b5f6;
        font-weight: bold;
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


<!--Details-->
<div class="container">
  <br>
  <div class="col s12 m7">
      <div class="card horizontal">
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
            <br><hr><br>

            <!--Modal Trigger-->
            <p class="center">
              <button class="waves-effect blue btn modal-trigger btn1" href="#modal3">Apply Now</button>
            </p>
               <!--Modal Structure-->
                    <div id="modal3" class="modal">
                      <div class="modal-content">
                        <h3 class="center reg">UBRA</h3>
                        <p class="center black-text">You Apply Successfully!</p><br>
                          <div class="modal-footer">
                          <a href="#!" class="modal-close waves-effect waves-green btn-flat">Ok</a>
                        </div>
                      </div>
                    </div>
          </div>
        </div>
      </div>
    </div><br>
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
