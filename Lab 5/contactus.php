<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="utf-8">
		<title>Contact Us</title>
		<link href="StyleSheet.css" rel="stylesheet">
		<script src="https://kit.fontawesome.com/a076d05399.js"></script>
		
		<style>
			.main {
				text-align: center;
				margin-top: 26px;
				margin-bottom: 26px;
			}
			
			.contact-form {
				padding-top: 26px;
				padding-bottom: 26px;
				padding-left: 0px;
				padding-right: 0px;
				margin-top: 30px;
				margin-bottom: 30px;
				background-color: #d6e6f5;
			}
			
			.contact-form table {
				width: 44%;
			}
			
			.contact-form td {
				vertical-align: top;
			}
			
			.table-col1, table-col3 {
				width: 40%;
				padding-bottom: 5px;
			}
			
			.table-col2 {
				width: 20%;
			}
			
			.table-col1-input {
				text-align: 100%
			}
			
			.table-col1-input input[type=text], .table-col3 input[type=text], .table-col3 textarea {
				width: 100%;
			}
			
			.contact-form button {
				width: 100px;
				height: 30px;
				font-size: 16px;
			}
			
			.contact-info td {
				width: 30%;
				vertical-align: top;
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
				echo "<h2>Contact Us</h2>";
				echo "<div class='some-text'>";
				echo "<p>We here at Awesome News would like to receive your invaluable feedback in order to further improve our service to you.</p>";
				echo "<p>Kindly fill out the form below and we will get back to you as soon as possible.</p>";
				echo "</div>";
				echo "<div class='contact-form'>";
				echo "<center>";
				echo "<form action='contact_processing.php' method='post'>";
				echo "<table>";
				echo "<tr>";
				echo "<td class='table-col1'><label for='name'><b>Name</b>&nbsp;</label></td>";
				echo "<td class='table-col2' rowspan='6'></td>";
				echo "<td class='table-col3'><label for='subject'><b>Subject (Optional)</b>&nbsp;</label></td>";
				echo "</tr>";
				echo "<tr>";
				echo "<td class='table-col1-input'><input type='text' placeholder='Enter Your Name' name='name'></td>";
				echo "<td class='table-col3'><input type='text' placeholder='Enter a Subject' name='subject'></td>";
				echo "</tr>";
				echo "<tr>";
				echo "<td class='table-col1'><label for='email'><b>Email</b>&nbsp;</label></td>";
				echo "<td class='table-col3'><label for='comments'><b>Comments</b>&nbsp;</label></td>";
				echo "</tr>";
				echo "<tr>";
				echo "<td class='table-col1-input'><input type='text' placeholder='Enter Your Email' name='email'></td>";
				echo "<td class='table-col3' rowspan='3'><textarea placeholder='Enter your comments here' name='comments' rows='5' cols='30'></textarea></td>";
				echo "</tr>";
				echo "<tr>";
				echo "<td class='table-col1'><label for='contact-no'><b>Contact No.</b>&nbsp;</label></td>";
				echo "</tr>";
				echo "<tr>";
				echo "<td class='table-col1-input'><input type='text' placeholder='Enter Contact No.' name='contact-no'></td>";
				echo "</tr>";
				echo "</table>";
				echo "<br><br>";
				echo "<button type='submit'>Submit</button>";
				echo "</form>";
				echo "</center>";
				echo "</div>";

				echo "<div class='contact-info'>";
				echo "<h2>Contact Information</h2>";
				echo "<table style='margin-left:auto;margin-right:auto;'>";
				echo "<tr>";
				echo "<td align='center'><i class='far fa-envelope' style='font-size: 36px; vertical-align: middle;'></i></td>";
				echo "<td align='center'><i class='fas fa-phone-volume' style='font-size: 36px; vertical-align: middle;'></i></td>";
				echo "<td align='center'><i class='fas fa-map-marker-alt' style='font-size: 36px; vertical-align: middle;'></i></td>";
				echo "</tr>";
				echo "<tr>";
				echo "<td><br>sample@gmail.com</td>";
				echo "<td><br>012-3456789</td>";
				echo "<td><br>01, Rambutan<br>";
				echo "12345 Tanjung Bungah<br>";
				echo "Pulau Pinang</td>";
				echo "</tr>";
				echo "</table>";
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
				echo "</div>";

				//Start of Footer
				echo "<div class='footer'>";
				echo "<div class='footer-column1'>";
				echo "<p><img src='pictures/logo.png'width='200'></p>";
				echo "<h3>Operating Hours</h3>";
				echo "<p>Monday to Sunday</p>";
				echo "<p>8am - 11pm</p>";
				echo "</div>";
			
				echo "<div class='footer-column2'>";
				echo "<h3><a href='contactus.php'>Contact Us</a></h3>";
				echo "<table>";
				echo "<tr>";
				echo "<td><i class='far fa-envelope'></i></td>";
				echo "<td>&nbsp;contactus@bookerino.com</td>";
				echo "</tr>";
				echo "<tr>";
				echo "<td><i class='fas fa-phone'></i></td>";
				echo "<td>&nbsp;+6012-3456789</td>";
				echo "</tr>";
				echo "</table>";
				echo "<br/>";
				echo "<div class='social-media'>";
				echo "<p>";
				echo "<a href='https://www.facebook.com/'><i class='fab fa-facebook'></i></a>&nbsp;";
				echo "<a href='https://twitter.com/'><i class='fab fa-twitter'></i></a>&nbsp;";
				echo "<a href='https://www.instagram.com/'><i class='fab fa-instagram'></i></a>";
				echo "</p>";
				echo "</div>";
				echo "</div>";
			
				echo "<div class='footer-column3'>";
				echo "<h3>Others</h3>";
				echo "<p><a href='aboutus.php'>About Us</a></p>";
				echo "</div>";
				echo "</div?";
				//End of Footer
			
				echo "</div>";
					?>
			
				</body>
			</html>
			