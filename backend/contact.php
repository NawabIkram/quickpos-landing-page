<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_SPECIAL_CHARS);

    // Validate empty fields
    if (empty($name) || empty($email) || empty($message)) {
        // Simple error handling for demonstration
        echo "<h3>Error: All fields are required. <a href='../index.php#contact'>Go back</a></h3>";
        exit;
    }

    // Validate email format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<h3>Error: Invalid email format. <a href='../index.php#contact'>Go back</a></h3>";
        exit;
    }

    // Simulate success and redirect
    header("Location: ../thank-you.html");
    exit;
} else {
    // If accessed directly, redirect to home
    header("Location: ../index.php");
    exit;
}
?>
