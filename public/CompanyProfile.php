<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Company Profile</title>

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
    
    .material1{
      display: inline-flex;
      vertical-align: top;
      margin-right: 10px;
      margin-bottom: 5px;
    }

    .title1{
      background-color: whitesmoke;
      padding: 10px 10px !important;
      text-transform: uppercase;
      font-weight: bolder;
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
<br>
<!--Profile-->
<div class="container">
 <div class="col s12 m7">
    <div class="card horizontal">
      <div class="card-stacked">
        <div class="card-content">
          <p class="center title1">Employer Account Details</p><br>
            <div class="row">
            <form class="col s12">
              <div class="row">
                <div class="input-field col s6">
                  <input placeholder="Username" id="username" type="text" class="validate">
                  <label for="username">Username</label>
                </div>
                <div class="input-field col s6">
                  <input placeholder="Password" id="password" type="password" class="validate">
                  <label for="password">Password</label>
                </div>
              </div>

              <p class="center">
                 <!-- Modal Trigger -->
                    <a class="blue waves-effect btn modal-trigger btn2" href="#modal1">Change Password</a>
                    <!-- Modal Structure -->
                    <div id="modal1" class="modal1 modal">
                      <div class="modal-content">
                        <h4>Change Password</h4>
                          <div class="input-field col s12">
                            <input id="password1" type="Password" class="validate">
                            <label for="password1">Old Password</label>
                          </div>
                          <div class="input-field col s12">
                            <input id="password2" type="Password" class="validate">
                            <label for="password2">New Password</label>
                          </div>
                          <div class="input-field col s12">
                            <input id="password3" type="Password" class="validate">
                            <label for="password3">Confirm New Password</label>
                          </div>
                          <p class="center">
                            <a class="btn waves-effect green"><i class="material-icons">save</i></a>
                            <a class="btn waves-effect red"><i class="material-icons">cancel</i></a>
                        </p>
                      </div>
                    </div>
              </p>
            </form>
          </div>

          <p class="center title1">Employer Other Details</p><br>
            <div class="row">
              <form class="col s12">
                <div class="row">
                  <div class="input-field col s6">
                    <input placeholder="Company Name" id="cname" type="text" class="validate">
                    <label for="cname">Company Name</label>
                  </div>

                  <div class="input-field col s6">
                    <input placeholder="Company Brand" id="cbrand" type="text" class="validate">
                    <label for="cbrand">Company Brand</label>
                  </div>

                  <div class="input-field col s12">
                    <input placeholder="Tax Identification" id="tax" type="text" class="validate">
                    <label for="tax">Tax Identification</label>
                  </div>

                  <div class="input-field col s6">
                    <input placeholder="Employer Type" id="type" type="text" class="validate">
                    <label for="type">Employer Type</label>
                  </div>

                  <div class="input-field col s6">
                    <input placeholder="Employee's Number" id="number" type="text" class="validate">
                    <label for="number">Employee's Number</label>
                  </div>

                   <div class="input-field col s4">
                    <input placeholder="Municipality" id="municipal" type="text" class="validate">
                    <label for="municipal">Municipality</label>
                  </div>

                  <div class="input-field col s4">
                    <input placeholder="Province" id="province" type="text" class="validate">
                    <label for="province">Province</label>
                  </div>

                  <div class="input-field col s4">
                    <input placeholder="Barangay" id="barangay" type="text" class="validate">
                    <label for="barangay">Barangay</label>
                  </div>
              </form>
            </div>
          </div>

          <p class="center title1">Employer Contact Details</p><br>
             <div class="row">
                <form class="col s12">
                  <div class="row">
                    <div class="input-field col s6">
                      <input placeholder="Contact Person" id="cperson" type="text" class="validate">
                      <label for="cperson">Contact Person</label>
                    </div>

                    <div class="input-field col s6">
                      <input placeholder="Position" id="position" type="text" class="validate">
                      <label for="position">Position</label>
                    </div>

                    <div class="input-field col s4">
                      <input placeholder="Telephone Number" id="telnum" type="text" class="validate">
                      <label for="telnum">Telephone Number</label>
                    </div>

                    <div class="input-field col s4">
                      <input placeholder="Mobile Number" id="mobnum" type="text" class="validate">
                      <label for="mobnum">Mobile Number</label>
                    </div>

                    <div class="input-field col s4">
                      <input placeholder="Email Address" id="email1" type="email" class="validate">
                      <label for="email1">Email Address</label>
                    </div>
                  </div>
                </form>
              </div>
               <p class="center">
                  <a class="btn waves-effect blue"><i class="material-icons">edit</i></a>
                  <a class="btn waves-effect red"><i class="material-icons">cancel</i></a>
                  <a class="btn waves-effect green"><i class="material-icons">update</i></a>
                </p>

        </div>
      </div>
    </div>
  </div>
</div>
<br>
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
