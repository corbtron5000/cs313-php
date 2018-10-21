<!DOCTYPE html>
<html>
<head>
	<title>International Spies</title>
	<link rel="stylesheet" type="text/css" href="prove5.css">
</head>
<body>
	<header>
		<h1 id="title">International Spy Co.</h1>
		<ul>
			<li><a href="prove5.php" class='link'>Home</a></li>
			<li><a href="addSpy.php" class='link'>Add Spy</a></li>
			<li><a href="assignments.html" class='link'>Assignments</a></li>
		</ul>
	</header>
	<main>
		<br><br><br><br><br><br><br>
		<h3>Welcome to International Spy Co.</h3>
		<div>
			<p id="intro">In this world, you may need a spy, but you can't trust anyone. We make sure that the agents of our company are the best of the best. We do this because when people come looking for a job to get done, they want it done right. If you need get something back, stop assissnation, or even to do surveillance we have the spy for the job. No matter how hard the job might be our spies will make sure that it gets done right.</p>
			<img src="spy.png" id="introspy">
		</div>
		<form>
			<h1>List of Spies</h1>
			<?php
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

			$stmt = $db->prepare('SELECT id, name, image, description FROM spys');
     		$stmt->execute();
     		$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

     		foreach ($rows as $row) {
     			$id = $row['id'];
     			$name = $row['name'];
     			$image = $row['image'];
     			$description = $row['description'];

     			echo "<div class='spy'>";
     			echo "<img src='" . "$image' height='200' width='200'>";
     			echo "<div class='text'>";
     			echo "<a href='missions.php?id=$id' class='image'> <h3> $name </h3>";
     			echo "</a>";
     			echo "</div></div>";
     		}
			?>
		</form>
	</main>
</body>
</html>