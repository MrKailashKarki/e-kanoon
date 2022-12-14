<?php 
		include("../connect.php");
	?>

<?php 

	$q = $_GET['q'];
?>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo $q; ?> - e-Kanoon खोजी</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../css/search.css">
</head>
<body>
	<header>
		<div class="header-container clearfix">
			<span id="logo-container">
				<a href="../ne">
					<img id="logo" src="../images/logo.png">
				</a>
			</span>
			<form method="GET" action="search.php">
					<span id="form-container">
						<input type="text" name="q" value="<?php echo $q; ?>" required>
						<input type="submit" name="submit" value="खोज">
					</span>
			</form>
		</div>
	</header>
	<hr/>

	<section class="display-results-section clearfix">

		<div class="result-container">
		
			<?php 

				$q = $_GET['q'];

				 if (isset($_GET['q'])) {
			 		$search = mysqli_real_escape_string($conn, $_GET['q']);
			 		$sql = "SELECT * From sitesne WHERE title LIKE '%$q%' OR keywords LIKE '%$q%'  ";
			 		$result = mysqli_query($conn, $sql);
			 		$queryResult = mysqli_num_rows($result);

			 		if ($queryResult > 0) {
			 			echo "<span class='no-of-results'> लगभग $queryResult नतिजाहरु </span>";
			 			while ($row = mysqli_fetch_assoc($result)) {
			 				echo "
			 				<div id='search-results-display'>

			 					<h3 id='db-title'><a href=' ".$row['url']." ' target='_blank' >".$row['title']."</a></h3>

			 					<p id='db-url'>".$row['url']."</p>

			 					<p id='db-desc'>".$row['description']."</p>

			 				</div>";
			 			}
			 		}else {
			 			echo "
				 			<div id='no-reults-container'>
				 				<p> तपाइँको खोज - <b>".$q."</b> - कुनै कागजातमा फेला पारेन । <br/><br/>

				 				सुझावहरु:<br/>
				 				<ul>
				 					<li>सबै शब्दको हिज्जे सही छ भन्ने पक्का गर्नुहोस</li>
				 					<li>अन्य शब्दहरु प्रयास गर्नुहोस।</li>
				 					<li>अझै साधारण शब्दहरु प्रयोग गर्ने प्रयास गर्नुहोस् ।</li>
				 				</ul>

							</div>
			 			";
			 		}
				 }
			?>
		</div>

		<div class="change-lanuage-container">
			<span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
			<p>Looking for laws in English ?</p>
			<br/>
			<p>
				<a href="../en/search.php?q=<?php echo $q; ?>&submit=e-Kanoon+Search">
					Change to English
				</a>
			</p>
		</div>
	</section>
</body>
</html>