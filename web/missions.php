<!DOCTYPE html>
<html>
<head>
	<title>International Spies</title>
	<link rel="stylesheet" type="text/css" href="spy.css">
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
		<h1>Spy</h1>
		<?php
			function getId($data) {

			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		}
		try {
				$dbUrl = getenv('DATABASE_URL');
				$dbOpts = parse_url($dbUrl);
				$dbHost = $dbOpts["host"];
				$dbPort = $dbOpts["port"];
				$dbUser = $dbOpts["user"];
				$dbPassword = $dbOpts["pass"];
				$dbName = ltrim($dbOpts["path"],'/');
				$db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);

				$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			}
			catch (PDOException $ex)
			{
				echo 'Error!: ' . $ex->getMessage();
			  	die();
			}

     	if($_SERVER['REQUEST_METHOD'] == 'GET')
     	{
    		if(isset($_GET['id'])) 
    		{
      			$id = getId($_GET['id']);
      			$stmt = $db->prepare('SELECT spys.id, spys.name, spys.image, spy.description, spys.years, spys.location, spys.contact_info, aliases.name FROM spys, aliases ON spys.id = aliases.spy_id WHERE spys.id=:id');
      			$stmt->bindValue(':id', $id, PDO::PARAM_INT);
      			$stmt->execute();
      			$row = $stmt->fetch(PDO::FETCH_ASSOC);

      			$name = $row['spys.name'];
     			$image = $row['spys.image'];
     			$description = $row['spys.description'];
     			$year = $row['spys.years'];
     			$location = $row['spys.location'];
     			$contact = $row['spys.contact_info'];
     			$aliases = $row['aliases.name'];

      			echo "<h1>$name</h1>";
      			echo "<img src='" . "$image' height='200' width='200'>";
      			echo "<p><span> Description: </span>$description</p>";
      			echo "<p><span> Location: </span>$location</p>";
      			echo "<p><span> Length of Employment: </span>$year</p>";
      			echo "<p><span> Contact Info: </span>$contact</p>";

      		}
      	}
		?>
	</main>
</body>
</html>