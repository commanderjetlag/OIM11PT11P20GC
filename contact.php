<!DOCTYPE html>
<html>
<head>
	<?php include 'include/head.php'; ?>
	<title>The Memory Game | Contact</title>
</head>
<body>
	<?php include 'include/menu.php'; ?>
	<div class="wrapper">
		<?php
			if (isset($_POST['send'])) {
				echo '<div class="container">';
				echo '	Uw bericht is verzonden!';
				echo '</div>';
			}
		?>
		
		<div class="container">
			<div class="contactHalf">
				<b>The Memory Game</b><br/>
				Postbus 555<br/>
				1234 AB Eindhoven<br/>
				Kerkstraat 20<br/>
				1234 AB Eindhoven<br/>
			</div>
			<div class="contactHalf">
				<b>The Memory Game</b><br/>
				T: 040-1234567<br/>
				F: 040-1234567<br/>
				E: info@thememorygame.nl<br/><br/>
			</div>
		</div>
		<div class="container">
			<center><h1>Contactformulier</h1></center>
			<form action="" method="post">
				<div class="contactHalf">
					<input type="text" name="name" placeholder="Uw naam" required="required">
				</div>
				<div class="contactHalf">
					<input type="email" name="email" placeholder="Uw e-maildres" required="required">
				</div>
				<div class="contactFull">
					<textarea name="bericht" required="required" rows="8" placeholder="Voer hier uw bericht in"></textarea>
					<input type="hidden" name="send" value="send">
					<input type="submit" name="submit" value="Verzend bericht" class="btnOveral">
				</div>
			</form>
		</div>
	</div>
	<?php include 'include/footer.php'; ?>
</body>
<?php include 'include/js.php'; ?>
</html>