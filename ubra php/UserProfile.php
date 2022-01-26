<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Profile</title>

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


    .pi{
      font-size: 20px;
      font-weight: bold;
    }

    .card{
      background-color: #e3f2fd;
    }

    .card1{
      background-color: white;
    }

    .modal1{
      height: 225px !important;
    }

    .tab{
      margin-top: 10px;
    }

    .file{
      background-color:#039be5;
    }

    .btn2{
      background-color:#039be5 ;
      float: right;
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




<!--PROFILE-->
<div class="container">
      <div class="col s12">
        <ul class="tab tabs">
          <li class="tab col s3"><a href="#test1">Account</a></li>
          <li class="tab col s3"><a href="#test2">Personal</a></li>
          <li class="tab col s3"><a href="#test3">Educational</a></li>
          <li class="tab col s3"><a href="#test4">Work</a></li>
          <li class="tab col s3"><a href="#test5">Upload</a></li>
        </ul>
  

<!--Tab 1-->
<div id="test1" class="col s12">
        <div class="card card horizontal">
          <div class="card-stacked">
            <div class="card-content">
              <p class="pi center">Account Information</p>
            </div>
          </div>
        </div>

        <div class="row">
        <div class="col s12">
          <div class="card1 card horizontal">
            <div class="card-stacked">
              <div class="card-content">

                <form class="col s12">
                  <div class="row">
                    <div class="input-field col s4">
                      <input id="first_name" type="text" class="validate">
                      <label for="first_name">First Name</label>
                    </div>

                    <div class="input-field col s4">
                      <input id="middle_name" type="text" class="validate">
                      <label for="middle_name">Middle Name</label>
                    </div>

                     <div class="input-field col s4">
                      <input id="last_name" type="text" class="validate">
                      <label for="last_name">Last Name</label>
                    </div>

                    <div class="input-field col s6">
                      <input id="email" type="text" class="validate">
                      <label for="email">Email Address</label>
                    </div>

                    <div class="input-field col s6">
                      <input id="user_name" type="text" class="validate">
                      <label for="user_name">User Name</label>
                    </div>

                      <a class="btn btn-small waves-effect  blue"><i class="material-icons">edit</i></a>
                      <a class="btn btn-small waves-effect  blue"><i class="material-icons">update</i></a> 

                    <!-- Modal Trigger -->
                    <a class="waves-effect btn modal-trigger btn2" href="#modal2">Change Password</a>
                    <!-- Modal Structure -->
                    <div id="modal2" class="modal1 modal">
                      <div class="modal-content">
                        <h4>Change Password</h4>
                          <div class="input-field col s4">
                            <input id="password1" type="Password" class="validate">
                            <label for="password1">Old Password</label>
                          </div>
                          <div class="input-field col s4">
                            <input id="password2" type="Password" class="validate">
                            <label for="password2">New Password</label>
                          </div>
                          <div class="input-field col s4">
                            <input id="password3" type="Password" class="validate">
                            <label for="password3">Confirm New Password</label>
                          </div>
                          <p class="center">
                          <a class="waves-effect blue btn">Save</a>
                          <a class="waves-effect red btn">Cancel</a>
                        </p>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
     </div>
   </div>
  </div>

<!--Tab 2-->
<div id="test2" class="col s12">
        <div class="card card horizontal">
          <div class="card-stacked">
            <div class="card-content">
              <p class="pi center">Personal Information</p>
            </div>
          </div>
        </div>

        <div class="row">
        <div class="col s12">
          <div class="card1 card horizontal">
            <div class="card-stacked">
              <div class="card-content">

                <form class="col s12">
                  <div class="row">
                    <div class="input-field col s6">
                      <input id="province" type="text" class="validate">
                      <label for="province">Province</label>
                    </div>

                    <div class="input-field col s6">
                      <input id="municipality" type="text" class="validate">
                      <label for="municipality">Municipality</label>
                    </div>

                     <div class="input-field col s6">
                      <input id="barangay" type="text" class="validate">
                      <label for="barangay">Barangay</label>
                    </div>

                    <div class="input-field col s6">
                      <input id="house_number" type="text" class="validate">
                      <label for="house_number">House/Block/Number</label>
                    </div>

                     <div class="input-field col s4">
                      <input id="bday" type="text" class="datepicker">
                      <label for="bday">Birthday</label>
                    </div>

                    <div class="input-field col s4">
                      <input id="age" type="text" class="validate">
                      <label for="age">Age</label>
                    </div>

                    <div class="input-field col s4">
                      <input id="contact" type="text" class="validate">
                      <label for="contact">Contact</label>
                    </div>

                    <div class="input-field col s4">
                      <select>
                        <option value="" disabled selected>Choose your option</option>
                        <option value="1">Male</option>
                        <option value="2">Female</option>
                      </select>
                      <label>Sex</label>
                    </div>
                    
                    <div class="input-field col s4">
                      <select>
                        <option value="" disabled selected>Choose your option</option>
                        <option value="1">Single</option>
                        <option value="2">Married</option>
                        <option value="2">Widowed</option>
                        <option value="2">Separated</option>
                        <option value="2">Live In</option>
                      </select>
                      <label>Civil Status</label>
                    </div>

                    <div class="input-field col s4">
                      <select>
                        <option value="" disabled selected>Choose your option</option>
                        <option value="1">Employed</option>
                        <option value="2">Unemployed</option>
                      </select>
                      <label>Employment Status</label>
                    </div>

                      <a class="btn btn-small waves-effect blue"><i class="material-icons">edit</i></a>
                      <a class="btn btn-small waves-effect blue"><i class="material-icons">update</i></a>
                  </div>
                </form>
              </div>
            </div>
          </div>
     </div>
   </div>
  </div>  
</div>

<!--Tab 3-->
<div id="test3" class="col s12">
        <div class="card card horizontal">
          <div class="card-stacked">
            <div class="card-content">
              <p class="pi center">Educational Information</p>
            </div>
          </div>
        </div>

        <div class="row">
        <div class="col s12">
          <div class="card1 card horizontal">
            <div class="card-stacked">
              <div class="card-content">

                <form class="col s12">
                  <div class="row">
                    <div class="input-field col s6">
                      <input type="email" name="email" class="validate">
                      <label>Name of School</label>
                    </div>

                    <div class="input-field col s6">
                      <input type="email" name="email" class="validate">
                      <label>Basic Education/Degree/Course</label>
                    </div>
                        
                    <div class="input-field col s6">
                      <input type="email" name="email" class="validate" placeholder="Year">
                      <label>From</label>
                    </div>
                      
                    <div class="input-field col s6">
                      <input type="email" name="email" class="validate" placeholder="Year">
                      <label>To</label>
                    </div>
                          
                    <div class="input-field col s6">
                      <input type="email" name="email" class="validate">
                      <label>Highest Level/Unit Earned</label>
                    </div>

                    <div class="input-field col s6">
                      <input type="email" name="email" class="validate" placeholder="Year">
                      <label>Year Graduated</label>
                    </div>

                    <div class="input-field col s12">
                      <input type="email" name="email" class="validate">
                      <label>Scholarship/Academic Honors Received</label>
                    </div>

                      <a class="btn btn-small waves-effect blue"><i class="material-icons">edit</i></a>
                      <a class="btn btn-small waves-effect blue"><i class="material-icons">update</i></a>
                  </div>
                </form>
              </div>
            </div>
          </div>
     </div>
   </div>
  </div>  
</div>

<!--Tab 4-->
<div id="test4" class="col s12">
<div class="container">
<div class="card card horizontal">
          <div class="card-stacked">
            <div class="card-content">
              <p class="pi center">Work Information</p>
            </div>
          </div>
        </div>

        <div class="row">
        <div class="col s12">
          <div class="card1 card horizontal">
            <div class="card-stacked">
              <div class="card-content">

                <form class="col input-field s12">
                  <div class="row">
                    <div class="input-field col s6">
                       <input type="text" class="datepicker" placeholder="mm/dd/yy">
                      <label>From</label>
                    </div>

                    <div class="input-field col s6">
                       <input type="text" class="datepicker" placeholder="mm/dd/yy">
                      <label>To</label>
                    </div>

                    <div class="input-field col s6">
                      <input type="email" name="email" class="validate">
                      <label>Position Title</label>
                    </div>

                    <div class="input-field col s6">
                      <input type="email" name="email" class="validate">
                      <label>Department/Agency/Office/Company</label>
                    </div>

                    <div class="input-field col s12">
                      <input type="email" name="email" class="validate">
                      <label>Status Appointment</label>
                    </div>


                      <a class="btn btn-small waves-effect blue"><i class="material-icons">edit</i></a>
                      <a class="btn btn-small waves-effect blue"><i class="material-icons">update</i></a>
                  </div>
                </form>
              </div>
            </div>
          </div>
     </div>
   </div>
  </div>  
</div>

<!--Tab 5-->
<div class="container">
<div id="test5" class="col s12">
   <div class="card card horizontal">
          <div class="card-stacked">
            <div class="card-content">
              <p class="pi center">Upload Your Curriculum Vitar Here</p>
            </div>
          </div>
        </div>

        <div class="row">
        <div class="col s12">
          <div class="card1 card horizontal">
            <div class="card-stacked">
              <div class="card-content">

                <form class="col s12">
                  <div class="file-field input-field">
                    <div class="btn file">
                      <span>File</span>
                      <input type="file">
                    </div>
                    <div class="file-path-wrapper">
                      <input class="file-path validate" type="text" placeholder="Upload Here">
                    </div>
                  </div>

                      <a class="btn btn-small waves-effect blue"><i class="material-icons">visibility</i></a>
                      <a class="btn btn-small waves-effect blue"><i class="material-icons">delete</i></a>
                </form>
              </div>
            </div>
          </div>
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
