<?php
  include 'database.php';

  $conn = new mysqli($servername, $username, $password,$dbname);

  if ($conn->connect_error) {

    die("Connection failed: " . $conn->connect_error);

  }

  $id = $_POST['id'];

  $sql = "DELETE FROM user WHERE app_id='$id'";
  $result = $conn->query($sql);

  if ($conn->query($sql) === TRUE) {

    echo "User deleted successfully";

  } 
  
  else {

    echo "Error deleting user: " . $conn->error;

  }

  $conn->close();

  header('Location: user.php');

?>
  