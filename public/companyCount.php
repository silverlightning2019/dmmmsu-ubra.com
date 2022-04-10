<?php
include('conndb.php');

//Count for COMPANIES
$sql3=("SELECT COUNT(id) FROM users_tbl WHERE type='company' ");
$rs3 = $conn->query($sql3);
 //-----------^  need to run query here
 
$result3 = mysqli_fetch_array($rs3);
//here you can echo the result of query

?>