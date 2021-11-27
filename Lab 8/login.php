<?php	
	define('TITLE', 'Sign In');
	require('header.php');
	echo "<div class='main'>";
	
	if (isset($_POST['submitted'])) {
		$user_id = $_POST['id'];
		$pw = $_POST['pw'];
		
		$testId = "Superman";
		$testPw = "Wonderwoman";
		
		$filledForm = false;
		

		
		if (empty($user_id) && empty($pw)) {
			echo "<p>Please enter your Login ID and password.</p>";
		} elseif (empty($user_id)) {
			echo "<p>Please enter your Login ID.</p>";
		} elseif (empty($pw)) {
			echo "<p>Please enter your password.</p>";
		} else {
			$filledForm = true;
		}
		
		if ($filledForm == true) {
			if ($user_id == $testId && $pw == $testPw) {
				$_SESSION['id'] = $user_id;
				echo "<p>You have successfully logged in.</p>";
				echo "<a href='index.php'>Go Back to Home Page.</a>";
			} else {
				echo "<p>Incorrect Login ID and/or password.</p>";
			}
		}
	}
	else {
		echo "<div class='login-container'>";
		echo "<center>";
		echo "<form action='login.php' method='post'>";
		echo "<h2>Sign In</h2>";
		echo "<br>";
		echo "<table>";
		echo "<tr>";
		echo "<td><label for='id'><b>Login ID</b>&nbsp;</label><br><br></td>";
		echo "<td><input type='text' placeholder='Enter Login ID' name='id'><br><br></td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td><label for='pw'><b>Password</b>&nbsp;</label></td>";
		echo "<td><input type='password' placeholder='Enter Password' name='pw'></td>";
		echo "</tr>";
		echo "</table>";
		echo "<br><br>";
		echo "<button type='submit'>Login</button>";
		echo "<br><br>";
		echo "<div class='login-extra'>";
		echo "<label>";
		echo "<input type='checkbox' checked='checked' name='remember'> Remember me";
		echo "</label>";
		echo "<br><br><br><br>";
		echo "<span class='pw'><a href='#'>Forgot your password?</a></span>";
		echo "<br><br>";
		echo "<a href='register.php'>Don't have an account yet?</a>";
		echo "</div>";
		echo "<input type='hidden' name='submitted' value='true' />";
		echo "</form>";
		echo "</center>";
		echo "</div>";
	}
	
	echo "</div>";
	require('footer.php');
?>