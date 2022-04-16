<?php
include('conndb.php');

//Count for "Structures"
$sql1=("SELECT * FROM job_tbl where j_category='Structures' ");
$rs = $conn->query($sql1);
 //-----------^  need to run query here
 
$result1 = mysqli_fetch_array($rs);
//here you can echo the result of query
?>