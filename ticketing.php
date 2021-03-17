<?php
if(isset($_GET['date'])){
	$date=htmlentities($_POST['date']);
	$tickets=(int)htmlentities($_POST['number']);
	$str;
	
}

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
				<li><a href="#">Schedule</a></li>
				<li><a href="#">Contact us</a></li>
			</ul>
		</nav>
		<hr>
	</header>
	<section>
		<form method="GET" action="/ticketing.php">
			<div>
				<label for="date">Date : </label>
  				<input type="date" id="date" name="date">
			</div>
			<div>
				<label for="number">Quantity : </label>
				<input type="number" id="number" name="number">
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
			/*function basket() {
				global $tickets;print "<p>salut</p>";
				$tickets[$_POST['date']] = $tickets[$_POST['date']] + $_POST['number'];
			}

			print '<table>';
			global $tickets;
			foreach($tickets as $date => $number) {
				print "<tr><th>" . $date . "</th><td>" . $number . "</td></tr>"; 
			}
			print '</table>';
			*/
			if(isset($_GET['date'])){
				echo "voila les daltons";
				$str= "<table><tr><th>$date</th><td>$tickets</td></tr></table>";
				echo $str;
			}


	


		?>
	</aside>
	<footer>
		<p>A London based Museum</p>
	</footer>
</body>
</html>
