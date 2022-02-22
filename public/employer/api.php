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
                    }
        $conn->close();

        return $response;
	});

    $app->run();
?>