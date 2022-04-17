<?php 
    session_start();

    $conn = mysqli_connect("localhost","root","","ubra");

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
            $_SESSION['status'] = "Inserted";
            header("Location: company-job-registration-notes.php");
            exit(0);
        }
    }
?>