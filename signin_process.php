<?php
 include("db.php");
 $db_host = "localhost";
 $db_user = "root";
 $db_password = "";
 $db_name = "path_AR";

 $conn = new mysqli($db_host, $db_user, $db_password, $db_name);

 if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
 }
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];
    
    // Include the database connection (db.php)

    // Retrieve user data from the database
    $sql = "SELECT id, user_name, email, password FROM users WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();
        
    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();

        // Debugging: Print entered and stored passwords
        echo "Entered Password: " . $password . "<br>";
        echo "Stored Password: " . $row["password"] . "<br>";
    
        
        // Verify the entered password with the stored password
        if ($password === $row["password"]) {
            // Successful login, start a session and redirect to the user's dashboard
            session_start();
            $_SESSION["id"] = $row["id"];
            header("Location: home.php");
            exit; // Terminate the script
        } else {
            // Incorrect password
            $error_message = "Invalid password.";
            header("Location: login_Page.php?error=" . urlencode($error_message));
            exit; // Terminate the script
        }
    } else {
        // User not found
        $error_message = "User not found.";
        header("Location: login_Page.php?error=" . urlencode($error_message));
        exit; // Terminate the script
    }

    $stmt->close();
    $conn->close();
} else {
    // Handle invalid requests
    header("Location: login_Page.php");
    exit; // Terminate the script
}
   
    ?>
    