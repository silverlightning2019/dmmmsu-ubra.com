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
    <div class="nav-wrapper container"><a id="logo-container" href="home.php" class="brand-logo"><span class="logo">UBRA</span></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="admin-dashboard.php"><i class="material-icons">home</i></a></li>
        <li><a href="user.php"><i class="material-icons">manage_accounts</i></a></li>
        <li><a href="admin-company.php"><i class="material-icons">supervised_user_circle</i></a></li>
        <li><a href="#"><i class="material-icons">logout</i></a></li>
      </ul>

      <ul id="nav-mobile" class="sidenav">
        <li><a href="admin-dashboard.php">Home</a></li>
        <li><a href="user.php">Manage User Account</a></li>
        <li><a href="admin-company.php">Manage Company Account</a></li>
        <li><a href="#">Log Out</a></li>
      </ul>
      <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons icon">menu</i></a>
    </div>
  </nav>
<!--End-->


<!--Banner-->
  <div class="section no-pad-bot work" id="index-banner">
    <div class="container">
      <h4 class="header left-align blue-grey-text">Welcome, <span class="log">Admin</span></h4>
      <h5 class="col s12 light">Manage User, Employer Accounts and create Reports.</h5><br>
    </div>
  </div>

<!--Manage-->
<div class="container">
<div class="row">
<div class="container">
    <div class="col s12 m6">
      <a href="user.php">
      <div class="card hoverable">
        <div class="card-image">
          <img src="img/useraccount.png">
        </div>
        <div class="card-content">
          <p class="center abc">Manage User Accounts</p><br>
        </div>
      </div>
      </a>
    </div>

    <div class="col s12 m6">
      <a href="AdminCompany.php">
      <div class="card hoverable">
        <div class="card-image">
          <img src="img/employer.png">
        </div>
        <div class="card-content">
          <p class="center abc">Manage Employer Accounts</p><br>
        </div>
      </div>
      </a>
    </div>
  </div>
  </div>
</div>

<!--Banner2-->
  <div class="section no-pad-bot work" id="index-banner">
    <div class="container">
      <h4 class="header left-align blue-grey-text">See Status Here!</h4>
      <h5 class="col s12 light">Here we list our site stats and how many people we've helped find a job and companies have found recruits.</h5><br>
    </div>
  </div>

<div class="container">
<div class="row">
        <div class="col s12 m4">
            <div class="card hoverable">
              <div class="icon-block icon">
                <h2 class="center light-blue-text"><i class="material-icons">groups</i></h2>
                  <p class="number center">100</p>
                  <h5 class="center blue-grey-text">Registered User</h5><br>
            </div>
          </div>
      </div>

        <div class="col s12 m4">
            <div class="card hoverable">
              <div class="icon-block icon">
                <h2 class="center light-blue-text"><i class="material-icons ">engineering</i></h2>
                   <p class="number center">50</p>
                  <h5 class="center blue-grey-text">Applicants</h5><br> 
            </div>
          </div>
      </div>

      <div class="col s12 m4">
            <div class="card hoverable">
              <div class="icon-block icon">
                <h2 class="center light-blue-text"><i class="material-icons">work_history</i></h2>
                  <p class="number center">14</p>
                  <h5 class="center blue-grey-text">Match Jobs</h5><br>
            </div>
          </div>
      </div>

      <div class="col s12 m4">
            <div class="card hoverable">
              <div class="icon-block icon">
                <h2 class="center light-blue-text"><i class="material-icons">business</i></h2>
                  <p class="number center">1</p>
                  <h5 class="center blue-grey-text">Registered Company</h5><br>
            </div>
          </div>
      </div>

      <div class="col s12 m4">
            <div class="card hoverable">
              <div class="icon-block icon">
                <h2 class="center light-blue-text"><i class="material-icons">post_add</i></h2>
                  <p class="number center">145</p>
                  <h5 class="center blue-grey-text">Jobs Posted</h5><br>
            </div>
          </div>
      </div>

      <div class="col s12 m4">
            <div class="card hoverable">
              <div class="icon-block icon">
                <h2 class="center light-blue-text"><i class="material-icons ">task</i></h2>
                   <p class="number center">50</p>
                  <h5 class="center blue-grey-text">Jobs Filled</h5><br> 
            </div>
          </div>
      </div>
       

      </div>
      <br>
  </div>
</div>
</div>

  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>

  </body>
</html>
