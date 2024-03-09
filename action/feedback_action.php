<?php
session_start();

// Check if the request method is POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Check if feedbackText is set in the POST parameters
    if (isset($_POST['feedbackText']) && isset($_POST['event_id']) && isset($_SESSION['user_id'])) {
        // Retrieve feedback text, event id, and user id from POST parameters
        $feedbackText = $_POST['feedbackText'];
        $event_id = $_POST['event_id'];
        $user_id = $_SESSION['user_id'];

        // Establish connection to the database
        require_once '../settings/connection.php'; // Adjust the path as per your file structure

        // Prepare the SQL statement to insert feedback into the database
        $sql = "INSERT INTO feedback (event_id, user_id, comment, created_at) VALUES (?, ?, ?, CURRENT_TIMESTAMP)";

        // Prepare the SQL statement
        $stmt = $pdo->prepare($sql);

        // Bind parameters and execute the statement
        $stmt->execute([$event_id, $user_id, $feedbackText]);

        // Optionally, you can check if the insertion was successful and send a response back to the client
        if ($stmt->rowCount() > 0) {
            echo "Feedback submitted successfully.";
        } else {
            echo "Failed to submit feedback.";
        }
    } else {
        // Handle case where parameters are missing
        echo "Incomplete data.";
    }
} else {
    // Handle cases where the request method is not POST
    echo "Invalid request method.";
}
?>
