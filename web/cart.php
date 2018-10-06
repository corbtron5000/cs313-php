<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="prove3.css">
	<title>Shopping Cart</title>
</head>
<body>
	<header>
		<h1 id="title">Puzzle Mania</h1>
		<ul>
			<li><a href="prove3.php">Home</a></li>
			<li><a href="cart.php">Shopping Cart</a></li>
			<li><a href="checkout.php">Checkout</a></li>
			<li><a href="assignments.html">Assignments</a></li>
		</ul>
	</header>
<br><br><br><br><br><br><br><br>
<main>
	<h1 id="shopping">Shopping Cart</h1>

	<form method="post" action="<?php echo($_SERVER['PHP_SELF']); ?>" >
		<?php
			if ($_SESSION["cart"] == 0) {
				echo "<p> cart is empty </p>";
			}
			
			if ($_SESSION['count2'] > 0) {

				$q2 = $_SESSION['count2'];
				$price2 = $_SESSION['p2'] * $q2;
				echo "<div>";
				echo "<img src='c2x2.jpg' height='200' width='200'>";
				echo "<div id='cube2>";
				echo "<h3> 2 x 2 Rubik's Cube </h3>";
				echo "<label> Quantity: $q2 </table?";
				echo "<label> price: $ $price2.00 </label>";
				echo "<br>";
				echo "<input type='submit' name='remove2' value='remove one'>";
				echo "<a href= 'prove3.php'> Continue shopping </a>";
				echo "</div>";
				echo "</div>";

				if (isset($_POST['remove2'])) {
					$_SESSION['count2'] -= 1;
					$_SESSION['cart'] -= 1;
				}

			}
		?>
	</form>
</main>

</body>
</html>