<?php 
include('jobcount.php');
?>
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
  	
  <!-- Script -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	 
  <!-- jQuery UI -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.css" />
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
 



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
	#pmargin a{
		margin:10px 10px 10px 10px;
	}
	
  </style>
</head>
<body class="body">

<!--Navigation Bar-->
  <nav class=" blue darken-4" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo"><span class="logo">UBRA</span></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="home.php">Home</a></li>
        <li><a href="job-offer2.php">Job Offers</a></li>
        <li><a href="job-events.php">Job Events</a></li>
        <li><a href="application.php">My Applications</a></li>
        <li><a href="profile.php">Profile</a></li>
        <li><a href="./">Log Out</a></li>
      </ul>

      <ul id="nav-mobile" class="sidenav">
        <li><a href="home.php">Home</a></li>
        <li><a href="job-offer2.php">Job Offers</a></li>
        <li><a href="job-events.php">Job Events</a></li>
        <li><a href="application.php">My Applications</a></li>
        <li><a href="profile.php">Profile</a></li>
        <li><a href="./">Log Out</a></li>
      </ul>
      <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons icon">menu</i></a>
    </div>
  </nav>
<!--End-->



<form action="" method="POST">
<!--Part 1-->
<div class="container">
      <div class="card">
          <div class="card1">
            <form class="col s12">
              <div class="row">
                <div class="input-field col s12 m3">
                  <i class="material-icons prefix">search</i>
                  <input id="j_name" name="j_name" type="text" class="validate" placeholder="Input Keywords Here..">
                </div>

                <div class="input-field col s12 m3">
                  <i class="material-icons prefix">location_on</i>
                  <input type="text" name="j_area" id="j_area" placeholder="Area(Local/Overseas)..." >
                </div>

                <div class="input-field col s12 m3">
                  <i class="material-icons prefix">work</i>
                  <input type="text" name="j_specialization" id="j_specialization" placeholder="Specialization..." >
                </div>

                <div class="input-field col s2">
                  <button class="waves-effect waves-effect blue lighten-2 btn-large btn1" name="filter" id="filter" >Job Match</button>
                </div>
				 <div class="input-field col s1 ">
                  <button class="waves-effect waves-effect orange lighten-2 btn-large btn2" name="reset" id="reset">Reset</button>
                </div>

              </div>
            </form>
          </div>
      </div>   
</form>
<!--Part 2-->
<div class="card">
    <div class="card horizontal">
      <div class="card-stacked">
        <div class="card-content">
          <div class="row" style="margin-bottom: 0;">
            <div class="left-side" style="float: left; display: flex;align-items: center;">
              <i class="material-icons" style="font-size:1.5rem">format_list_bulleted</i><span style="font-size:15px;font-weight: 500;">Job Lists:</span>
            </div>
            <div class="right-side" style="float: right;">
              <p class="right-align blue-grey-text" style="font-size: 15px; font-weight:500;">Result: 
              <span style="color:#64b5f6;"><?php echo $result[0]; ?> Job(s)</span></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!--Part 3-->
<form action="pass.php" method="POST">
	<?php  
      
	// Import the file where we defined the connection to Database.     
	require_once "conndb.php";   
								
	$per_page_record = 3;  // Number of entries to show in a page.   
	// Look for a GET variable page if not found default is 1.        
	if (isset($_GET["page"])) {    
		$page  = $_GET["page"];    
	}    
	else {    
		$page=1;    
	}    
								
	$start_from = ($page-1) * $per_page_record;     
						
	if(ISSET($_POST['filter'])){
	$j_name=$_POST['j_name'];
	$j_area=$_POST['j_area'];
	$j_specialization=$_POST['j_specialization'];
							 
		if($j_name=="" || $j_name==NULL OR $j_area=="" || $j_area==NULL){
				echo "<tr><td>No Result(s)....</td></tr>";
		}
		$query=mysqli_query($conn, "SELECT * FROM `job_tbl` WHERE `j_name`='$j_name' AND `j_area`='$j_area' OR `j_specialization`='$j_specialization' ") or die(mysqli_error());

	}
	else if(ISSET($_POST['reset'])){
		$query=mysqli_query($conn, "SELECT * FROM `job_tbl` LIMIT $start_from, $per_page_record") or die(mysqli_error());
	}else{
		$query=mysqli_query($conn, "SELECT * FROM `job_tbl` LIMIT $start_from, $per_page_record ") or die(mysqli_error());
	}
	while($row=mysqli_fetch_array($query)){
	?>
	<div class="card2">
	  <!--Featured Jobs-->
	  <div class="container" >
			<!--Featured Jobs List-->
			 <div class="row">
				<div class="col s12 m4">
					<div class="card hoverable">
						  <div class="card-image left-align" >
								
						  </div>
						  <div class="card-content" style="padding: 10px 10px 10px 10px;">
								<p class="job"><?php echo $row['j_name']; ?></p>
								<i class="material material-icons">place</i><?php echo $row['j_location']; ?><br>
								<i class="material material-icons">business</i><?php echo $row['j_organization']; ?><br>
								<i class="material material-icons">check_circle_outline</i><?php echo $row['j_count']; ?><br><br>
								<center><button name="show" value="<?php echo $row['j_id']; ?>" class="waves-effect btn-flat">Show Details</button></center>
						  </div>
					</div>
				</div>
			</div>	
	  </div>
	</div>
<?php } ?>
</form>
<!--Part 4-->
<div class="container">
<div id="pmargin">
  <ul class="pagination page">
	<?php  
        $query = "SELECT COUNT(*) FROM job_tbl";
        $rs_result = mysqli_query($conn, $query);     
        $row = mysqli_fetch_row($rs_result);     
        $total_records = $row[0];     
          
		echo "</br>";     
        // Number of pages required.   
        $total_pages = ceil($total_records / $per_page_record);     
        $pagLink = "";       
      
        if($page>=2){   
            echo "<a  class='btn active' href='job-offer2.php?page=".($page-1)."'><i class='material-icons'>chevron_left</i></a>";   
        }       
                    
          if ($i = $page) {   
              $pagLink .= "<a class = 'btn active' href='job-offer2.php?page=" .$i."'>".$i." </a>";   
          }  
          else  {   
              $pagLink .= "<a href='job-offer2.php?page=".$i."'> ".$i." </a>";     
          }   
    
        echo $pagLink;   
  
        if($page<$total_pages){   
            echo "<a  class='btn active' href='job-offer2.php?page=".($page+1)."'><i class='material-icons'>chevron_right</i></a>";   
        }   
  
    ?>
  </ul>
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


	<script type="text/javascript">
	  $(function() {
		 $( "#j_name" ).autocomplete({
		   source: 'db-search.php',
		 });
		 $( "#j_specialization" ).autocomplete({
		   source: 'db-search2.php',
		 });
	  });
	</script>

  </body>
</html>
