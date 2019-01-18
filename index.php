<?php
	print '
	<!DOCTYPE html>
	<html>
		<head>
			<link rel="stylesheet" href="style.css">

			<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
			<meta http-equiv="content-type" content="text/html; charset=utf-8">
			<meta name="description" content="Example page(HTML, CSS)-beginner.">
			<meta name="keywords" content="html, css, example page, web aplikacije, vvg">
		
			<meta name="author" content="Mateo Markuš">
		
			<link rel="icon" href="favicon.ico" type="image/x-icon"/>
			<link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>
		
			<title>PHPstranica - HTML5</title>
		</head>
		<body>
			<header>

				<div'; if (!isset($_GET['menu']) || $_GET['menu'] ==1) { print ' class="home-image"'; } else { print ' class="home-image" style="height: 200px;"'; }  print '></div> 
					<nav>
						<ul>
						  <li><a href="index.php?menu=1">Home</a></li>
						  <li><a href="index.php?menu=2">News</a></li>
						  <li><a href="index.php?menu=3">Contact</a></li>
						  <li><a href="index.php?menu=4">About</a></li>
						  <li><a href="index.php?menu=5">Gallery</a></li>
						</ul>
					</nav>
			</header>
			<main>';
				# Homepage
				if (!isset($_GET['menu']) || $_GET['menu'] == 1) { include("home.php"); }
		
				# News
				else if ($_GET['menu'] == 2) { include("news.php"); }
												
				# Contact
				else if ($_GET['menu'] == 3) { include("contact.php"); }
		
				# About us
				else if ($_GET['menu'] == 4) { include("about-us.php"); }
				
				# Gallery
				else if ($_GET['menu'] == 5) { include("gallery.php"); }
				
				#News-5
				else if ($_GET['menu'] == 6) { include ("news-5.php"); }
								
				# News-4
				else if ($_GET['menu'] == 7) { include("news-4.php"); }
							
				# News-3
				else if ($_GET['menu'] == 8) { include("news-3.php"); }
							
				# News-2
				else if ($_GET['menu'] == 9) { include("news-2.php"); }
							
				# News-1
				else if ($_GET['menu'] == 10) { include("news-1.php"); }
				
			print '			
			</main>
			<footer>
				<p>&copy; 2018 Mateo Markuš <a href="https://github.com/mateomarkus?tab=repositories"><img src="img/GitHub-Mark-Light-32px.png" title="Github" alt="Github"></a></p>
			</footer>
		</body>
	</html>';
?>
