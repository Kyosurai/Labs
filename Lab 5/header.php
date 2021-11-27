<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="utf-8">
		<title>
			<?php
				if (defined('TITLE')) {
					print TITLE;
				}
				else {
					print 'Awesome News';
				}
			?>
		</title>
		<link href="StyleSheet.css" rel="stylesheet">
		<script src="https://kit.fontawesome.com/a076d05399.js"></script>
	</head>
	
	<body>
		<?php	echo "<div class='page-container'>";
				echo "<div class='content-wrap'>";

				echo "<div class='header'>";

				echo "<div class='header-row1'>";
				echo "<a href='login.php'>Sign In</a>";
				echo "&nbsp;|&nbsp;";
				echo "<a href='register.php'>Register</a>";
				echo "</div>";

				echo "<div class='header-row2'>";
				echo "<div class='header-column1'>";

				echo "<div class='header-subrow1'>";
				echo "<a href='index.php'><img src='pictures/logo.png' width='275'></a>";
				echo "<input type='text' placeholder='Search'><button type='button'><i class='fa fa-search'></i></button>";
				echo "</div>";


				echo "<div class='header-subrow2'>";
				echo "<ul>";
				echo "<li><a href='index.php'>Main</a></li>";
				echo "<li><a href='news.php'>All News</a></li>";
				echo "</ul>";
				echo "</div>";
				echo "</div>";
				echo "</div>";
				echo "</div>";
		?>