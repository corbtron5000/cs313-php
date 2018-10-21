<!DOCTYPE HTML>
<html>
<head>
	<title>add spy</title>
	<link rel="stylesheet" type="text/css" href="spy.css">
</head>
</head>
<body>
	<header>
		<h1 id="title">International Spy Co.</h1>
		<ul>
			<li><a href="prove5.php" class='link'>Home</a></li>
			<li><a href="missions.php" class='link'>Missions</a></li>
			<li><a href="addSpy.php" class='link'>Add Spy</a></li>
 			<li><a href="assignments.html" class='link'>Assignments</a></li>
		</ul>
	</header>
	<main>
		<br><br><br><br><br><br><br>
		<h1 id="title">Adding New Agent</h1>
		<form>
			<div id="form">
				<label>Name: </label><input type="text" placeholder="Enter Name" name="name"> <br>
				<label>Location: </label><input type="text" name="location" placeholder="Enter Location"><br>
				<label>Alias: </label><input type="text" name="Alias" placeholder="Enter Alias"><br>
				<label>Contact Info:</label><input type="text" name="contact" placeholder="Enter Contact"><br>
				<label>Years of service: </label><input type="text" name="service" placeholder="Enter years"><br>
				<label>Description: </label><input type="text" name=""><br>
				<input type="submit" name="submit" value="Add Agent">
			</div>
		</form>
	</main>

</body>
</html>