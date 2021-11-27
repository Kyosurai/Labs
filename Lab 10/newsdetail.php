<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="utf-8">
		<title>Latest News</title>
		<link href="StyleSheet.css" rel="stylesheet">
		<script src='https://kit.fontawesome.com/a076d05399.js'></script>
		
		<style>
			.main {
				padding-right: 75px;
				padding-left: 75px;
			}
		
			.navigation {
				user-select: none;
				color: #595959;
			}
			
			.navigation a {
				text-decoration: none;
				color: #595959;
			}
			
			.navigation a:hover {
				text-decoration: underline;
			}
			
			.details {
				display: flex;
				flex-direction: row;
				width: 100%;
				margin-bottom: 10px;
				border-radius: 5px;
				border-style: solid;
				border-color: #cccccc;
				border-width: 1px;
				box-sizing: border-box;
			}
			
			.prod-img {
				width: 30%;
				text-align: center;
			}
			
			.prod-some-info {
				position: relative;
				width: 70%;
			}
			
			.prod-cart {
				position: absolute;
				right: 25px;
				bottom: 20px;
			}
			
			.quantity-input {
				text-align: center;
				width: 40px;
				height: 35px;
			}
			
			.prod-cart button {
				height: 41px;
				width: 150px;
			}
			
			.prod-full-info {
				width: 100%;
				padding-left: 20px;
				padding-right: 20px;
				margin-bottom: 25px;
				border-radius: 5px;
				border-style: solid;
				border-color: #cccccc;
				border-width: 1px;
				box-sizing: border-box;
			}
			
			.prod-full-info tr {
				vertical-align: top;
			}
			
			.prod-full-info th {
				width: 155px;
				padding-bottom: 15px;
				text-align: left;
			}
			
			.prod-full-info td {
				padding-bottom: 15px;
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
				echo "<div class='navigation'>";
				echo "<p>";
				echo "<a href='index.php'><i class='fas fa-home'></i></a>&nbsp;&gt;";
				echo "<a href='#'>All News</a>&nbsp;&gt;";
				echo "Latest News";
				echo "</p>";
				echo "</div>";

				echo "<p><b>Covid-19: Primary school students required to undergo weekly tests starting next week, says Khairy </b></p>";
				echo "<p>PUTRAJAYA: Primary school pupils must undergo weekly Covid-19 tests from next week, says Health Minister Khairy Jamaluddin.</p>";
				echo "<p>He said this is part of the new National Testing Strategy, which has just been published by his ministry.</p>";
				echo "<p>“This strategy will clearly outline who needs to undergo Covid-19 tests and when, and whether RT-PCR tests or self-tests need to be taken.</p>";
				echo "<p>“One of the things in the National Testing Strategy is for primary schools where students under the age of eligibility to receive vaccines must perform weekly Covid-19 tests.</p>";
				echo "<p>“The tests need to be conducted on at least 10% of the student population in the school. The students will take turns getting tested each week,” he told a press conference here on Friday (Nov 26).</p>";
				echo "<p>Khairy said the weekly testing strategy was to prevent the emergence of Covid-19 clusters at schools.</p>";
				echo "<p>The National Testing Strategy document can be viewed at <a href='https://covid-19.moh.gov.my/reopeningsafely/nts'> here </p>";
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