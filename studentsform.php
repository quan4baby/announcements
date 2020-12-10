<?php

$stuID = $_POST['stuID'];
$fName = $_POST['fName'];
$lName = $_POST['lName'];
$email = $_POST['email'];
$major = $_POST['major'];
$class = $_POST['class'];

if (!empty($stuID) || !empty($fName) || !empty($lName) 
|| !empty($email) || !empty($major) || !empty($class)){
	$host = "localhost";
	$dbUsername = "root";
	$dbPassword = "";
	$dbname = "student_registry";
	
	$conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
	if(mysqli_connect_error()){
		die('Connect Error('. mysqli_connect_error().')'. mysqli_connect_error());
	}else {
		$SELECT = "SELECT email From table_1 Where email = ? Limit 1";
		$INSERT = "INSERT Into table_1 (stuID, fName, lName, email, major, class) 
		values(?, ?, ?, ?, ?, ?)";
		
		$stmt = $conn->prepare($SELECT);
		$stmt->bind_param("s", $email);
		$stmt->execute();
		$stmt->bind_result($email);
		$stmt->store_result();
		$rnum = $stmt->num_rows;
		
		if($rnum==0){
			$stmt->close();
			
			$stmt = $conn->prepare($INSERT);
			$stmt->bind_param("ssssss", $stuID, $fName, $lName, $email, $major, $class);
			$stmt->execute();
			echo "New record inserted successfully";
			
		}else {
			echo "Someone already register using this email";
		}
		$stmt->close();
		$conn->close();
	}
	
} else {
	echo "All fields are required";
	die();
}
	

?>

<a href="index.php">Student Registration</a>
