<?php
session_start();
 require_once '../settings/connection.php';
 require_once '../function/rsvp_event_controller.php';

 if ($_SERVER['REQUEST_METHOD'] == 'GET') {

     $event_id = $_GET['event_id'];
     $user_id = $_SESSION['user_id'];
     $status = $_GET['status']; // going or not going 

     if (rsvp_event($pdo, $event_id, $user_id, $status)) {
         header('Location: ../view/home.php');
     } else {
         echo "Error";
     }


 }
 ?>