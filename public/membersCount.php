<?php
include('conndb.php');

//Count for MEMBERS
$sql2=("SELECT COUNT(id) FROM users_tbl");
$rs2 = $conn->query($sql2);
 //-----------^  need to run query here
 
$result2 = mysqli_fetch_array($rs2);
//here you can echo the result of query
?>