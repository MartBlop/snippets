<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<!-- Title for the tab -->
	<title>Mart's Snippets</title>
	<!-- Meta description -->
	<meta name="description" content="Testing purposes">
	<!-- Meta author -->
	<meta name="author" content="Mart">
	<!-- Link the custom stylesheet -->
	<link rel="stylesheet" href="css/styles.css">
	<!-- Link the custom jQuery script file -->
	<script src="scripts/jscripts.js"></script>
	<!-- Link Roboto from Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<!-- Link jQuery -->
	<script src="scripts/jquery-3.3.1.min.js"></script>
	<!-- Insert the various favicons -->
	<link rel="apple-touch-icon" sizes="57x57" href="favicon/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="favicon/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="favicon/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="favicon/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="favicon/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="favicon/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="favicon/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="favicon/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192" href="favicon/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="favicon/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
	<link rel="manifest" href="favicon/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="favicon/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">
</head>

<body>
	<div class=everything>
		<div class=title>
			<h2>Mart's HTML5/PHP/JS Snippets</h2>
		</div>
		<div id="ipinfo">
			<!-- Reveal the client's IP and other details -->
			<?php
			$ip = $_SERVER[ 'REMOTE_ADDR' ];
			$details = json_decode( file_get_contents( "http://ipinfo.io/{$ip}/json" ) );
			echo "It looks like your IP is ";
			echo $details->ip;
			echo ",";
			echo " you seem to originating from ";
			echo $details->city;
			echo " and the country your IP address reports is ";
			echo $details->country;
			?>
		</div>
		<p>The browser is currently reporting these parameters:</p>
		<!-- Display the resolution -->
		<div>
			<div id="dimensions"></div>
		</div>
		<!-- Display the browser version -->
		<div>
			<p id="browserversion"></p>
			<p id="browserplatform"></p>
			<p id="browserlanguage"></p>
		</div>
		<!-- Current time and date -->
		<div>
			<div id="clock"></div>
		</div>
	</div>
	<!-- Link custom script -->
	<script src="scripts/scripts.js"></script>
</body>
</html>