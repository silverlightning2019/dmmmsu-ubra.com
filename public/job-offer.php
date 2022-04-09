<?php 
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
	#job-list{
		float:left;
		list-style:none;
		margin-top:-1px;
		padding:0;
		position: absolute;
		width:90.5%;
	}
	#job-list li{
		padding: 10px;
		background: #f0f0f0;
		border-bottom: #bbb9b9 1px solid;
		color:#64b5f6;
		font-size:20px;
		text-align:left;
	}
	#job-list li:hover{
		background:#ece3d2;
		cursor: pointer;
	}
	#myBtn {
	  display: none;
	  position: fixed;
	  bottom: 20px;
	  right: 30px;
	  z-index: 99;
	  font-size: 18px;
	  border: none;
	  outline: none;
	  background-color: red;
	  color: white;
	  cursor: pointer;
	  padding: 15px;
	  border-radius: 4px;
	  width:55px;
	}

	#myBtn:hover {
	  background-color: #555;
	}
	html {
	  scroll-behavior: smooth;
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

<form>
	<div class="container">
		<div class="card">
			<div class="card1">
            <form class="col s12">
				<div class="row">
					<div class="frmSearch">
						<div class="input-field col s12 m3">
							<input type="search" name="j_name" id="j_name" placeholder="Job Name/Title..." >
							<div id="suggesstion-box"></div>
						</div>
						<div class="input-field col s12 m3">
							<select id="j_area">
								<option value="Local">Local</option>
								<option value="Overseas">Overseas</option>
							</select>
						</div>
						<div class="input-field col s12 m3">
							<input type="text" id="j_specialization" name="j_specialization" placeholder="Specialization...">
							<div id="suggesstion-box2"></div>
						</div>
						<div class="input-field col s12 m3">
							<button type="button" name="searchbtn" id="searchbtn" class="waves-effect waves-effect blue lighten-2 btn-large btn1">search</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>	
</form>
<!--End-->

<!--Part 2-->
<div class="container" style="margin-top:3%;">
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
						  <span style="color:#64b5f6; text-align:left;">Job(s)</span></p>
						</div>
					</div>
				</div>
			</div>
		</div>
		</div>
	</div>
</div>
<!--End-->
<?php 	
if(isset($_POST['show'])){
	$show=$_POST["show"];
}
?>
<form form action="apply.php" method="POST">
	<!--Display Part-->
	<div class="container">
		<div class="card2">
			<div class="row">            
				<div id="data"></div>
			</div>
		</div>
	</div>
</form>

<!--Part 4-->
<button onclick="topFunction()" id="myBtn" title="Go to top"><i class="material material-icons">arrow_upward</i></button>

<script>
//Get the button
var mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>


<!--Footer-->
<?php
include('footer.php');
?>

	<!--  Scripts-->
	<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script src="js/materialize.js"></script>
	<script src="js/init.js"></script>
	<script src="js/job-offer.js"></script>
  
	<!--  script for search-->
	<script>
	$(document).ready(function(){
		$("#j_name").keyup(function(){
			$.ajax({
			type: "POST",
			url: "readJobOffer.php",
			data:'keyword='+$(this).val(),
			success: function(data){
				$("#suggesstion-box").show();
				$("#suggesstion-box").html(data);
				$("#j_name").css("background","#FFF");
			}
			});
		});
		
		$("#j_specialization").keyup(function(){
			$.ajax({
			type: "POST",
			url: "readJobOffer.php",
			data:'keyword1='+$(this).val(),
			success: function(data){
				$("#suggesstion-box2").show();
				$("#suggesstion-box2").html(data);
				$("#j_specialization").css("background","#FFF");
			}
			});
		});
	});

	function selectJob(val) {
		$("#j_name").val(val);
		$("#suggesstion-box").hide();
	}
	function selectSpecialization(val) {
		$("#j_specialization").val(val);
		$("#suggesstion-box2").hide();
	}
	</script>
	

</body>
</html>
