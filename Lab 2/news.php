<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="utf-8">
		<title>All News</title>
		<link href="StyleSheet.css" rel="stylesheet">
		<script src='https://kit.fontawesome.com/a076d05399.js'></script>
		
		<style>			
			.main {
				padding-left: 75px;
				padding-right: 75px;
				box-sizing: border-box;
			}
			
			.product-catalog {
				display: flex;
				flex-wrap: wrap;
				justify-content: center;
			}
			
			.individual-item-containter {
				display: flex;
				flex-direction: column;
				width: 150px;
				padding: 10px;
				margin: 10px;
				border-radius: 5px;
				border-style: solid;
				border-color: #cccccc;
				border-width: 1px;
			}
			
			.individual-option {
				text-align: center;
			}
			
			.main ul {
				list-style-type: none;
			}
			
			.individual-img {
				text-align: center;
			}

			.quantity-input {
				text-align: center;
				width: 40px;
			}
			
			.product-catalog a {
				text-decoration: none;
				color: black;
			}
			
			.page-number {
				user-select: none;
				text-align: right;
			}
			
			.page-number a {
				text-align: right;
				text-decoration: none;
				font-size: 20px;
			}
			
			.page-number a:hover {
				text-decoration: underline;
			}
			
			.product-name:hover {
				text-decoration: underline;
			}
			
			.disable-click {
				pointer-events: none;
			}
		</style>
	</head>
	
	<body>
		<?php	echo "<div class='page-container'>";
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
				echo "<li><a href='news.php'>All News</a></li>";
				echo "</ul>";
				echo "</div>";
				echo "</div>";
				echo "</div>";
				echo "</div>";
				//Header End

				//Main Start
				echo "<div class='main'>";
				echo "<ul>";
				echo "<div class='product-catalog'>";
				echo "<li>";
				echo "<div class='individual-item-containter'>";
				echo "<div class='individual-img'>";
				echo "<a class='product-name' href='newsdetail.php'><img src='pictures/page.png' width='100' height='100'></a>";
				echo "</div>";
				echo "<div class='individual-desc'>";
				echo "<p><b><a class='product-name' href='newsdetail.php'>Latest News</a></p></b>";
				echo "</div>";
				echo "</div>";
				echo "</li>";
				echo "<li>";
				echo "<div class='individual-item-containter'>";
				echo "<div class='individual-img'>";
				echo "<a href='#'><img src='pictures/page.png' width='100' height='100'></a>";
				echo "</div>";
				echo "<div class='individual-desc'>";
				echo "<p><b><a class='product-name' href='#'>2nd News of the Day</a></p></b>";
				echo "</div>";
				echo "</div>";
				echo "</li>";
				echo "<li>";
				echo "<div class='individual-item-containter'>";
				echo "<div class='individual-img'>";
				echo "<a href='#'><img src='pictures/page.png' width='100' height='100'></a>";
				echo "</div>";
				echo "<div class='individual-desc'>";
				echo "<p><b><a class='product-name' href='#'>3rd News of the Day</a></p></b>";
				echo "</div>";
				echo "</div>";
				echo "</li>";
				echo "<li>";
				echo "<div class='individual-item-containter'>";
				echo "<div class='individual-img'>";
				echo "<a href='#'><img src='pictures/page.png' width='100' height='100'></a>";
				echo "</div>";
				echo "<div class='individual-desc'>";
				echo "<p><b><a class='product-name' href='#'>4th News of the Day</a></p></b>";
				echo "</div>";
				echo "</div>";
				echo "</li>";
				echo "<li>";
				echo "<div class='individual-item-containter'>";
				echo "<div class='individual-img'>";
				echo "<a href='#'><img src='pictures/page.png' width='100' height='100'></a>";
				echo "</div>";
				echo "<div class='individual-desc'>";
				echo "<p><b><a class='product-name' href='#'>5th News of the Day</a></p></b>";
				echo "</div>";
				echo "</div>";
				echo "</li>";
				echo "</ul>";
				echo "<div class='page-number'>";
				echo "<p>";
				echo "<a class='disable-click' href='#'>1</a>&nbsp;";
				echo "<a href='#'>2</a>&nbsp;";
				echo "<a href='#'>3</a>&nbsp;";
				echo "<a href='#'>&gt;</a>";
				echo "</p>";
				echo "</div>";
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