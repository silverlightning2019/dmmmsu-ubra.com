<?php
?>
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
  
  <!-- JQuery -->
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>

  
  <style>
    .search{
      background: white;
    }

    .work{
      padding: 5px;
    }

    .color1{
      background: #e3f2fd;
      padding-top: 10px;
    }

    .color2{
      background: white;
      padding: 10px;
    }

    .icon{
      padding: 5px;
    }

    .start{
      margin-top: 5px;
      margin-bottom: 20px;
    }

    .header{
      font-weight: bolder;
    }

    .span{
      font-weight: normal;
    }

    .font{
      font-size: 20px;
    }

    .material{
      display: inline-flex;
      vertical-align: top;
      margin-right: 10px;
      color: #64b5f6;
    }

    .material1{
      display: inline-flex;
      vertical-align: top;
      margin-right: 10px;
      margin-bottom: 5px;
    }

    .job{
      font-size: 25px;
      font-weight: normal;
      text-transform: uppercase;
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

    .reg{
        color:#64b5f6;
        font-weight: bold;
        text-transform: uppercase;
      }

    .caption{
      margin-top: -50px;
    }

    .content{
      margin-top: 50px;
    }

    .modal{
        height: 400px !important;
        width: 300px !important;
      }

  </style>
</head>
<body class="body">
	

	<input type="text" id="j_name" name="j_name" placeholder="Job Title">
	<br>
	<select id="j_area" name="j_area">
		<option value="" disabled selected>All Location</option>
        <option value="Local">Local</option>
        <option value="Overseas">Overseas</option>
	</select>
	<br>
	<input type="text" id="j_specialization" name="j_specialization" placeholder="Specialization">
	<br>
	<button class="submit" id="jobsearch" name="jobsearch">Search</button>

	
	<center>
	
	<div class="container" style="margin-top:35px;">
		<h4>Select Number of Rows</h4>
		<div class="form-group">
			<select name="state" id="maxRows" class="form-control" style="width:150px;">
				<option value="5000">Show all</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="5">5</option>
				<option value="20">20</option>
				<option value="50">50</option>
				<option value="75">75</option>
				<option value="100">100</option>
			</select>
		</div>
	</div>
	
	<table id="j_table" class="table table-bordered table-striped" style="margin:150px; width:80%;">
		<thead>
			<tr>
			<th>JOB TITLE</th>
			<th>AREA</th>
			<th>LOCATION</th>
			<th>ORGANIZATION</th>
			<th>COUNT</th>
			</tr>
		</thead>
		<tbody id="j_data">
		</tbody>
	</table>
	
	<div class="pagination-container">
		<ul class="pagination"></ul>
	</div>
	
	</center>




  <!--  Scripts-->
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>
  <script src="js/job.js"></script>
  <script src="js/jtable.js"></script>
  

  

  </body>
</html>
