<?php
    header("Access-Control-Allow-Origin: *");
    use \Psr\Http\Message\ServerRequestInterface as Request;
    use \Psr\Http\Message\ResponseInterface as Response;
    require '../src/vendor/autoload.php';
    $app = new \Slim\App;

    //REGISTER
    $app->post('/register', function (Request $request, Response $response,array $args) {

        $data=json_decode($request->getBody());
	
        $app_id =$data->app_id;
        $fname =$data->fname;
        $mname =$data->mname;
        $lname =$data->lname;
        $uname =$data->uname;
        $email =$data->email;
        $pass1 =$data->pass1;
        $pass2 =$data->pass2;

        include 'database.php';
        
        try 
        {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname",$username, $password);

            $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

            $query = "SELECT * FROM user WHERE email='". $email ."'";
            
            $result = $conn->query($query);
            
            if ($result->rowCount() == 0) 
            {
                $sql = "INSERT INTO user (app_id, fname, mname, lname, uname, email, pass1, pass2) VALUES ('". $app_id ."', '". $fname ."', '". $mname ."', '". $lname ."', '". $uname ."','". $email ."','". $pass1 ."','". $pass2 ."')";
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
        $email =$data->email;
        $psword =$data->psword;
        
        include 'database.php';
        
        $conn = new mysqli($servername, $username, $password,$dbname);

        if ($conn->connect_error) 
        {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT * FROM user WHERE email='". $email ."' OR uname='". $email ."' AND pass1='". $psword ."'";
        $result = $conn->query($sql);	
        $row  = mysqli_fetch_array($result);
        $_SESSION['email'] = $email;	
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
	
	//endpoint post search from home
	$app->post('/search', function (Request $request, Response $response, array $args) {
		
		
		$data=json_decode($request->getBody());
		
		$j_name=$data->j_name;
			
		
		//Database
		include('conndb.php');
		
		$sql = "SELECT * FROM job_tbl where j_name='". $j_name."'";
		
		$result = $conn->query($sql);
		if ($result->num_rows > 0) {
		$data=array();
		while($row = $result->fetch_assoc()) {
		array_push($data,array("j_id"=>$row["j_id"],"j_name"=>$row["j_name"],"j_specialization"=>$row["j_specialization"],"j_img"=>$row["j_img"]
		,"j_area"=>$row["j_area"],"j_description"=>$row["j_description"],"j_location"=>$row["j_location"],"j_organization"=>$row["j_organization"]
		,"j_count"=>$row["j_count"]));
		}
		$data_body=array("status"=>"success","data"=>$data);
		$response->getBody()->write(json_encode($data_body));
		} else {
		$response->getBody()->write(array("status"=>"success","data"=>null));
		}
		$conn->close();
		
		return $response;
	});
	
	//endpoint post search from job
	$app->post('/job-apply', function (Request $request, Response $response, array $args) {
		
		
		$data=json_decode($request->getBody());
		
		$show=$data->show;
			
		
		//Database
		include('conndb.php');
		
		$sql = "SELECT * FROM job_tbl where j_id='". $show."'";
		
		$result = $conn->query($sql);
		if ($result->num_rows > 0) {
		$data=array();
		while($row = $result->fetch_assoc()) {
		array_push($data,array("j_id"=>$row["j_id"],"j_name"=>$row["j_name"],"j_specialization"=>$row["j_specialization"],"j_img"=>$row["j_img"]
		,"j_area"=>$row["j_area"],"j_description"=>$row["j_description"],"j_location"=>$row["j_location"],"j_organization"=>$row["j_organization"]
		,"j_count"=>$row["j_count"]));
		}
		$data_body=array("status"=>"success","data"=>$data);
		$response->getBody()->write(json_encode($data_body));
		} else {
		$response->getBody()->write(array("status"=>"success","data"=>null));
		}
		$conn->close();
		
		return $response;
	});
	
	//endpoint save apply
	$app->post('/apply-save', function (Request $request, Response $response, array $args) {

		$data=json_decode($request->getBody());
		
		$show=$data->show;

		//Database
		include('conndb.php');

		try {
		$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

		// set the PDO error mode to exception
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql=("INSERT INTO application_tbl (app_jobid, app_jobname) SELECT j_id, j_name FROM job_tbl WHERE j_id='".$show."' ");

		// use exec() because no results are returned
		$conn->exec($sql);
		$response->getBody()->write(json_encode(array("status"=>"success","data"=>null)));
		} catch(PDOException $e){
		$response->getBody()->write(json_encode(array("status"=>"error",
		"message"=>$e->getMessage())));
		}
		$conn = null;

		return $response;
	});
	
	//endpoint post job-offer
	$app->post('/job-offer', function (Request $request, Response $response, array $args) {
		
		
		$data=json_decode($request->getBody());
		
		$j_name=$data->j_name;
		$j_area=$data->j_area;
		$j_specialization=$data->j_specialization;
			
		
		//Database
		include('conndb.php');
		
		$sql = "SELECT * FROM job_tbl where j_name='". $j_name."' AND j_area='". $j_area."' AND j_specialization='". $j_specialization."'";
		
		$result = $conn->query($sql);
		if ($result->num_rows > 0) {
		$data=array();
		while($row = $result->fetch_assoc()) {
		array_push($data,array("j_id"=>$row["j_id"],"j_name"=>$row["j_name"],"j_specialization"=>$row["j_specialization"],"j_img"=>$row["j_img"]
		,"j_area"=>$row["j_area"],"j_description"=>$row["j_description"],"j_location"=>$row["j_location"],"j_organization"=>$row["j_organization"]
		,"j_count"=>$row["j_count"]));
		}
		$data_body=array("status"=>"success","data"=>$data);
		$response->getBody()->write(json_encode($data_body));
		} else {
		$response->getBody()->write(array("status"=>"success","data"=>null));
		}
		$conn->close();
		
		return $response;
	});
	
	//endpoint post searchDisplay job-offer.php
	$app->post('/searchDisplay', function (Request $request, Response $response, array $args) {
		
		
		$data=json_decode($request->getBody());
			
		
		//Database
		include('conndb.php');
		
		
		$sql = "SELECT * FROM job_tbl";
		
		$result = $conn->query($sql);
		if ($result->num_rows > 0) {
		$data=array();
		while($row = $result->fetch_assoc()) {
		array_push($data,array("j_id"=>$row["j_id"],"j_name"=>$row["j_name"],"j_specialization"=>$row["j_specialization"],"j_img"=>$row["j_img"]
		,"j_area"=>$row["j_area"],"j_description"=>$row["j_description"],"j_location"=>$row["j_location"],"j_organization"=>$row["j_organization"]
		,"j_count"=>$row["j_count"]));
		}
		$data_body=array("status"=>"success","data"=>$data);
		$response->getBody()->write(json_encode($data_body));
		} else {
		$response->getBody()->write(array("status"=>"success","data"=>null));
		}
		$conn->close();
		
		return $response;
	});
	
	//endpoint post Display Category on HOME
	$app->post('/category', function (Request $request, Response $response, array $args) {
		
		
		$data=json_decode($request->getBody());
			
		
		//Database
		include('conndb.php');
		
		
		$sql = "SELECT DISTINCT(j_category) FROM job_tbl LIMIT 6";
		
		
		$result = $conn->query($sql);
		if ($result->num_rows > 0) {
		$data=array();
		while($row = $result->fetch_assoc()) {
		array_push($data,array("j_category"=>$row["j_category"]));
		}
		$data_body=array("status"=>"success","data"=>$data);
		$response->getBody()->write(json_encode($data_body));
		} else {
		$response->getBody()->write(array("status"=>"success","data"=>null));
		}
		$conn->close();
		
		return $response;
	});
	
	//endpoint post job-category
	$app->post('/job-category', function (Request $request, Response $response, array $args) {
		
		
		$data=json_decode($request->getBody());
		
		$j_name=$data->j_name;		
		
		//Database
		include('conndb.php');
		
		
		$sql = "SELECT * FROM job_tbl where j_category='".$j_name."'";
		
		$result = $conn->query($sql);
		if ($result->num_rows > 0) {
		$data=array();
		while($row = $result->fetch_assoc()) {
		array_push($data,array("j_id"=>$row["j_id"],"j_name"=>$row["j_name"],"j_specialization"=>$row["j_specialization"],"j_img"=>$row["j_img"]
		,"j_area"=>$row["j_area"],"j_description"=>$row["j_description"],"j_location"=>$row["j_location"],"j_organization"=>$row["j_organization"]
		,"j_count"=>$row["j_count"]));
		}
		$data_body=array("status"=>"success","data"=>$data);
		$response->getBody()->write(json_encode($data_body));
		} else {
		$response->getBody()->write(array("status"=>"success","data"=>null));
		}
		$conn->close();
		
		return $response;
	});
	
	

    $app->run();
?>