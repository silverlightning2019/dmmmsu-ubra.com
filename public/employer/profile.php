<?php
  session_start();
	if (!isset($_SESSION['emp_uname'])){
		header("location: ./");
	}
?>
<?php
  include 'database.php';

  $conn = new mysqli($servername, $username, $password,$dbname);

  if ($conn->connect_error) 
  {
    die("Connection failed: " . $conn->connect_error);
  }

  $sql = "SELECT * FROM employer WHERE emp_uname='{$_SESSION['emp_uname']}'";
  $result = $conn->query($sql);
  if ($result->num_rows > 0)
  {
    while($row = mysqli_fetch_assoc($result)){
?>
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
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="js/script.js"></script>

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

    .error{
      color: red;
    }

  </style>
</head>
<body class="body">

<!--Navigation Bar-->
  <nav class=" blue darken-4" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo"><span class="logo">UBRA</span></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="home.php">Home</a></li>
        <li><a href="profile.php">Company Profile</a></li>
        <li><a href="job-annoucements.php">Job Announcements</a></li>
        <li><a href="job-registered.php">Job Registered</a></li>
        <li><a href="logout.php"><i class="material-icons">logout</i></a></li>
      </ul>

      <ul id="nav-mobile" class="sidenav">
        <li><a href="home.php">Home</a></li>
        <li><a href="profile.php">Company Profile</a></li>
        <li><a href="job-annoucements.php">Job Announcements</a></li>
        <li><a href="job-registered.php">Job Registered</a></li>
        <li><a href="logout.php">Log Out</a></li>
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
                  <input type="hidden" id="emp_id" name="emp_id" value="<?php echo $row["emp_id"]; ?>">
                  <input placeholder="Username" id="emp_uname" type="text" class="validate" value="<?php echo $row["emp_uname"]; ?> " disabled>
                  <label for="emp_uname">Username</label>
                </div>
              </div>
              
              <p class="center">
                 <!-- Modal Trigger -->
                    <a class="blue waves-effect btn modal-trigger btn2" href="#modal1">Change Password</a>
                    <!-- Modal Structure -->
                    <div id="modal1" class="modal1 modal">
                      <div class="modal-content">
                        <h4>Change Password</h4>
                          <input type="hidden" id="emp_id" name="emp_id" value="<?php echo $row["emp_id"]; ?>">
                          <input type="hidden" id="emp_pass" name="emp_pass" value="<?php echo $row["emp_pass"]; ?>">
                          <div class="input-field col s12">
                            <input name="password1" id="password1" type="Password" class="validate">
                            <label for="password1">Old Password</label>
                          </div>
                          <div class="input-field col s12">
                            <input name="password2" id="password2" type="Password" class="validate">
                            <label for="password2">New Password</label>
                          </div>
                          <div class="input-field col s12">
                            <input name="password3" id="password3" type="Password" class="validate">
                            <label for="password3">Confirm New Password</label>
                          </div>
                          <p class="center">
                            <a id="chpass" name="chpass" class="btn waves-effect green"><i class="material-icons">save</i></a>
                            <a class="modal-close btn waves-effect red" ><i class="material-icons">cancel</i></a>
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
                    <input placeholder="Company Name" id="emp_name" type="text" class="validate" value="<?php echo $row["emp_name"]; ?> " disabled>
                    <label for="emp_name">Company Name</label>
                  </div>

                  <div class="input-field col s6">
                    <input placeholder="Company Brand" id="emp_brand" type="text" class="validate" value="<?php echo $row["emp_brand"]; ?> " disabled>
                    <label for="emp_brand">Company Brand</label>
                  </div>

                  <div class="input-field col s12">
                    <input placeholder="Tax Identification" id="tax_id" type="text" class="validate" value="<?php echo $row["tax_id"]; ?> " disabled>
                    <label for="tax_id">Tax Identification</label>
                  </div>

                  <div class="input-field col s6">
                    <input placeholder="Employer Type" id="emp_type" type="text" class="validate" value="<?php echo $row["emp_type"]; ?> " disabled>
                    <label for="emp_type">Employer Type</label>
                  </div>

                  <div class="input-field col s6">
                    <input placeholder="Employee's Number" id="emp_num" type="text" class="validate" value="<?php echo $row["emp_num"]; ?> " disabled>
                    <label for="emp_num">Employee's Number</label>
                  </div>

                   <div class="input-field col s4">
                    <input placeholder="Municipality" id="emp_municipal" type="text" class="validate" value="<?php echo $row["emp_municipal"]; ?> " disabled>
                    <label for="emp_municipal">Municipality</label>
                  </div>

                  <div class="input-field col s4">
                    <input placeholder="Province" id="emp_province" type="text" class="validate" value="<?php echo $row["emp_province"]; ?> " disabled>
                    <label for="emp_province">Province</label>
                  </div>

                  <div class="input-field col s4">
                    <input placeholder="Barangay" id="emp_barangay" type="text" class="validate" value="<?php echo $row["emp_barangay"]; ?> " disabled>
                    <label for="emp_barangay">Barangay</label>
                  </div>
              </form>
            </div>
          </div>

          <p class="center title1">Employer Contact Details</p><br>
             <div class="row">
                <form class="col s12">
                  <div class="row">
                    <div class="input-field col s6">
                      <input placeholder="Contact Person" id="emp_person" type="text" class="validate" value="<?php echo $row["emp_person"]; ?> " disabled>
                      <label for="emp_person">Contact Person</label>
                    </div>

                    <div class="input-field col s6">
                      <input placeholder="Position" id="emp_position" type="text" class="validate" value="<?php echo $row["emp_position"]; ?> " disabled>
                      <label for="emp_position">Position</label>
                    </div>

                    <div class="input-field col s4">
                      <input placeholder="Telephone Number" id="emp_telephone" type="text" class="validate" value="<?php echo $row["emp_telephone"]; ?> " disabled>
                      <label for="emp_telephone">Telephone Number</label>
                    </div>

                    <div class="input-field col s4">
                      <input placeholder="Mobile Number" id="emp_mobile" type="text" class="validate" value="<?php echo $row["emp_mobile"]; ?> " disabled>
                      <label for="emp_mobile">Mobile Number</label>
                    </div>

                    <div class="input-field col s4">
                      <input placeholder="Email Address" id="emp_email" type="email" class="validate" value="<?php echo $row["emp_email"]; ?> " disabled>
                      <label for="emp_email">Email Address</label>
                    </div>
                  </div>
                </form>
              </div>
               <p class="center">
                  <a id="editp" name="editp" class="btn waves-effect blue"><i class="material-icons">edit</i></a>
                  <a id="closep" name="closep" class="btn waves-effect red"><i class="material-icons">cancel</i></a>
                  <a id="updatep" name="updatep" class="btn waves-effect green"><i class="material-icons">update</i></a>
                </p>

        </div>
      </div>
    </div>
  </div>
</div>
<?php
  }
} 
?>
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
