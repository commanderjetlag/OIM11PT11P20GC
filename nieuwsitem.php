<!DOCTYPE html>
<html>
<head>
	<?php include 'include/head.php'; ?>
	<title>The Memory Game | Nieuws</title>
</head>
<body>
	<?php include 'include/menu.php'; ?>
	<div class="wrapper">
		<div class="container">
			<b>
			<?php
				switch ($_GET['item']) {
					case '1':
						echo 'The Memory Game genomineerd voor innoverent product van het jaar';
						break;
					case '2':
						echo 'The Memory Game Prototype';
				}
			?>
			</b>
		</div>
		<div class="container">
			<div class="nieuwsItem">
			<?php
				switch ($_GET['item']) {
					case '1':
						echo 'The Memory Game is genomineerd voor het meest innoverend product van jaar. Breng je stem uit op www.innovatie.nl!';
						break;
					case '2':
						echo 'De eerst versie van The Memory Game is gelanceerd. Probeer hem nu en maak kans op een mooie prijs wanneer je feedback achterlaat!';
				}
			?>
			</div>
		</div>
	</div>
	<?php include 'include/footer.php'; ?>
</body>
<?php include 'include/js.php'; ?>
</html>