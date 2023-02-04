<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link type="text/css" rel="stylesheet" href="styles/register.css">
</head>
<body>
<?php
  # Global variables
  $user_exist = "";
  # Clean input data for storage and security purposes
  function clean_input($input) {
    return htmlspecialchars(
      stripslashes(trim($input))
    );
  }
?>

<?php
    # Validate signup details and store in database

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $firstname = clean_input($_POST['fname']);
        $lastname = clean_input($_POST['lname']);
        $name = clean_input($_POST['username']);
        $email = clean_input($_POST['email']);
        $password = clean_input($_POST['pswrd']);
        $Mobile = $_POST['phone'];
        $Gender = clean_input($_POST['gender']);
        $Country = clean_input($_POST['country']);
        $Qualifications = clean_input($_POST['qualification']);
        $Curcourse = clean_input($_POST['course']);
        $Curyear = clean_input($_POST['year']);
        $file = $_POST['copy'] ?? "NULL";

        // Database connection
        $con = new mysqli("localhost", "root", "", "edtech");
        if ($con->connect_error) exit(0);

        echo "<p>Test1</p>";
        // Queries
        $q1 = "SELECT * FROM login WHERE email = '$email'";
        $q2 = "INSERT INTO login VALUES ('$name', '$email', '$password', 'S')";
        $q3 = "INSERT INTO students VALUES (" .
        "'$firstname', '$lastname', '$name', '$email', '$Mobile'," .
        "'$Gender', '$Country', '$Qualifications', '$Curcourse', '$Curyear', '$file')";

        $check = $con->query($q1);

        // Check the presence of existing user for entered email
        if ($check->num_rows == 0) {
        echo "<p>Test2</p>";
            if ($con->query($q2) === TRUE) {
        echo "<p>Test3</p>";
                $con->query($q3);
        echo "<p>Test4</p>";
                echo "<script>alert('Signup successful.')</script>"
                . "<script>location.href = 'index.php'</script>";
            } else {
                echo "<script>alert('Signup failed')</script>";
            }
        } else {
            $user_exist = "user with entered email already exists";
        }
    }
?>
    <!---------------------------------Main Body----------------------------------------->
    <div class="container">
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
            <!--------------Registration----------------->
            <h2>Student Registration</h2>
            <!--------Content--------->
            <div class="content">
                <div class="input-box">
                    <label for="fname">First Name</label>
                    <input type="text" placeholder="Enter First name" name="fname" required>
                </div>
                <div class="input-box">
                    <label for="lname">Last Name</label>
                    <input type="text" placeholder="Enter Last name" name="lname" required>
                </div>
                <div class="input-box">
                    <label for="username">UserName</label>
                    <input type="text" placeholder="Enter a Username" name="username" required>
                </div>
                <div class="input-box">
                    <label for="email">Email</label>
                    <input type="email" name="email" required><br>
                    <span class="error"><?php echo $user_exist;?></span>
                </div>
                <div class="input-box">
                    <label for="pswrd">Password</label>
                    <input type="password" id="pass" name="pswrd" required onchange="match()">
                </div>
                <div class="input-box">
                    <label for="cpswrd">Confirm Password</label>
                    <input type="password" id="cpass" name="cpswrd" required oninput="match()">
                </div>
                <div class="input-box">
                    <label for="phone">Mobile Number</label>
                    <input type="tel" name="phone" required>
                </div>
                <span class="gender_title">Gender</span>
                <div class="gender-cat">
                    <input type="radio" name="gender" id="male" value="male">
                    <label for="gender">Male</label>
                    <input type="radio" name="gender" id="female" value="female">
                    <label for="gender">Female</label>
                </div>
                <span class="country-label">Country: </label>
                <div class="country">
                    <select class="country-select" name="country">
                        <option hidden selected>- select an option -</option>
                        <option value="country1">Country1</option>
                        <option value="country2">Country2</option>
                        <option value="country3">Country3</option>
                    </select>
                </div>
                <span class="qual-label">Past Qualifications: </span>
                <div class="qualification">
                    <textarea name="qualification" class="qual" cols="30" rows="2" required></textarea>
                </div>
                <div class="study">
                    <span class="current-course">Currently Studying Course</span>
                    <div class="course">
                        <select class="course-select" name="course">
                            <option hidden selected>- select an option </option>
                            <option value="course1">Bsc Computer Science</option>
                            <option value="course1">Bsc Information Technology</option>
                            <option value="course1">Bsc Data Science</option>
                        </select>
                    </div>
                    <span class="current-year">Currently Year</span>
                    <div class="year">
                        <select class="year-select" name="year">
                            <option hidden selected>- select an option -</option>
                            <option value="year1">FY</option>
                            <option value="year2">SY</option>
                            <option value="year3">TY</option>
                        </select>
                    </div>
                </div>
                <span class="soft-copy">Soft Copy of your Previous Year Marksheet</span>
                <div class="softcopy">
                    <input type="file" class="copy" name="copy">
                </div>
                <div class="alert">
                    <input type="checkbox" name="agreement" required>
                    I agree with the <a href="#">Terms</a>, <a href="#"> Privacy Policy</a> and <a href="#">Cookies Policy</a> . 
                    <br> You may receive SMS notifications from us and can opt out at any time.</p>
                </div>
                <div class="register">
                    <button type="submit" id="regButton">Register</button>
                </div>
            </div>
        </form>
    </div>
</body>

<script>
    var regButton = document.getElementById('regButton')
    var pass = document.getElementById('pass')
    var cpass = document.getElementById('cpass')
    // If passwords don't match then disable submit button until they match
    function match() {
        if (pass.value != cpass.value) {
            regButton.setAttribute('disabled', 'true')
            cpass.style = "background-color: red;"
        } else {
            regButton.removeAttribute('disabled')
            cpass.style = "background-color: green;"
        }
    }
</script>

</html>