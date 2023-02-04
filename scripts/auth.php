<?php
    session_start();
  # Clean input data for storage and security purposes
    function clean_input($input) {
        return htmlspecialchars(
            stripslashes(trim($input))
    );
    }
?>

<?php
    // Database connection
    $con = new mysqli("localhost", "root", "", "edtech");
    if ($con->connect_error) exit(0);

    function login() {
    # Validate login credentials
        global $email, $password, $con;

        // Query and execution
        $q1 = "SELECT password FROM login WHERE email = '$email'";
        $res = $con->query($q1);

        // Check the presence of existing user for entered email
        if ($res->num_rows == 1) {
            $corr_pass = $res->fetch_assoc()["password"];
            // Match entered password with stored password
            if ($password === $corr_pass) {
                $_SESSION['user'] = $email;
                $_SESSION['logged'] = TRUE;
                echo "success";  
            } else {
                echo "invalid password";
            }
        } else {
            echo "user does not exist";
        }
  }

  function signup() {
    # Validate signup details and store in database
    global $email, $password, $name, $con;

    // Queries
    $q1 = "SELECT * FROM login WHERE email = '$email'";
    $q2 = "INSERT INTO login VALUES ('$name', '$email', '$password', 'P')";
    $check = $con->query($q1);

    // Check the presence of existing user for entered email
    if ($check->num_rows == 0) {
      if ($con->query($q2) === TRUE) {
        echo "success";
      } else {
        echo "Signup failed";
      }
    } else {
      echo "user with entered email already exists";
    }
  }
?>

<?php
  # Identify type of user authentication and call a function accordingly for further processing
    $email = filter_var(
      clean_input($_POST['email']), FILTER_SANITIZE_EMAIL
    );
    $password = trim($_POST['password']);
    if ($_POST['form'] == 'login-form') {
      login();
    } elseif ($_POST['form'] == 'signup-form') {
      $name = filter_var(
        clean_input($_POST['name']), FILTER_SANITIZE_STRING
      );
      signup();
    }
?>