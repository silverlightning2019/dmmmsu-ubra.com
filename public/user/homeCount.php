<?php
include('conndb.php');

//Count for JOB FILLED
$sql1=("SELECT COUNT(j_id) FROM job_tbl where j_stats='Filled' ");
$rs1 = $conn->query($sql1);
 //-----------^  need to run query here
 
$result1 = mysqli_fetch_array($rs1);
//here you can echo the result of query

?>