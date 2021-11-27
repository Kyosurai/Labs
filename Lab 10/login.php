<?php
require 'header.php';

// Initialize the session
session_start();
 
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: index.php");
    exit;
}
 
// Include config file
require_once "dbcon.php";
 
// Define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Check if username is empty
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter username.";
    } else{
        $username = trim($_POST["username"]);
    }
    
    // Check if password is empty
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter your password.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate credentials
    if(empty($username_err) && empty($password_err)){
        // Prepare a select statement
        $sql = "SELECT user_ID, password, Name FROM user WHERE user_ID = '$username' and password = '$password'";
        
        if($stmt = $con->prepare($sql)){
            
            // Attempt to execute the prepared statement
            if($stmt->execute()){
                // Store result
                $stmt->store_result();
                
                // Check if username exists, if yes then verify password
                if($stmt->num_rows == 1){                    
                    // Bind result variables
                    $stmt->bind_result($username2, $password2, $name2);
                    if($stmt->fetch()){
                        if($password == $password2){
							
							// Password is correct, so start a new session
								session_start();

								// Store data in session variables
								$_SESSION["loggedin"] = true;
								$_SESSION["username"] = $name2;                            
								
								// Redirect user to welcome page
								header("location: index.php");
							}
                        } else{
                            // Display an error message if password is not valid
                            $password_err = "The password you entered was not valid.";
                        }
                    }
                } 
				else{
                    // Display an error message if username doesn't exist
                    $username_err = "No account found with that username.";
                }
            } 
			else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            $stmt->close();
        }
    }
    
    // Close connection
    $con->close();

require 'footer.php';
?>




<html>
<style>
.error {color: #FF0000;}
</style>
<body>
    <div>
        <h2>Login</h2>
        <p>Please fill in your credentials to login.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
			
		
            <div>
                <label>Username</label>
                <input type="text" name="username" value="<?php if(isset($username)){echo $username;} ?>">
                <span class="error"><?php if(isset($username_err)) {echo $username_err;}?></span>
            </div> 
			
            <div>
                <label>Password</label>
                <input type="password" name="password" value="<?php if(isset($password)){echo $password;} ?>">
                <span class="error"><?php if(isset($password_err)) {echo $password_err;}?></span>
            </div>
            
                <input type="submit"value="Login">
            
            <p>Don't have an account? <a href="signup.php">Sign up now</a>.</p>
        </form>
    </div>    
</body>
</html>