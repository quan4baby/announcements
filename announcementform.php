<?php

$title = $_POST['title'];
$body = $_POST['body'];



if (!empty($title) || !empty($body) 
|| !empty($email)){
	$host = "localhost";
	$dbUsername = "root";
	$dbPassword = "";
	$dbname = "announcements";
	
	$conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
	if(mysqli_connect_error()){
		die('Connect Error('. mysqli_connect_error().')'. mysqli_connect_error());
	}else {
		
		$INSERT = "INSERT Into table_1 (title, body) 
		values(?, ?)";
		
		
		
			$stmt = $conn->prepare($INSERT);
			$stmt->bind_param("ss", $title, $body);
			$stmt->execute();
			echo "New record inserted successfully";
			
		
		$stmt->close();
		$conn->close();
	}
	
	
} else {
	echo "All fields are required";
	die();
}
	

?>

<a href="index.php">View Announcements</a>
