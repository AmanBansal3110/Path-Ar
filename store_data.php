<?php
include("db.php");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $title = $_POST["title"];
    $data_type = $_POST["data_type"];

    // File upload logic
    if (isset($_FILES["file_upload"]) && !empty($_FILES["file_upload"]["name"])) {
        $uploadedFile = $_FILES["file_upload"];
        $uploadDirectory = "uploads/"; // Change this to your desired directory

        // Ensure the upload directory exists or create it
        if (!is_dir($uploadDirectory)) {
            mkdir($uploadDirectory, 0755, true);
        }

        $targetFilePath = $uploadDirectory . basename($uploadedFile["name"]);

        // Check if the file is of the allowed types (e.g., CSV, NC, Other)
        $allowedTypes = array("csv", "nc", "other","pdf"); // Add more allowed types if needed
        $fileExtension = pathinfo($targetFilePath, PATHINFO_EXTENSION);

        if (!in_array(strtolower($fileExtension), $allowedTypes)) {
            $error_message = "Invalid file type. Allowed types: " . implode(", ", $allowedTypes);
            header("Location: data_input.php?error=" . urlencode($error_message));
            exit;
        }

        // Move the uploaded file to the target directory
        if (move_uploaded_file($uploadedFile["tmp_name"], $targetFilePath)) {
            // File upload successful, proceed to database insert
            // Database connection details (modify with your own credentials)
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "path_ar";

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);

            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // Optionally, set character set to UTF-8 for proper encoding
            if (!$conn->set_charset("utf8")) {
                die("Error loading character set utf8: " . $conn->error);
            }


            // Insert data into the database
            $sql = "INSERT INTO data_input (UName, Email, Title, Dropdown, UFileName) VALUES (?, ?, ?, ?, ?)";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("sssss", $name, $email, $title, $data_type, $targetFilePath);

            if ($stmt->execute()) {
                // Successful data insertion
                header("Location: research.php"); // Redirect to a success page
                exit;
            } else {
                // Error in data insertion
                $error_message = "Error: " . $stmt->error;
                header("Location: data_input.php?error=" . urlencode($error_message));
                exit;
            }

            $stmt->close();
            $conn->close();
        } else {
            // File upload failed
            $error_message = "File upload failed.";
            header("Location: data_input.php?error=" . urlencode($error_message));
            exit;
        }
    } else {
        // No file uploaded
        $error_message = "Please select a file to upload.";
        header("Location: data_input.php?error=" . urlencode($error_message));
        exit;
    }
} else {
    // Handle invalid requests
    header("Location: data_input.php");
    exit;
}
