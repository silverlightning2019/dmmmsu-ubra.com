<?php
  include 'database.php';

  $conn = new mysqli($servername, $username, $password,$dbname);

  if ($conn->connect_error) {

    die("Connection failed: " . $conn->connect_error);

  }

  $id = $_POST['id'];

  $sql = "DELETE FROM job WHERE job_id='$id'";
  $sql2 = "DELETE FROM job_qualification WHERE job_id='$id'";
  $sql3 = "DELETE FROM job_requirements WHERE job_id='$id'";
  $result = $conn->query($sql);
  $result2 = $conn->query($sql2);
  $result3 = $conn->query($sql3);

  if ($conn->query($sql) === TRUE && $conn->query($sql2) === TRUE && $conn->query($sql3) === TRUE) {

    echo "Records deleted successfully";

  } 
  
  else {

    echo "Error deleting record: " . $conn->error;

  }

  $conn->close();

  header('Location: job-registered.php');

?>
  