<?php
include('conndb.php');

$apply=$_POST["apply"];

$sql=("INSERT INTO application_tbl (app_id, app_job) SELECT j_id, j_name FROM job_tbl WHERE j_id='".$apply."' ");
$result = $conn->query($sql);
echo"Job Application Successful. Please Wait For the Employer For Reponse...";

?>