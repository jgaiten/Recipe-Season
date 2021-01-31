<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Homepage</title>
</head>
    <body>
    <a href= "homepage.php">Home</a>
    <a href= "insert.php">Insert</a>
    <p>This is a paragraph!!! Cool</p>
   // <?php
//    $con = mysqli_connect("avl.cs.unca.edu", "jgaiten", "sql4you", "jgaitenDB");
//    if (! $con) {
//        echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
//        die('Could not connect: ' . mysqli_error($con));
//    } else {
//        echo "Connected to mySQL successfully. <br>" . PHP_EOL;
//    }
	//?>
	
	
	<form action="insert.php" method="post">
		Name : <input type="text" name="username">
			<br/>
		Email : <input type="text" name="email">
			<br/>
		Password : <input type="text" name= "password">
			<input type="submit" value="Insert">
	</form>
        
        <h1>Testing Website Scrapping Here</h1>
        
        <h3>Drinks</h3>
<ul>
  <li>Coffee</li>
  <li>Tea</li>
  <li>Milk</li>
</ul>

    <h3>Food</h3>
<ol>
  <li>Pizza</li>
  <li>Hamburger</li>
  <li>Mac n Cheese</li>
</ol>
    </body>
    
</html>