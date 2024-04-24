<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];

    // Validation (check if passwords match, etc.)

    // Make sure the password is not empty and matches the confirmation
    if (empty($password) || $password !== $confirm_password) {
        $error_message = "Passwords do not match.";
        header("Location: sign_up.php?error=" . urlencode($error_message));
        exit; // Terminate the script
    }

    // Database connection (modify with your actual database credentials)
    $db_host = "localhost";
    $db_user = "root";
    $db_password = "";
    $db_name = "path_AR";

    $conn = new mysqli($db_host, $db_user, $db_password, $db_name);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Insert user data into the database without hashing the password
    $sql = "INSERT INTO users (user_name, email, password) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $username, $email, $password); // Store the password as plain text

    if ($stmt->execute()) {
        // Successful sign-up, redirect to a success page
        header("Location: login_Page.php");
        exit; // Terminate the script
    } else {
        // Handle errors (e.g., duplicate email)
        $error_message = "Error: " . $stmt->error;
        header("Location: signup.php?error=" . urlencode($error_message));
        exit; // Terminate the script
    }

    $stmt->close();
    $conn->close();
} else {
    // Handle invalid requests
    header("Location: signup.php");
    exit; // Terminate the script
}
?>
