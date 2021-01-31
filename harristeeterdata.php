<?php
error_reporting(E_ALL);
        ini_set('display_errors', 1);
        //include("dbinfo.inc.php");
        //echo "Connecting here";
        $params = http_build_query(array("api_key" => "tHLaTh-FNewX"));

$result = file_get_contents('https://www.parsehub.com/api/v2/projects/tkdZQD5DFaUy/last_ready_run/data?' . $params,false, stream_context_create(array('http' => array('method' => 'GET'))));


$resultunzipped = gzdecode($result);
$arr = json_decode($resultunzipped, true);
//echo "<br><br>var_dump:<br>";
//var_dump($arr);
//echo "<br><br>print_r:<br>";

//print_r($arr);

$con = mysqli_connect("138.68.228.126", "drawertl_jgaiten", "BlueJay98!", "drawertl_jgaiten");
    if (! $con) {
        //echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
        die('Could not connect: ' . mysqli_error($con));
    } else {
       // echo "Connected to mySQL successfully. <br>" . PHP_EOL;
    }
    
    if(!mysqli_select_db($con, 'drawertl_jgaiten'))
    {
        //echo 'Database not selected';
    }
    
    else{
        //echo 'Database selected';
    }
    
 $sqldelete = "DELETE FROM HARRISTEETER";
 mysqli_query($con, $sqldelete);

for($i=0; $i<count($arr['selection1']); $i++){
//    echo "name: ".$arr['Title'][$i]["name"]."<br>price: ".$arr['Title'][$i]["price"]."<hr>";
    //insert into the database
    $name = $arr['selection1'][$i]["name"];
    $price = $arr['selection1'][$i]["price"];
    $my_date = date("Y-m-d H:i:s");
    
    $sql = "INSERT INTO HARRISTEETER (name,price,time) VALUES ('$name','$price','$my_date')";
   // echo "<br>";
   // echo $sql;
     if (!mysqli_query($con, $sql))
    {
       // echo '<br>Not inserted';
    }
    else
    {
        //echo '<br>Inserted';
    }
    //get the run on Parsehub to exe
}
    //exit();
    header("refresh:1;url=showresults.php");
?>