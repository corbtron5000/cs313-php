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
			<li><a href="missions.php" class='link'>Missions</a></li>
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

			$stmt = $db->prepare('SELECT id, name, image, description FROM spys');
     		$stmt->execute();
     		$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
		?>
	</main>
</body>
</html>