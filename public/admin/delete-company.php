<?php
  include 'database.php';

  $conn = new mysqli($servername, $username, $password,$dbname);

  if ($conn->connect_error) {

    die("Connection failed: " . $conn->connect_error);

  }

  $id = $_POST['id'];
  $emp = $_POST['emp'];

  $sql = "DELETE FROM employer WHERE emp_id='$id'";
  $sql2 = "DELETE FROM job WHERE emp_name='$emp'";
  $result = $conn->query($sql);
  $result2 = $conn->query($sql2);

  if ($conn->query($sql) === TRUE && $conn->query($sql2) === TRUE) {

    echo "User deleted successfully";

  } 
  
  else {

    echo "Error deleting user: " . $conn->error;

  }

  $conn->close();

  header('Location: company.php');

?>
  