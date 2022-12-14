<!DOCTYPE html>
<html>
<head>
	<title>e-Kanoon</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../css/index.css">
</head>
<body>
	<div id="main-container">
			<div id="logo-div">
				<img id="logo" src="../images/logo.png">
			</div>
			<div id="container">

				<form method="GET" action="search.php" autocomplete="off">
					<div class="autocomplete">
						<input id="myInput" type="text" name="q" placeholder="e-Kanoon मा खोजी गर्नुहोस् वा ब्राउज गर्नुहोस्" autofocus required>
					</div>
					<input id="myBtn" type="submit" name="submit" value="e-Kanoon खोजी">

					<a href="browse.php"><input type="button" value="ब्राउज" /></a>
				</form>
				<p><a href="../en"> <b> Looking for laws in English ?</b></a>
			</div>
	</div>
	<script src="../js/autocomplete.js"></script>

	<script>
var input = document.getElementById("myInput");
input.addEventListener("keyup", function(event) {
    event.preventDefault();
    if (event.keyCode === 13) {
        document.getElementById("myBtn").click();
    }
});
	</script>
</body>
</html>