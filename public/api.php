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

        $sql = "SELECT * FROM user WHERE email='". $email ."' OR uname='". $email ."' AND psword='". $psword ."'";
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

    $app->run();
?>