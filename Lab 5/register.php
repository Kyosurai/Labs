<?php
    define ('TITLE', 'Register');
    require ('header.php');

    echo "<div class='main'>";

    if (isset($_POST['submitted'])) {
        $email = $_POST['email'];
        $pw = $_POST['pw'];
        $confirmpw = $_POST['confirmpw'];
        $title = $_POST['title'];
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $mobileno = $_POST['mobileno'];
        $agree = $_POST['agree'];

        $output = "";

        $title1 = "<p><b>Email and Password section: </b></p>";
        $title2 = "<p><b>Personal Details section: </b></p>";
        $title3 = "<p><b>Contact Details section: </b></p>";
        $title4 = "<p><b>Terms and Conditions: </b></p>";

        $section1 = $title1;
        $section2 = $title2;
        $section3 = $title3;
        $section4 = $title4;

        //Check if email address and password has any errors.
        $section1 .= "<ul>";

        if (!empty($email) && !filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $section1 .= "<li>Invalid email address. </li>";
        }


        if (!empty($pw)){
            if (strlen($pw) <8 || !preg_match("/[a-z]/", $pw) || !preg_match("/[0-9]/", $pw) || !preg_match("/[\W_]/", $pw) || preg_match("/[A-Z]/", $pw) ) {
                $section1 .= "<li>Your password must contain at least: <br/><ul>";

                if (!preg_match("/[a-z]/", $pw)) {
                    $section1 .= "<li>1 lowercase alphabet. </li>";
                }
                if (!preg_match("/[0-9]/", $pw)) {
                    $section1 .= "<li>1 number. </li>";
                }
                if (!preg_match("/[\W_]/", $pw)) {
                    $section1 .= "<li>1 special character. </li>";
                }
                if (!preg_match("/[A-Z]/", $pw)) {
                    $section1 .= "<li>1 uppercase alphabet. </li>";
                }
            }
        }

        if (empty($email) && empty($pw) && empty($confirmpw))  {
            $section1 .= "<li>Please enter your email, password and confirm password. </li>";
        }
        elseif (empty($email) && empty($pw)){
            $section1 .= "<li>Please enter your email and password. </li>";
        }
        elseif (empty($email) && empty($confirmpw)) {
            $section1 .= "<li>Please enter your email and confirm password. </li>";
        }
        elseif (empty($pw) && empty($confirmpw)) {
            $section1 .= "<li>Please enter your password and confirm password. </li>";
        }
        elseif (empty($email)) {
            $section1 .= "<li>Please enter your email. </li>";
        }
        elseif (empty($pw)) {
            $section1 .= "<li>Please enter your password. </li>";
        }
        elseif (empty($confirmpw)) {
            $section1 .= "<li>Please enter your confirm password. </li>";
        }
        elseif ($confirmpw != $pw) {
            $section1 .= "<li>Your password must match your confirm password. </li>";
        }

        $section1 .= "</ul>";

        if ($section1 != ($title1 . "<ul></ul>")){
            $output .= $section1;
        }

        //Check if first name and last name has any errors.
        $section2 .= "<ul>";

        if (!empty($fname) && !preg_match("/^[A-Za-z ]*$/", $fname)) {
            $section2 .= "<li>First Name should contain letters and white spaces only. </li>";
        }

        if (!empty($lname) && !preg_match("/^[A-Za-z ]*$/", $lname)) {
            $section2 .= "<li>Last Name should contain letters and white spaces only. </li>";
        }

        if ($title == "Title" && empty($fname) && empty($lname)) {
            $section2 .= "<li>Please select a title, and enter your first name and last name. </li>";
        }
        elseif ($title == "Title" && empty($fname)) {
            $section2 .= "<li>Please select a title, and enter your first name. </li>";
        }
        elseif ($title == "Title" && empty($lname)) {
            $section2 .= "<li>Please select a title, and enter your last name. </li>";
        }
        elseif (empty($fname) && empty($lname)) {
            $section2 .= "<li>Please enter your first name and last name. </li>";
        }
        elseif ($title == "Title") {
            $section2 .= "<li>Please select a title. </li>";
        }
        elseif (empty($fname)) {
            $section2 .= "<li>Please enter your first name. </li>";
        }
        elseif (empty($lname)) {
            $section2 .= "<li>Please enter your last name. </li>";
        }
        
        $section2 .= "</ul>";

        if ($section2 != ($title2."<ul></ul>")) {
            $output .= $section2;
        }

        //Checking errors for mobile number
        $section3 .= "<ul>";

        if (!empty($mobileno)) {
            if (!is_numeric($mobileno)) {
                $section3 .= "<li>Mobile number can only have digits (0 - 9). </li>";
            }
            elseif (strlen($mobileno) <10 || strlen($mobileno) >11) {
                $section3 .= "<li>Mobile number only has 10 or 11 digits. </li>"; 
            }
        }
        else {
            $section3 .= "<li>Please enter your mobile number. </li>";
        }

        $section3 .= "</ul>";
        if ($section3 != ($title3."<ul></ul>")){
            $output .= $section3;
        }

        //Check if TnC is agreed or not
        if ($agree == false) {
            $output .= $section4."<ul><li>Please accept the Terms & Conditions to complete the registration. </li></ul>";
        }
        if (empty($output)) {
            echo "You have registered successfully."; 
        }
        else {
            echo "$output";
        }
    }

    else {
        //display registration form
        echo "<div class='register-container'>";
        echo "<center>";
        echo "<form action='register.php' method='post'>";
        echo "<h1>Registration</h1>";
        echo "<div class='register-sections'>";
        echo "<h2>Email and Passwords</h2>";
        echo "<table>";
        echo "<tr>";
        echo "<td class='registertablecol1'><label for='email'><b>Email</b>&nbsp;</label><br><br></td>";
        echo "<td class='registertablecol2'><input type='text' placeholder='Enter your Email Address' name='email'><br><br></td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td class='registertablecol1'><label for='pw'><b>Password</b>&nbsp;</label></td>";
        echo "<td class='registertablecol2'><input type='text' placeholder='Enter your password' name='pw'></td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td class='registertablecol1'><label for='confirmpw'><b>Confirm Password</b>&nbsp;</label></td>";
        echo "<td class='registertablecol2'><input type='text' placeholder='Enter your confirm password' name='confirmpw'></td>";
        echo "</tr>";
        echo "</table>";
        echo "</div>";
        echo "<br>";
        echo "<div class='register-section'>";
        echo "<h2>Personal Details</h2>";
        echo "<table>";
        echo "<tr>";
        echo "<td class='registertablecol1'><label for='title'><b>Title</b></label><br><br></td>";
        echo "<td class='registertablecol2'>";
        echo "<select name='title'>";
        echo "<option>Title</option>";
        echo "<option>Mr.</option>";
        echo "<option>Mrs.</option>";
        echo "<option>Ms.</option>";
        echo "</select>";
        echo "<br><br>";
        echo "</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td class='registertablecol1'><label for='fname'><b>First Name</b></label></td>";
        echo "<td class='registertablecol2'><input type='text' placeholder='First Name' name='fname'></td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td class='registertablecol1'><label for='lname'><b>Last Name</b></label></td>";
        echo "<td class='registertablecol2'><input type='text' placeholder='Last Name' name='lname'></td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td class='registertablecol1'><label for='mobileno'><b>Mobile Number</b></label></td>";
        echo "<td class='registertablecol2'><input type='text' placeholder='Mobile Number' name='mobileno'></td>";
        echo "</tr>";
        echo "</table>";
        echo "</div>";
        echo "<br>";
        echo "<div class='registercheck'>";
        echo "<label>";
        echo "<input type='checkbox' checked='checked' name='sub'> I would like to receive newsletter on the latest movies and upcoming movies.";
        echo "</label>";
        echo "<br>";
        echo "<label>";
        echo "<input type='hidden' name='agree' value='0' />";
        echo "<input type='checkbox' name='agree'> I have read and agreed to the <a href='#'>Terms and Conditions</a>";
        echo "</label>";
        echo "</div>";
        echo "<br><br>";
        echo "<button type='submit'> Register Now! </button>";
        echo "<input type='hidden' name='submitted' value='true' />";
        echo "</form>";
        echo "</center>";
        echo "</div>";
        //End of registration form
    }

    echo "</div>";
    require ('footer.php');

?>
