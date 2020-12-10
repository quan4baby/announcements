

<html>
<head>

<title>Announcements</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<h1>Announcements</h1>

<body>
<table style="background-color:#ffeb99" align="center" border="1px" style="width:300px;  line-height:30px">
	

<th>Title</th>
<th>Details</th>

</tr>

<?php
$conn = mysqli_connect("localhost", "root", "", "announcements");
$sql="SELECT * FROM table_1";
$result=$conn->query($sql);

if ($result->num_rows > 0) {
	while ($row = $result-> fetch_assoc()) {
		echo "<tr><td>" . $row["title"] . "</td><td>" . $row["body"] .  "</td></tr>";
	
	}
}
else {
	echo "No Results";
}
$conn->close();
?>
</table>
<a href="new.php">Create Announcement</a>
</body>
</html>
