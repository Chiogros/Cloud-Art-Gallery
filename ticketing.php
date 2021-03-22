<?php
$cookie_date;
$cookie_quantite;
?>

<!DOCTYPE html>
<html lang="fr">
<head><!-- Test -->
	<title>Cloud Art Gallery - Ticketing</title><!-- Titre à mettre-->
	<meta charset="utf-8">
	<link rel="stylesheet" href="style_ticketing.css"><!-- Fichier CSS à mettre-->
</head>
<body>
	<header>
		<nav>
			<ul>
				<li><a href="artworks.html">Artworks</a></li>
				<li><a href="#">Ticketing</a></li>
				<li><a href="contact.html">Contact us</a></li>
			</ul>
		</nav>
		<hr>
	</header>
	<div>
		<section>
			<iframe src="https://calendar.google.com/calendar/embed?height=400&amp;wkst=2&amp;bgcolor=%23f55e61&amp;ctz=Europe%2FParis&amp;src=NDJjbGFhbzY3YWo1YmMyMzA1MnBqMWNwbDRAZ3JvdXAuY2FsZW5kYXIuZ29vZ2xlLmNvbQ&amp;color=%23E4C441&amp;showDate=1&amp;showPrint=0&amp;showTabs=0&amp;showCalendars=0&amp;showTz=0&amp;hl=en" style="border:solid 1px #777" width="800" height="400" frameborder="0" scrolling="no"></iframe>
			<form method="GET" action="ticketing.php">
				<div>
					<label for="date">Date : </label>
					<input type="date" id="date" name="date" required>
				</div>
				<div>
					<label for="number">Quantity : </label>
					<input type="number" id="number" name="number" required>
				</div>
				<input type="submit" value="Submit"><br>
			</form>
			<ul>
				<h3>Payment method :</h3>
				<li>idk</li>
				<li>Dogecoin</li>
			</ul>
		</section>
		<aside>
			<?php
				if (isset($_COOKIE[$_GET['date']])) {
					$quantityAlreadyAdded = $_COOKIE[$_GET['date']];
				}
				setcookie($_GET['date'], $quantityAlreadyAdded + $_GET['number'], time() + (86400 *30), "/");

				print '<table>';
				if (count($_COOKIE) > 0) {
					print "<h2>Cart</h2>";
				}
				foreach($_COOKIE as $date => $number) {
					print "<tr><th>" . $date . "</th><td>" . $number . "</td></tr>"; 
				}
				print '</table>';
			?>
		</aside>
	</div>
	<footer>
		<p>A London based Museum</p>
	</footer>
</body>
</html>
