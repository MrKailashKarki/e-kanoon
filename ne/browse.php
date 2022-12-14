<!DOCTYPE html>
<html>
<head>
	<title>	Browse Nepali Laws</title>
	<link rel="stylesheet" href="browse.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript" src="browse1.js"></script>
<script type="text/javascript" src="browse2.js"></script>
</head>
<body>
	<header>
			<a href="../ne">
                    <img id="logo" src="logo.png">
                </a>
			<nav class="sp-nav">
				<ul>
                    <li><a href="../ne">गृहपृष्ठ</a></li>
                    <li><a href="#">हाम्रो बारेमा </a></li>
                    <li><a href="#">सम्पर्क</a></li>
                </ul>
			</nav>
	</header><br><br><br><br>
		<table id="example" class="display" width="100%"></table>

<script type="text/javascript">
	var dataSet = [
    [ "Army Act 2063", "2063/04/25", "5" ],
    [ "Civil Rights Act 2012", "2012/04/25", "7" ],
    [ "Land Aquistion Act 2048", "2048/04/25", "45" ],
    [ "Prisoner Act 2050", "2050/04/25", "32" ],
    [ "Lottery Act 2055", "2055/04/25", "96" ],
    [ "Education Act 2049", "2049/04/25", "11" ],
    [ "Banks & Financial Institution Act 2063", "2063/04/25", "1" ],
    [ "Passports Act 2024", "2024/04/25", "52" ],
    [ "Feed Act 2033", "2033/04/25", "48" ],
    [ "Privatization Act 2050", "2050/04/25", "75" ],
    [ "Constitution of Nepal 2015", "2015/04/25", "3" ],
    [ "Patent Design and Trademark Act 2005", "2005/04/25", "77" ],
    [ "Mines and Minerals Act 2031", "2031/04/25", "4" ],
    [ "Forest Act 2049", "2049/04/25", "56" ],
    [ "Pokhara University Act 1996", "1996/04/25", "26" ],
    [ "Nepal Bar Coucil Act 2050", "2050/04/25", "132" ],
    [ "Lands Act 2021", "2021/04/25", "29" ],
    [ "Gurhi Corporation Act 2033", "2033/04/25", "2" ],
    [ "Solid Waste Management Act 2013", "2013/04/25", "63" ],
    [ "Export and Import Tax 2049", "2049/04/25", "169" ],
    [ "Muluki Ain 2074", "2074/04/25", "8" ],
   
];
 
$(document).ready(function() {
    $('#example').DataTable( {
        data: dataSet,
        columns: [
            { title: "Act Title" },
            { title: "Enactment Date" },
            { title: "Act No" }
        ]
    } );
} );
</script>

	<footer>
			<p>&copy; e-Kanoon, 2018.</p>
			<p>Digital Repositary of All Central & State Acts</p>
	</footer>

</body>
</html>

