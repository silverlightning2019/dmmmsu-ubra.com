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
        <li><a href="AdminDashboard.php"><i class="material-icons">home</i></a></li>
        <li><a href="AdminUser.php"><i class="material-icons">manage_accounts</i></a></li>
        <li><a href="AdminCompany.php"><i class="material-icons">supervised_user_circle</i></a></li>
        <li><a href="#"><i class="material-icons">logout</i></a></li>
      </ul>

      <ul id="nav-mobile" class="sidenav">
        <li><a href="AdminDashboard.php">Home</a></li>
        <li><a href="AdminUser.php">Manage User Account</a></li>
        <li><a href="AdminCompany.php">Manage Company Account</a></li>
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

    <div class="col s12 m4">
      <a href="AdminUser.php">
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

    <div class="col s12 m4">
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

    <div class="col s12 m4">
      <a href="AdminReport.php">
      <div class="card hoverable">
        <div class="card-image">
          <img src="img/reports.png">
        </div>
        <div class="card-content">
          <p class="center abc">Reports</p><br>
        </div>
      </div>
    </a>
    </div>

  </div><br>
</div>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>

  </body>
</html>
