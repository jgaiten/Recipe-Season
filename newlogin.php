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
    $Name = $_POST['username'];
    $Email = $_POST['email'];
    $Password = $_POST['password'];
    $userID = random_int(0, 9999999);
    $sql = "INSERT INTO user (userID,username,email,password) VALUES ('$userID','$Name','$Email','$Password')";
        
    
    if (!mysqli_query($con, $sql))
    {
        echo 'Not inserted';
    }
    else
    {
        echo 'Inserted';
    }
    
    mysqli_close($con);
//login process
	?>