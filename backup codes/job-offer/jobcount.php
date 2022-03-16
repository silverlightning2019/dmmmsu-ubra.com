<?php

include('conndb.php');

$sql = ("SELECT COUNT(j_id) FROM job_tbl");
$rs = $conn->query($sql);
 //-----------^  need to run query here

 $result = mysqli_fetch_array($rs);
 //here you can echo the result of query
?>