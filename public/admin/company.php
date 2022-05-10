<?php
  session_start();

  $conn = mysqli_connect("localhost","root","","ubra");
  $query = "SELECT * FROM employer";
  $result = mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Manage Employer Accounts</title>

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
      margin-bottom: 142px;
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
    <div class="nav-wrapper container"><a id="logo-container" href="home.php" class="brand-logo"><span class="logo">UBRA</span></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="home.php"><i class="material-icons">home</i></a></li>
        <li><a href="user.php"><i class="material-icons">manage_accounts</i></a></li>
        <li><a href="company.php"><i class="material-icons">supervised_user_circle</i></a></li>
        <li><a href="#"><i class="material-icons">logout</i></a></li>
      </ul>

      <ul id="nav-mobile" class="sidenav">
        <li><a href="home.php">Home</a></li>
        <li><a href="user.php">Manage User Account</a></li>
        <li><a href="company.php">Manage Company Account</a></li>
        <li><a href="#">Log Out</a></li>
      </ul>
      <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons icon">menu</i></a>
    </div>
  </nav>
<!--End-->


<!--Banner-->
  <div class="section no-pad-bot work" id="index-banner">
    <div class="container">
      <h4 class="header left-align blue-grey-text">Manage Employer Accounts</h4>
    </div>
  </div>

<!--Buttons-->
<div class="container">
  <p class="left-align">
  <input class="waves-effect waves-light" id="myInput" onkeyup="myFunction()" type="search" placeholder="Search ID">
  </p>
</div>
<!--Manage-->
<div class="container">
<table class="responsive-table highlight striped centered tables" id="myTable">
        <thead class="theads">
          <tr>
              <th>Company ID</th>
              <th>Company Name</th>
              <th>Contact Person</th>
              <th>Email Address</th>
              <th>User Name</th>
              <th>Password</th>
              <th>Posted Jobs</th>
              <th>Applicants</th>
              <th>Action</th>
          </tr>
        </thead>

        <tbody>
        <?php
            while($rows=mysqli_fetch_array($result)){
          ?>
          <tr>
            <td><?php echo $rows['emp_id'];?></td>
            <td><?php echo $rows['emp_name'];?></td>
            <td><?php echo $rows['emp_person'];?></td>
            <td><?php echo $rows['emp_email'];?></td>
            <td><?php echo $rows['emp_uname'];?></td>
            <td></td>
            <td></td>
            <td></td>
            <td>
              <form action="delete-company.php" method="POST">
                <input type="hidden" name="id" id="emp_id" value="<?php echo $rows['emp_id'];?>">
                <input type="hidden" name="emp" id="emp" value="<?php echo $rows['emp_name'];?>">
                <p class="center-align">
                  <button type="submit" class="btn-small waves-effect waves-light red"><i class="material-icons">delete</i></button>
                </p>
              </form>
            </td>
          </tr>
          <?php
            }
          ?>
        </tbody>
      </table>
      <p class="blue-grey-text">Total Posted Jobs: 
        <?php
          $sql = "SELECT * from job";

          if ($result2 = mysqli_query($conn, $sql)) {

              $rowCount = mysqli_num_rows( $result2 );
              echo $rowCount;
          }
        ?>
      </p>
      <p class="blue-grey-text">Total Number of Applicants:
        <?php
          $sql = "SELECT * from job";

          if ($result2 = mysqli_query($conn, $sql)) {

              $rowCount = mysqli_num_rows( $result2 );
              echo $rowCount;
          }
        ?>
      </p>
</div>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>
  <script>
    function myFunction() {

      var input, filter, table, tr, td, i, txtValue;
      input = document.getElementById("myInput");
      filter = input.value.toUpperCase();
      table = document.getElementById("myTable");
      tr = table.getElementsByTagName("tr");

      for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[0];
        if (td) {
          txtValue = td.textContent || td.innerText;
          if (txtValue.toUpperCase().indexOf(filter) > -1) {
            tr[i].style.display = "";
          } else {
            tr[i].style.display = "none";
          }
        }
      }
    }
  </script>

  </body>
</html>
