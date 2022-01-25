<?php
    use \Psr\Http\Message\ServerRequestInterface as Request;
    use \Psr\Http\Message\ResponseInterface as Response;
    require '../src/vendor/autoload.php';
    $app = new \Slim\App;

    //LOGIN
    $app->post('/login', function (Request $request, Response $response,array $args) {

        session_start();
        
        $data=json_decode($request->getBody());
        $type =$data->type;
        $id_num =$data->id_num;
        $psword =$data->psword;
        
        
        //Database
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "enrollment";
        
        // Create connection
        $conn = new mysqli($servername, $username, $password,$dbname);

        // Check connection
        if ($conn->connect_error) 
        {
            die("Connection failed: " . $conn->connect_error);
        }
        $sql = "INSERT INTO login_info (id_num, type, success) VALUES ('". $id_num ."', '". $type ."', 'Yes')"; 
        $sql2 = "INSERT INTO login_info (id_num, type, success) VALUES ('". $id_num ."', '". $type ."','No')"; 
        //$conn->exec($sql);
        $sql3 = "SELECT * FROM users WHERE id_num='". $id_num ."' AND psword='". $psword ."' AND type='". $type ."'";
        $result = $conn->query($sql3);  
        $row  = mysqli_fetch_array($result);
        $_SESSION['id_num'] = $id_num;  
            if ($result->num_rows > 0)  
            {
                if($type == 'admin'){
                    $response->getBody()->write(json_encode(array("status"=>"success","data"=>null)));
                }
                else{
                    $response->getBody()->write(json_encode(array("status"=>"success","data"=>null)));
                    $conn->query($sql);
                }
            } 
            else 
            {
                $response->getBody()->write(json_encode(array("status"=>"fail","data"=>array("title"=>"Access Denied!"))));
                $conn->query($sql2);
            }
        $conn->close();
        return $response;
    });
    $app->run();
?>