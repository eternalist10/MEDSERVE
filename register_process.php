<?php
if (isset($_POST['register'])) {
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone=$_POST['phone'];
    $picture=$_POST['picture'];

    // Establish database connection
    $con = new mysqli('localhost', 'id22179538_root', 'Shubhra@04', 'id22179538_store');

    // Check if connection was successful
    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }

    // Check if email is already registered
    $check_query = "SELECT * FROM users WHERE email='$email'";
    $check_result = $con->query($check_query);
    if ($check_result->num_rows > 0) {
        echo "<script>alert('Email already exists. Please use a different email.')</script>";
    } else {
        // Insert user data into database
        $insert_query = "INSERT INTO users (email, password, name, number, pic) VALUES ('$email', '$password', '$fullname','$phone','$picture')";
        if ($con->query($insert_query) === TRUE) {
            echo "<script>alert('Registration successful. You can now login.')</script>";
            echo "<script>window.location='login.php';</script>";
        } else {
            echo "Error: " . $insert_query . "<br>" . $con->error;
        }
    }

    // Close database connection
    $con->close();
}
?>
