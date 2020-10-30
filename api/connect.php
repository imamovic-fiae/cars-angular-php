<?php

// db credentials
//define('DB_HOST', 'localhost');
define('DB_USER', 'angular');
define('DB_PASS', 'microsoft');
define('DB_NAME', 'angular_db');

// Test neuer const funk.
const DB_HOST='localhost';

// Connect with the database.
function connect()
{
  $connect = mysqli_connect(DB_HOST ,DB_USER ,DB_PASS ,DB_NAME);

  if (mysqli_connect_errno($connect)) {
    die("Failed to connect:" . mysqli_connect_error());
  }

  mysqli_set_charset($connect, "utf8");

  return $connect;
}


$con = connect();

/* jimmy test
 if($con){
	
	$query = "SELECT * FROM cars";
	
	$results=mysqli_query($con,$query);
	
	if($results) {
		
		while($row=mysqli_fetch_assoc($results)) {
			echo '<pre>';
			var_dump($row);
			echo '</pre>';
			$model=$row['model'];
			echo $model;
	}
}
}

*/