<!DOCTYPE html>
<html>
<head>
	<?php include 'include/head.php'; ?>
	<title>The Memory Game | Home</title>
</head>
<body>
	<?php include 'include/menu.php'; ?>
        <div class="wrapper">
            <div class="container" id="fotoenbeschrijving">
                <img id="productfoto" src="img/logo_memory_game.png" alt = "Memory Game" >
                <div class="productDescription">
					<h3>The memory Game</h3>
					<h4 id="oudeprijs">€79,95</h4>
                    <h1 id="prijs">€64,95</h1>
                    <input type="submit" name="submit" value="Koop nu!" class="btnOveral" id="btnKoop">
                </div>
            </div>
			<div class="Container" id="productinformatie">
				<div class="fa fa-info" id="infolabel">
				</div>
				<p class="nieuwsItem" id="informatietekst">
					Productinformatie over dingen die heel interessant zijn zoals de ergonomiek van het
					ontwerp etcetera. </br>
					Natuurlijk met extra margins rond de zijkant om de text er professioneler
					uit te laten zien.
				</p>
			</div>
			<div class="Container">
				<div class="fa fa-star" id="reviewlabel">
				</div>
				<p class="nieuwsItem review">
					Ik vind het een heel mooi product.</br> &emsp; &emsp; &emsp; &emsp;-Hema(2017)</br>
				</p>
				<p class="nieuwsItem review">
					Het is echt niet normaal. </br> &emsp; &emsp; &emsp; &emsp; -de Speld(2017)</br>
				</p>
			</div>
    	</div>
	<?php include 'include/footer.php'; ?>
</body>
<?php include 'include/js.php'; ?>
</html>
