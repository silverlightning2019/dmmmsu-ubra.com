<?php
require_once "conndb.php";
if (isset($_GET['term'])) {
     
   $query = "SELECT * FROM job_tbl WHERE j_specialization LIKE '{$_GET['term']}%' LIMIT 25";
    $result = mysqli_query($conn, $query);
 
    if (mysqli_num_rows($result) > 0) {
     while ($j_specialization = mysqli_fetch_array($result)) {
      $res[] = $j_specialization['j_specialization'];
     }
    } else {
      $res = array();
    }
    //return json res
    echo json_encode($res);
}
?>