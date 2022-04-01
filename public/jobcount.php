<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hub";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}
if(ISSET($_POST['filter'])){
	$j_name=$_POST['j_name'];
	$j_area=$_POST['j_area'];
	$j_specialization=$_POST['j_specialization'];
	
		if($j_name=="" AND $j_area=="" AND $j_specialization=="" || $j_name==NULL AND $j_area==NULL AND $j_specialization==NULL){
			$sql = ("SELECT COUNT(*) FROM `job_tbl` WHERE j_id='0'");
		}elseif($j_name!="" AND $j_area!=""){
			$sql = ("SELECT COUNT(*) FROM `job_tbl` WHERE `j_name`='$j_name' AND `j_area`='$j_area' ");
		}elseif($j_name!=""){
			$sql = ("SELECT COUNT(*) FROM `job_tbl` WHERE `j_name`='$j_name' ");
		}elseif($j_area!=""){
			$sql = ("SELECT COUNT(*) FROM `job_tbl` WHERE `j_area`='$j_area' ");
		}else{
			$sql = ("SELECT COUNT(*) FROM `job_tbl` WHERE `j_name`='$j_name' AND `j_area`='$j_area' AND `j_specialization`='$j_specialization'");	
		}
	$rs = $conn->query($sql);
}else{
	$sql = ("SELECT COUNT(j_id) FROM job_tbl");
	$rs = $conn->query($sql);
}
$result = mysqli_fetch_array($rs);
?>