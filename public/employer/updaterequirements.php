<?php 
    session_start();

    include 'database.php';

    $conn = new mysqli($servername, $username, $password,$dbname);

    if ($conn->connect_error) {

        die("Connection failed: " . $conn->connect_error);

    }

    $id = $_SESSION['job_id'];

    $sql = "DELETE FROM job_requirements WHERE job_id='{$_SESSION['job_id']}'";
    $result = $conn->query($sql);

    if ($conn->query($sql) === TRUE) {

        echo $id;
        echo "Record deleted successfully";

    } 
    
    else {

        echo "Error deleting record: " . $conn->error;

    }

    if(isset($_POST['requirements'])){
        $job_id = $_POST['job_id'];
        $jobreq = $_POST['jobreq'];

        foreach($job_id as $index => $job_ids)
        {
            $s_job_id = $job_ids;
            $s_jobreq = $jobreq[$index];
            
            $query = "INSERT INTO job_requirements (job_id, requirements) VALUES ('$s_job_id','$s_jobreq')";
            $query_run = mysqli_query($conn, $query);
        }

        if($query_run)
        {
            $_SESSION['job_id'] = $id;
            $_SESSION['status'] = "Inserted";
            header("Location: edit-job-notes.php");
            exit(0);
        }
    }
?>