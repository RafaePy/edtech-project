<?php
    $name = $_POST['name'];
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email!";
        exit;
    }

    $con = new mysqli("localhost", "root", "", "edtech");
    if ($con->connect_error) exit(0);

    // Query and execution
    $q1 = "SELECT * FROM newsletter WHERE email = '$email'";
    $q2 = "INSERT INTO newsletter VALUES ('$name', '$email')";
    $res = $con->query($q1);

    if ($res->num_rows == 0) {
        if ($con->query($q2) === TRUE) {
            echo 'Signup successful. You will recieve important updates and resources from us.';
            } else {
            echo 'Signup failed';
            }
        } else {
        echo 'Email already exists in our newsletter!';
        }
?>