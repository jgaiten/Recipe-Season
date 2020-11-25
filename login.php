    <?php
    // Connect to the database with (hostname,userid,password,database)
    // $con = mysqli_connect(localhost, uncastudent, Rocky99Dog, webbook);
    $con = mysqli_connect("138.68.228.126", "drawertl_jgaiten", "BlueJay98!", "drawertl_jgaiten");
    if (! $con) {
        echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
        die('Could not connect: ' . mysqli_error($con));
    } else {
        echo "Connected to mySQL successfully. <br>" . PHP_EOL;
    }
    
    if(!mysqli_select_db($con, 'drawertl_jgaiten'))
    {
        echo 'Database not selected';
    }
    
    else{
        echo 'Database selected';
        
    }
    $Name = $_GET['user'];
    $password = $_GET['password'];
    //$sql = "SELECT user (username,password) VALUES ('$Name','$Password')";
    $sql = "SELECT password FROM user where username = '$Name' ";
    
    
    $result = mysqli_query($con,$sql);
    
    while ($row = mysqli_fetch_array($result)) {
        $dbpassword = $row['password'];
        echo $dbpassword;
        echo '<br>';
    }
    mysqli_close($con);

    echo 'Password: '.$password;
    echo '<br>';
    echo 'Database password: '.$dbpassword;
    echo '<br>';

    if($password == $dbpassword){
       echo 'They are the same! WOOOOOOO!';
        //forward to the next page that displays prices of the mechandise
        //using same select for all 8 fields. process in For/while loop
    }
    else{
        echo 'They are NOT the same! :(';
    }
//login process



	?>