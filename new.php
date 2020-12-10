

<html>
<head>
<title>Announcements</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>


<body>
	<div class="header">
		<h2>Create Announcement</h2>

	</div>
<form action="announcementform.php" method="post" id="aform"/>
	<div class="input-group">
<label>Title</label>
<input type="text" name="title" placeholder="Enter Title" required> </div>

<div class="input-group">
<label>Details</label>
<textarea style="resize: none; width: 93%; height: 30%; line-height: 18px; padding: 5px 10px; font-size: 16px; border-radius: 5px;
	border: 1px #ff5852;" type="text" name="body" rows="5" cols="30" wrap="soft"placeholder="Enter Details" form="aform" required></textarea>
</div>


	
	
	<div class="input-group">
<button type="submit" name="submit" class="btn">Submit</button>
</div>
<div>
	 <a href="index.php">View Announcements</a>

</div>
</form>
</body>
</html>
