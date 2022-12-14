<?php 
		include("../connect.php");
	?>

<?php 

	$q = $_GET['q'];
?>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo $q; ?> - Search Results</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../css/search.css">
</head>
<body>
	<header>
		<div class="header-container clearfix">
			<span id="logo-container">
				<a href="../en">
					<img id="logo" src="../images/logo.png">
				</a>
			</span>
			<form method="GET" action="search.php">
					<span id="form-container">
						<input type="text" name="q" value="<?php echo $q; ?>" required>
						<input type="submit" name="submit" value="Search">
					</span>
			</form>
		</div>
	</header>
	<hr/>

	<section class="display-results-section clearfix">

		<div class="result-container">
		
			<?php 

				$q = $_GET['q'];

				 if (isset($q)) {
			 		$search = mysqli_real_escape_string($conn, $_GET['q']);
			 		$sql = "SELECT * From sites WHERE title LIKE '%$q%' OR keywords LIKE '%$q%'  ";
			 		$result = mysqli_query($conn, $sql);
			 		$queryResult = mysqli_num_rows($result);		 			

			 		if ($queryResult > 0) {
			 			echo "<span class='no-of-results'> About $queryResult results </span>";
			 			while ($row = mysqli_fetch_assoc($result)) {
			 				echo "
			 					<div id='search-results-display'>
			 					<h3 id='db-title'><a href=' ".$row['url']." ' target='_blank' >".$row['title']."</a></h3>

			 					<p id='db-url'>".$row['url']."</p>

			 					<p id='db-desc'>".$row['description']."</p>

			 				</div>
			 				";
			 			}
			 		}else {
			 			echo "
				 			<div id='no-reults-container'>
				 				<p> Your search - <b>".$q."</b> - did not match any documents. <br/><br/>

				 				Suggestions:<br/>
				 				<ul>
				 					<li>Make sure that all words are spelled correctly.</li>
				 					<li>Try different keywords.</li>
				 					<li>Try more general keywords.</li>
				 				</ul>

							</div>
			 			";
			 		}
				 }
			?>
		</div>

		<div class="change-lanuage-container">
			<span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
			<p>नेपालीमा कानून खोज्दै हुनुहुन्छ?</p>
			<br/>
			<p>
				<a href="../ne/search.php?q=<?php echo $q; ?>&submit=e-Kanoon+खोजी">

					नेपालीमा परिवर्तन गर्नुहोस्
				</a>
			</p>
		</div>
	</section>
</body>
</html>
