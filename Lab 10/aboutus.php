<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="utf-8">
		<title>About Us</title>
		<link href="StyleSheet.css" rel="stylesheet">
		<script src="https://kit.fontawesome.com/a076d05399.js"></script>
		<style>
			.main {
				padding-left: 25%;
				padding-right: 25%;
				margin-top: 26px;
				margin-bottom: 26px;
				text-align: center;
			}
		</style>
	</head>
	
	<body>
		<?php 	echo "<div class='page-container'>";
				echo "<div class='content-wrap'>";
				//Header Start
				echo "<div class='header'>";
				//User Login/Register
				echo "<div class='header-row1'>";
				echo "<a href='login.php'>Sign In</a>";
				echo "&nbsp;|&nbsp;";
				echo "<a href='register.php'>Register</a>";
				echo "</div>";

				echo "<div class='header-row2'>";
				echo "<div class='header-column1'>";
				//Logo & Searchbar
				echo "<div class='header-subrow1'>";
				echo "<a href='index.php'><img src='pictures/logo.png' width='275'></a>";
				echo "<input type='text' placeholder='Search'><button type='button'><i class='fa fa-search'></i></button>";
				echo "</div>";

				//Navigation Bar
				echo "<div class='header-subrow2'>";
				echo "<ul>";
				echo "<li><a href='index.php'>Main</a></li>";
				echo "</ul>";
				echo "</div>";
				echo "</div>";
				echo "</div>";
				echo "</div>";
				//Header End

				//Main Start
				echo "<div class='main'>";
				echo "<h2>About Us</h2>";
				echo "<p>Here at Awesome News, we strive to bring you the latest news.</p> ";
				echo "<p>We aim to the best news provider available amongst all the choices,";
				echo "as well as to provide the latest news to you in the fastest manner,";
				echo "without missing a single day.</p>";
				echo "</div>";
				//Main End
				echo "</div>";

				//Footer Start
				echo "<div class='footer'>";
				echo "<div class='footer-column1'>";
				echo "<p><img src='pictures/logo.png' width='100' height='100'></p>";
				echo "<h3>Operating Hours</h3>";
				echo "<p>Everyday</p>";
				echo "<p>24-Hours</p>";
				echo "</div>";

				echo "<div class='footer-column2'>";
				echo "<h3><a href='contactus.php'>Contact Us</a></h3>";
				echo "<table>";
				echo "<tr>";
				echo "<td><i class='far fa-envelope'></i></td>";
				echo "<td>&nbsp;contactus@awesomenews.com</td>";
				echo "</tr>";
				echo "<tr>";
				echo "<td><i class='fas fa-phone-volume'></i></td>";
				echo "<td>&nbsp;012-3456789</td>";
				echo "</tr>";
				echo "</table>";
				echo "<br/>";
				echo "<div class='social-media'>";
				echo "<p>";
				echo "<a href='#'><i class='fab fa-facebook-square'></i></a>&nbsp;";
				echo "<a href='#'><i class='fab fa-instagram'></i></a>&nbsp;";
				echo "<a href='#'><i class='fab fa-twitter-square'></i></a>";
				echo "</p>";
				echo "</div>";
				echo "</div>";

				echo "<div class='footer-column3'>";
				echo "<h3>Others</h3>";
				echo "<p><a href='aboutus.php'>About Us</a></p>";
				echo "</div>";
				echo "</div>";
				//Footer End
				echo "</div>";
		?>
	</body>
</html>