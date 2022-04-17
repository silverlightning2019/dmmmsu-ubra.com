<?php 
    session_start();

    $conn = mysqli_connect("localhost","root","","ubra");

    if(isset($_POST['requirements'])){
        $job_id = $_POST['job_id'];
        $jobquali = $_POST['jobquali'];

        foreach($job_id as $index => $job_ids)
        {
            $s_job_id = $job_ids;
            $s_jobquali = $jobquali[$index];
            
            $query = "INSERT INTO job_qualification (job_id, qualification) VALUES ('$s_job_id','$s_jobquali')";
            $query_run = mysqli_query($conn, $query);
        }

        if($query_run)
        {
            $_SESSION['status'] = "Inserted";
            header("Location: company-job-registration-requirements.php");
            exit(0);
        }
    }
?>