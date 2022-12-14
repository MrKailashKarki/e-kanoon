<!DOCTYPE html>
<html>
<head>
	<title>e-Kanoon</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/index.css">
</head>
<body>

	<div id="main-container">
			<div id="logo-div">
				<img id="logo" src="images/logo.png">
			</div>
			<div id="container">

				<form method="GET" action="en/search.php" autocomplete="off">
					<div class="autocomplete">
						<input id="myInput" type="text" name="q" placeholder="Search e-Kanoon or browse" autofocus required>
					</div>
					<input id="myBtn" type="submit" name="submit" value="e-Kanoon Search">

					<a href="en/browse.php"><input type="button" value="Browse" /></a>
				</form>
				<p><a href="ne"> <b> नेपालीमा कानून खोज्दै हुनुहुन्छ ? </b></a>
			</div>
	</div>
	<script src="js/autocomplete.js"></script>

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