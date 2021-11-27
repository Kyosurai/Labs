		<?php 
				define ('TITLE', 'About Us');
				require 'header.php';

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
				echo "<br>";
				echo "<img src='pictures/store.png' width='500'>";
				echo "</div>";
				//Main End
				echo "</div>";
		require 'footer.php';
		?>
