<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Manage User Accounts</title>

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
      font-weight:normal;
      margin-bottom:20px;
      font-size: 25px;
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

    .tables{
      margin-bottom: 30px;
      font-size: 15px;
      white-space: nowrap;
    }

    .tables .theads th{
      font-weight:600;
      background-color:#64b5f6;
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
      <h4 class="header left-align blue-grey-text">Manage User Accounts</h4>
    </div>
  </div>

<!--Buttons-->
<div class="container">
  <p class="left-align">
    <a class="waves-effect waves-light btn blue"><i class="material-icons left">search</i>Search Here!</a>
    <a class="btn-flat disabled">3 User Shown</a>
  </p>
</div>

<!--Manage-->
<div class="container">
<table class="responsive-table highlight striped centered tables">
        <thead class="theads">
          <tr>
              <th>User ID</th>
              <th>First Name</th>
              <th>Middle Name</th>
              <th>Last Name</th>
              <th>Email Address</th>
              <th>Phone Number</th>
              <th>User Name</th>
              <th>Password</th>
              <th>Action</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td>181-1792-2</td>
            <td>Kenneth</td>
            <td>Robles</td>
            <td>Lorenzo</td>
            <td>Kenneth@gmail.com</td>
            <td>09183512847</td>
            <td>KenKen</td>
            <td>123456</td>
            <td>
              <a class="btn-small waves-effect waves-light red"><i class="material-icons">delete</i></a>
            </td>
          </tr>

         <tr>
            <td>181-1792-2</td>
            <td>Kenneth</td>
            <td>Robles</td>
            <td>Lorenzo</td>
            <td>Kenneth@gmail.com</td>
            <td>09183512847</td>
            <td>KenKen</td>
            <td>123456</td>
            <td>
              <a class="btn-small waves-effect waves-light red"><i class="material-icons">delete</i></a>
            </td>
          </tr>

         <tr>
            <td>181-1792-2</td>
            <td>Kenneth</td>
            <td>Robles</td>
            <td>Lorenzo</td>
            <td>Kenneth@gmail.com</td>
            <td>09183512847</td>
            <td>KenKen</td>
            <td>123456</td>
            <td>
              <a class="btn-small waves-effect waves-light red"><i class="material-icons">delete</i></a>
            </td>
          </tr>
        </tbody>
      </table><br><br>
</div>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>

  </body>
</html>
