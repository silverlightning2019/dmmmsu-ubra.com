<?php
require_once "conndb.php";
if (isset($_GET['term'])) {
     
   $query = "SELECT * FROM job_tbl WHERE j_name LIKE '{$_GET['term']}%' LIMIT 25";
    $result = mysqli_query($conn, $query);
 
    if (mysqli_num_rows($result) > 0) {
     while ($j_name = mysqli_fetch_array($result)) {
      $res[] = $j_name['j_name'];
     }
    } else {
      $res = array();
    }
    //return json res
    echo json_encode($res);
}
?>