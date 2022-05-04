<?php
    $msg = "";
  
    if (isset($_POST['submit'])) {
        
        $fileName = $_FILES["file"]["name"];
        $tempName = $_FILES["file"]["tmp_name"];    
        //$folder = "img/".$filename;

        $announcement = $_POST['announcement'];
        $date = $_POST['date'];
        $description = $_POST['description'];
            
        $fileExt = explode('.', $fileName);
        $fileActualExt = strtolower(end($fileExt));
        $fileNewName = uniqid('', true).".".$fileActualExt;
        $folder = 'img/'.$fileNewName;

            
        $db = mysqli_connect("localhost", "root", "", "ubra");
    
        $sql = "INSERT INTO announcement (announcement, image, date, description) VALUES ('$announcement','$fileNewName','$date','$description')";
    
        mysqli_query($db, $sql);
        
        if (move_uploaded_file($tempName, $folder))  {
               
            $msg = "Image uploaded successfully";
            
        } else {

            $msg = "Failed to upload image";

        }

        header("Location: home.php");

    }
?> 