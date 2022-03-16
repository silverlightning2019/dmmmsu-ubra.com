<?php  
      
	// Import the file where we defined the connection to Database.     
	require_once "conn.php";   
								
	$per_page_record = 4;  // Number of entries to show in a page.   
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
							 
		if($j_name=="" || $j_name==NULL AND $j_area=="" || $j_area==NULL){
			echo "<tr><td>No Result(s)....</td></tr>";
		}
		$query=mysqli_query($conn, "SELECT * FROM `job_tbl` WHERE `j_name`='$j_name' AND `j_area`='$j_area' OR `j_specialization`='$j_specialization' LIMIT $start_from, $per_page_record") or die(mysqli_error());

	}
	else if(ISSET($_POST['reset'])){
		$query=mysqli_query($conn, "SELECT * FROM `job_tbl` LIMIT $start_from, $per_page_record") or die(mysqli_error());
	}else{
			$query=mysqli_query($conn, "SELECT * FROM `job_tbl` LIMIT $start_from, $per_page_record ") or die(mysqli_error());
	}
	while($row=mysqli_fetch_array($query)){
?>