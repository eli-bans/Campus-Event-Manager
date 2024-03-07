<?php
session_start();
require_once '../settings/connection.php';
require_once '../function/rsvp_event_controller.php';

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    try {
        // Check if the user is logged in
        // if (!isset($_SESSION['user_id'])) {
        //     header("Location: ../view/login.php"); 
        //     exit();
        // }

        
        $user_id = $_SESSION['user_id'];

        // Get the event ID from the request
        if (isset($_GET['event_id'])) {
            echo "Hello World1";

            $event_id = $_GET['event_id'];
            echo "Hello World2";

           

            echo "Hello World3";

            // Check if the user has already RSVP'd to the event
            if (is_user_already_rsvp($pdo, $user_id, $event_id)) {
               
                $error_message = "You have already RSVP'd to this event!";
                header("Location: ../view/home.php?error_message=" . urlencode($error_message));
                exit();
            }
            echo "Hello World";

            // Perform RSVP for the event
            rsvp_event($pdo, $user_id, $event_id);

            // Redirect the user back to the events page or a success page
            header("Location: ../view/home.php"); // Redirect to the events page
            exit();
        } else {
           
            $error_message = "Event ID is missing!";
            header("Location: ../view/home.php?error_message=" . urlencode($error_message));
            exit();
        }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>
