<?php
include('conndb.php');

//Count for JOB POSTED
$sql4=("SELECT COUNT(j_id) FROM job_tbl");
$rs4 = $conn->query($sql4);
 //-----------^  need to run query here
 
$result4 = mysqli_fetch_array($rs4);
//here you can echo the result of query

?>