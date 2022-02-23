<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Job Offer</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>

  <style>
    .material{
      display: inline-flex;
      vertical-align: top;
      margin-right: 10px;
   
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

    .prefix{
      color:#64b5f6;
    }

    .btn1{
      background-color:#64b5f6;
      width: 100%;
      display: inline-block;
      font-size:15px;
      font-weight: 500;
    }

    .job{
      font-size: 25px;
      font-weight: normal;
      text-transform: uppercase;
    }

    .card1{
      margin: 10px 20px;
    }

    .joblist{
      text-transform: uppercase;
      font-weight: bolder;
      font-size: 25px;
    }

    .page{
      text-align: center;
    }

    .active1{
      background:  #64b5f6 !important;
    }

    .ulol{
      background-color: #e3f2fd ;
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




<!--Part 1-->
<div class="container">
      <div class="card">
          <div class="card1">
            <form class="col s12">
              <div class="row">
                <div class="input-field col s12 m3">
                  <i class="material-icons prefix">search</i>
                  <input id="icon_prefix" type="text" class="validate" placeholder="Input Keywords Here..">
                </div>

                <div class="input-field col s12 m3">
                  <i class="material-icons prefix">location_on</i>
                  <select>
                    <option value="" disabled selected>All Location</option>
                    <option value="1">Local</option>
                    <option value="2">Overseas</option>
                  </select>
                </div>

                <div class="input-field col s12 m3">
                  <i class="material-icons prefix">work</i>
                  <select>
                    <option value="" disabled selected>All Job Specialization</option>
                    <option value="1">Option 1</option>
                    <option value="2">Option 2</option>
                  </select>
                </div>

                <div class="input-field col s12 m3">
                  <a class="waves-effect waves-effect blue lighten-2 btn-large btn1">Job Match</a>
                </div>

              </div>
            </form>
          </div>
      </div>   
</div>

<!--Part 2-->
<div class="container">
<div class="card">
    <div class="card horizontal ulol">
      <div class="card-stacked">
        <div class="card-content">
            <p class="center black-text joblist">Job Listing:</p>
            <p class="center blue-grey-text">0 Result</p>
        </div>
      </div>
    </div>
  </div>
</div>

<!--Part 3-->
<div class="card2">
  <!--Featured Jobs-->
  <div class="container">
        <!--Featured Jobs List-->
         <div class="row">
          <div class="col s12 m4">
            <div class="card hoverable">
              <div class="card-image">
                <img src="Engineers.jpg">
              </div>
              <div class="card-content">
                <p class="job">Civil Engineer</p>
                <i class="material material-icons">place</i>San Fernando City of La Union<br>
                <i class="material material-icons">business</i>DMMMSU-MLUC Human Resource<br>
                <i class="material material-icons">check_circle_outline</i>3 positions available<br><br>
                <p class="center"><a href="Details.html" class="waves-effect btn-flat">Show Details</a></p>
              </div>
            </div>
          </div>

         <div class="col s12 m4">
            <div class="card hoverable">
              <div class="card-image">
                <img src="Engineers.jpg">
              </div>
              <div class="card-content">
                <p class="job">Civil Engineer</p>
                <i class="material material-icons">place</i>San Fernando City of La Union<br>
                <i class="material material-icons">business</i>DMMMSU-MLUC Human Resource<br>
                <i class="material material-icons">check_circle_outline</i>3 positions available<br><br>
                <p class="center"><a href="Details.html" class="waves-effect btn-flat">Show Details</a></p>
              </div>
            </div>
          </div>

          <div class="col s12 m4">
            <div class="card hoverable">
              <div class="card-image">
                <img src="Engineers.jpg">
              </div>
              <div class="card-content">
                <p class="job">Civil Engineer</p>
                <i class="material material-icons">place</i>San Fernando City of La Union<br>
                <i class="material material-icons">business</i>DMMMSU-MLUC Human Resource<br>
                <i class="material material-icons">check_circle_outline</i>3 positions available<br><br>
                <p class="center"><a href="Details.html" class="waves-effect btn-flat">Show Details</a></p>
              </div>
            </div>
          </div>

          <div class="col s12 m4">
            <div class="card hoverable">
              <div class="card-image">
                <img src="Engineers.jpg">
              </div>
              <div class="card-content">
                <p class="job">Civil Engineer</p>
                <i class="material material-icons">place</i>San Fernando City of La Union<br>
                <i class="material material-icons">business</i>DMMMSU-MLUC Human Resource<br>
               <i class="material material-icons">check_circle_outline</i>3 positions available<br><br>
                <p class="center"><a href="Details.html" class="waves-effect btn-flat">Show Details</a></p>
              </div>
            </div>
          </div>

          <div class="col s12 m4">
            <div class="card hoverable">
              <div class="card-image">
                <img src="Engineers.jpg">
              </div>
              <div class="card-content">
                <p class="job">Civil Engineer</p>
                <i class="material material-icons">place</i>San Fernando City of La Union<br>
                <i class="material material-icons">business</i>DMMMSU-MLUC Human Resource<br>
                <i class="material material-icons">check_circle_outline</i>3 positions available<br><br>
                <p class="center"><a href="Details.html" class="waves-effect btn-flat">Show Details</a></p>
              </div>
            </div>
          </div>

          <div class="col s12 m4">
            <div class="card hoverable">
              <div class="card-image">
                <img src="Engineers.jpg">
              </div>
              <div class="card-content">
                <p class="job">Civil Engineer</p>
                <i class="material material-icons">place</i>San Fernando City of La Union<br>
                <i class="material material-icons">business</i>DMMMSU-MLUC Human Resource<br>
                <i class="material material-icons">check_circle_outline</i>3 positions available<br><br>
                <p class="center"><a href="Details.html" class="waves-effect btn-flat">Show Details</a></p>
              </div>
            </div>
          </div>

        </div>
  </div>
</div>

<!--Part 4-->
<div class="container">
  <ul class="pagination page">
    <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
    <li class=" waves-effect"><a href="#!">1</a></li>
    <li class=" waves-effect"><a href="#!">2</a></li>
    <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
  </ul>
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
