   <?php
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
    $Email = $_GET['email'];
    $Password = $_GET['password'];
    $userID = random_int(0, 9999999);
    $sql = "INSERT INTO user (userID,username,email,password) VALUES ('$userID','$Name','$Email','$Password')";
    
    echo '<br>';
    echo $sql;
    echo '<br>';
    if (!mysqli_query($con, $sql))
    {
        echo 'user not inserted';
    }
    else
    {
        echo ' user inserted';
    }
    
    mysqli_close($con);
    ?>