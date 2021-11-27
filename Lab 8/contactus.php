<?php	
	define('TITLE', 'Contact Us');
	require('header.php');

			echo "<div class='main'>";
			echo "<div class='page-container'>";
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


	require 'footer.php';
		?>
