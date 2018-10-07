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

			 
				if (isset($_POST['remove2'])) {
					$_SESSION['count2'] -= 1;
					$_SESSION['cart'] -= 1;
					$_SESSION['total'] -= 7;
					echo "<p> cart is empty </p>";
					
				}

				if ($_SESSION['count2'] > 0) {

					$q2 = $_SESSION['count2'];
					$price2 = $_SESSION['p2'] * $q2;
					$_SESSION['total'] += $price2;
					echo "<div>";
					echo "<img src='c2x2.jpg' height='200' width='200'>";
					echo "<div id='cube2'>";
					echo "<h3> 2 x 2 Rubik's Cube </h3>";
					echo "<label> Quantity: $q2 </table?";
					echo "<label> price: $ $price2.00 </label>";
					echo "<br>";
					echo "<input type='submit' name='remove2' value='remove one'>";
					echo "<a href= 'prove3.php'> Continue shopping </a>";
					echo "</div>";
					echo "</div>";
				}

			}

			if ($_SESSION['count3'] > 0) {

			 
				if (isset($_POST['remove3'])) {
					$_SESSION['count3'] -= 1;
					$_SESSION['cart'] -= 1;
					$_SESSION['total'] -= 9;
					echo "<p> cart is empty </p>";
					
				}

				if ($_SESSION['count3'] > 0) {

					$q3 = $_SESSION['count3'];
					$price3 = $_SESSION['p3'] * $q3;
					$_SESSION['total'] += $price3;
					echo "<div>";
					echo "<img src='c3x3.jpg' height='200' width='200'>";
					echo "<div id='cube3'>";
					echo "<h3> 3 x 3 Rubik's Cube </h3>";
					echo "<label> Quantity: $q3 </table?";
					echo "<label> price: $ $price3.00 </label>";
					echo "<br>";
					echo "<input type='submit' name='remove3' value='remove one'>";
					echo "<a href= 'prove3.php'> Continue shopping </a>";
					echo "</div>";
					echo "</div>";
				}

			}

			if ($_SESSION['count4'] > 0) {

			 
				if (isset($_POST['remove4'])) {
					$_SESSION['count4'] -= 1;
					$_SESSION['cart'] -= 1;
					$_SESSION['total'] -= 13;
					echo "<p> cart is empty </p>";
					
				}

				if ($_SESSION['count4'] > 0) {

					$q4 = $_SESSION['count4'];
					$price4 = $_SESSION['p4'] * $q4;
					$_SESSION['total'] += $price4;
					echo "<div>";
					echo "<img src='c4x4.jpg' height='200' width='200'>";
					echo "<div id='cube4'>";
					echo "<h3> 4 x 4 Rubik's Cube </h3>";
					echo "<label> Quantity: $q4 </table?";
					echo "<label> price: $ $price4.00 </label>";
					echo "<br>";
					echo "<input type='submit' name='remove4' value='remove one'>";
					echo "<a href= 'prove3.php'> Continue shopping </a>";
					echo "</div>";
					echo "</div>";
				}

			}

			if ($_SESSION['count5'] > 0) {

			 
				if (isset($_POST['remove5'])) {
					$_SESSION['count5'] -= 1;
					$_SESSION['cart'] -= 1;
					$_SESSION['total'] -= 16;
					echo "<p> cart is empty </p>";
					
				}

				if ($_SESSION['count5'] > 0) {

					$q5 = $_SESSION['count5'];
					$price5 = $_SESSION['p5'] * $q5;
					$_SESSION['total'] += $price5;
					echo "<div>";
					echo "<img src='c5x5.jpg' height='200' width='200'>";
					echo "<div id='cube5'>";
					echo "<h3> 5 x 5 Rubik's Cube </h3>";
					echo "<label> Quantity: $q5 </table?";
					echo "<label> price: $ $price5.00 </label>";
					echo "<br>";
					echo "<input type='submit' name='remove5' value='remove one'>";
					echo "<a href= 'prove3.php'> Continue shopping </a>";
					echo "</div>";
					echo "</div>";
				}

			}

			if ($_SESSION['count6'] > 0) {

			 
				if (isset($_POST['remove6'])) {
					$_SESSION['count6'] -= 1;
					$_SESSION['cart'] -= 1;
					$_SESSION['total'] -= 19;
					echo "<p> cart is empty </p>";
					
				}

				if ($_SESSION['count6'] > 0) {

					$q6 = $_SESSION['count6'];
					$price6 = $_SESSION['p6'] * $q6;
					$_SESSION['total'] += $price6;
					echo "<div>";
					echo "<img src='c6x6.jpg' height='200' width='200'>";
					echo "<div id='cube6'>";
					echo "<h3> 6 x 6 Rubik's Cube </h3>";
					echo "<label> Quantity: $q6 </table?";
					echo "<label> price: $ $price6.00 </label>";
					echo "<br>";
					echo "<input type='submit' name='remove6' value='remove one'>";
					echo "<a href= 'prove3.php'> Continue shopping </a>";
					echo "</div>";
					echo "</div>";
				}

			}

			if ($_SESSION['count7'] > 0) {

			 
				if (isset($_POST['remove7'])) {
					$_SESSION['count7'] -= 1;
					$_SESSION['cart'] -= 1;
					//$_SESSION['total'] -= 22;
					echo "<p> cart is empty </p>";
					
				}

				if ($_SESSION['count7'] > 0) {

					$q7 = $_SESSION['count7'];
					$price7 = $_SESSION['p7'] * $q7;
					//$_SESSION['total'] += $price7;
					echo "<div>";
					echo "<img src='c7x7.jpg' height='200' width='200'>";
					echo "<div id='cube7'>";
					echo "<h3> 7 x 7 Rubik's Cube </h3>";
					echo "<label> Quantity: $q7 </table?";
					echo "<label> price: $ $price7.00 </label>";
					echo "<br>";
					echo "<input type='submit' name='remove7' value='remove one'>";
					echo "<a href= 'prove3.php'> Continue shopping </a>";
					echo "</div>";
					echo "</div>";
				}

			}
		?>
		<p>Total: </p>
		<a href="checkout.php"> Continue to checkout</a>
	</form>
</main>

</body>
</html>