<?php
    header("Access-Control-Allow-Origin: *");
    use \Psr\Http\Message\ServerRequestInterface as Request;
    use \Psr\Http\Message\ResponseInterface as Response;
    require '../src/vendor/autoload.php';
    $app = new \Slim\App;

    //jobtable
    $app->post('/jobtable', function (Request $request, Response $response, array $args) {
	//Database
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "hub";
	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	 die("Connection failed: " . $conn->connect_error);
	}
	$sql = "SELECT * FROM job_tbl";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
	$data=array();
	 while($row = $result->fetch_assoc()) {
	array_push($data,array("j_name"=>$row["j_name"], "j_location"=>$row["j_location"], "j_organization"=>$row["j_organization"], "j_count"=>$row["j_count"], "j_id"=>$row["j_id"]));
	 }
	$data_body=array("status"=>"success","data"=>$data);
	$response->getBody()->write(json_encode($data_body));
	} else {
	$response->getBody()->write(array("status"=>"success","data"=>null));
	}
	$conn->close();
	 
	 return $response;
	});
	
	$app->post('/jobsearch', function (Request $request, Response $response, array $args) {
	//Database
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "hub";
	
	$data=json_decode($request->getBody());
	$j_name =$data->j_name ;
	$j_area =$data->j_area ;
	$j_specialization =$data->j_specialization ;
	
	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	 die("Connection failed: " . $conn->connect_error);
	}
	$sql = "SELECT * FROM job_tbl WHERE j_name='".$j_name."' OR j_area='".$j_area."' OR j_specialization='".$j_specialization."' ";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
	$data=array();
	 while($row = $result->fetch_assoc()) {
	array_push($data,array("j_name"=>$row["j_name"], "j_location"=>$row["j_location"], "j_organization"=>$row["j_organization"], "j_count"=>$row["j_count"]));
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