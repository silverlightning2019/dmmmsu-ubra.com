<?php
    header("Access-Control-Allow-Origin: *");
    use \Psr\Http\Message\ServerRequestInterface as Request;
    use \Psr\Http\Message\ResponseInterface as Response;
    require '../src/vendor/autoload.php';
    $app = new \Slim\App;

    //REGISTER
    $app->post('/register', function (Request $request, Response $response,array $args) {

        $data=json_decode($request->getBody());
	
        $emp_id =$data->emp_id;
        $emp_uname =$data->emp_uname;
        $emp_pass =$data->emp_pass;
        $emp_cpass =$data->emp_cpass;
        $emp_name =$data->emp_name;
        $emp_brand =$data->emp_brand;
        $tax_id =$data->tax_id;
        $emp_type =$data->emp_type;
        $emp_num =$data->emp_num;
        $emp_municipal =$data->emp_municipal;
        $emp_province =$data->emp_province;
        $emp_barangay =$data->emp_barangay;
        $emp_person =$data->emp_person;
        $emp_position =$data->emp_position;
        $emp_telephone =$data->emp_telephone;
        $emp_mobile =$data->emp_mobile;
        $emp_email =$data->emp_email;
        

        include 'database.php';
        
        try 
        {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname",$username, $password);

            $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

            $query = "SELECT * FROM employer WHERE tax_id='". $tax_id ."'";
            
            $result = $conn->query($query);
            
            if ($result->rowCount() == 0) 
            {
                $sql = "INSERT INTO employer (emp_id, emp_uname, emp_pass, emp_cpass, emp_name, emp_brand, tax_id, emp_type, emp_num, emp_municipal, emp_province, emp_barangay, emp_person, emp_position, emp_telephone, emp_mobile, emp_email) VALUES ('". $emp_id ."', '". $emp_uname ."', '". $emp_pass ."', '". $emp_cpass ."', '". $emp_name ."', '". $emp_brand ."', '". $tax_id ."', '". $emp_type ."', '". $emp_num ."', '". $emp_municipal ."', '". $emp_province ."', '". $emp_barangay ."', '". $emp_person ."', '". $emp_position ."', '". $emp_telephone ."', '". $emp_mobile ."', '". $emp_email ."')";
                $conn->exec($sql);
                $response->getBody()->write(json_encode(array("status"=>"success","data"=>null)));
            }
            else
            {
                $response->getBody()->write(json_encode(array("status"=>"fail","data"=>array("title"=>"Email is already used!"))));
            }
        }
        catch(PDOException $e)
        {
            $response->getBody()->write(json_encode(array("status"=>"error","message"=>$e->getMessage())));
        }
        $conn = null;
    });

    //LOGIN
    $app->post('/login', function (Request $request, Response $response,array $args) {

        session_start();
        
        $data=json_decode($request->getBody());
        $emp_uname=$data->emp_uname;
        $emp_pass=$data->emp_pass;
        
        include 'database.php';
        
        $conn = new mysqli($servername, $username, $password,$dbname);

        if ($conn->connect_error) 
        {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT * FROM employer WHERE emp_uname='". $emp_uname ."' AND emp_pass='". $emp_pass ."'";
        $result = $conn->query($sql);	
        $row  = mysqli_fetch_array($result);
        $_SESSION['emp_uname'] = $emp_uname;	
        
        if ($result->num_rows > 0)  
        {
            $response->getBody()->write(json_encode(array("status"=>"success","data"=>null)));
        }
        else 
        {
            $response->getBody()->write(json_encode(array("status"=>"fail","data"=>array("title"=>"Access Denied!"))));
            session_destroy();
        }
        $conn->close();

        return $response;
	});

    //CHANGE PASSWORD
    $app->post('/changepass', function (Request $request, Response $response, array $args)
    {
        $data=json_decode($request->getBody());
        $emp_id =$data->emp_id;
        $emp_pass =$data->emp_pass;
        $password1 =$data->password1;
        $password2 =$data->password2;
        $password3 =$data->password3;
        
        include 'database.php';
        try 
        {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

            $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

            $sql = "UPDATE employer SET emp_pass='". $password2 ."', emp_cpass='". $password3 ."'WHERE emp_id='". $emp_id ."'";

            $conn->exec($sql);
            $response->getBody()->write(json_encode(array("status"=>"success","data"=>null)));
        }catch(PDOException $e){
            $response->getBody()->write(json_encode(array("status"=>"fail","data"=>array("title"=>"Password not updated!"))));
        }
        $conn = null;
        return $response;
    });

    //UPDATE PROFILE
    $app->post('/updatep', function (Request $request, Response $response,array $args) {

        $data=json_decode($request->getBody());
	
        $emp_id =$data->emp_id;
        $emp_uname =$data->emp_uname;
        $emp_name =$data->emp_name;
        $emp_brand =$data->emp_brand;
        $tax_id =$data->tax_id;
        $emp_type =$data->emp_type;
        $emp_num =$data->emp_num;
        $emp_municipal =$data->emp_municipal;
        $emp_province =$data->emp_province;
        $emp_barangay =$data->emp_barangay;
        $emp_person =$data->emp_person;
        $emp_position =$data->emp_position;
        $emp_telephone =$data->emp_telephone;
        $emp_mobile =$data->emp_mobile;
        $emp_email =$data->emp_email;
        

        include 'database.php';
        
        try 
        {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname",$username, $password);

            $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

            $query = "UPDATE employer SET emp_uname='". $emp_uname ."', emp_name='". $emp_name ."', emp_brand='". $emp_brand ."' , tax_id='". $tax_id ."' , emp_type='". $emp_type ."' , emp_num='". $emp_num ."' , emp_municipal='". $emp_municipal ."' , emp_province='". $emp_province ."' , emp_barangay='". $emp_barangay ."' , emp_person='". $emp_person ."' , emp_position='". $emp_position ."' , emp_telephone='". $emp_telephone ."' , emp_mobile='". $emp_mobile ."' , emp_email='". $emp_email ."' WHERE emp_id='". $emp_id ."'";;
            
            $conn->exec($query);
            $response->getBody()->write(json_encode(array("status"=>"success","data"=>null)));
        }
        catch(PDOException $e)
        {
            $response->getBody()->write(json_encode(array("status"=>"fail","data"=>array("title"=>"Profile not updated!"))));
        }
        $conn = null;
    });

    //POST JOB
    $app->post('/postjob', function (Request $request, Response $response,array $args) {

        $data=json_decode($request->getBody());
	
        $job_id =$data->job_id;
        $job_position =$data->job_position;
        $job_location =$data->job_location;
        $employer =$data->employer;
        $available =$data->available;

        include 'database.php';

        try 
        {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname",$username, $password);

            $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

            $query = "SELECT * FROM job WHERE job_position='". $job_position ."' AND employer='". $employer ."'";
            
            $result = $conn->query($query);

            

            if ($result->rowCount() == 0) 
            {
                $sql = "INSERT INTO job (job_id, job_position, job_location, employer, available) VALUES ('". $job_id ."', '". $job_position ."', '". $job_location ."', '". $employer ."', '". $available ."')";
                $conn->exec($sql);
                $response->getBody()->write(json_encode(array("status"=>"success","data"=>null)));
            }
            else
            {
                $response->getBody()->write(json_encode(array("status"=>"fail","data"=>array("title"=>"Job posting error!"))));
            }
        }
        catch(PDOException $e)
        {
            $response->getBody()->write(json_encode(array("status"=>"error","message"=>$e->getMessage())));
        }
        $conn = null;
    });

    //ADD NOTES
    $app->post('/addnotes', function (Request $request, Response $response,array $args) {

        $data=json_decode($request->getBody());
	
        $job_id =$data->job_id;
        $notes =$data->notes;

        include 'database.php';
        
        try 
        {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname",$username, $password);

            $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

            $query = "UPDATE job SET notes='". $notes ."' WHERE job_id='". $job_id ."'";;
            
            $conn->exec($query);
            $response->getBody()->write(json_encode(array("status"=>"success","data"=>null)));
        }
        catch(PDOException $e)
        {
            $response->getBody()->write(json_encode(array("status"=>"fail","data"=>array("title"=>"Other notes not added!"))));
        }
        $conn = null;
    });

    //UPDATE JOB
    $app->post('/updatejob', function (Request $request, Response $response,array $args) {

        $data=json_decode($request->getBody());
	
        $job_id =$data->job_id;
        $job_position =$data->job_position;
        $job_location =$data->job_location;
        $employer =$data->employer;
        $available =$data->available;
        
        include 'database.php';
        
        try 
        {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname",$username, $password);

            $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

            $query = "UPDATE job SET job_position='". $job_position ."', job_location='". $job_location ."', employer='". $employer ."' , available='". $available ."' WHERE job_id='". $job_id ."'";;
            
            $conn->exec($query);
            $response->getBody()->write(json_encode(array("status"=>"success","data"=>null)));
        }
        catch(PDOException $e)
        {
            $response->getBody()->write(json_encode(array("status"=>"fail","data"=>array("title"=>"Profile not updated!"))));
        }
        $conn = null;
    });

    //UPDATE NOTES
    $app->post('/updatenotes', function (Request $request, Response $response,array $args) {

        $data=json_decode($request->getBody());
	
        $job_id =$data->job_id;
        $notes =$data->notes;
        
        include 'database.php';
        
        try 
        {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname",$username, $password);

            $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

            $query = "UPDATE job SET notes='". $notes ."' WHERE job_id='". $job_id ."'";;
            
            $conn->exec($query);
            $response->getBody()->write(json_encode(array("status"=>"success","data"=>null)));
        }
        catch(PDOException $e)
        {
            $response->getBody()->write(json_encode(array("status"=>"fail","data"=>array("title"=>"Notes not updated!"))));
        }
        $conn = null;
    });

    $app->run();
?>