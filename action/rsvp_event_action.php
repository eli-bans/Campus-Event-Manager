<?php
session_start();
require_once '../settings/connection.php';
require_once '../function/rsvp_event_controller.php';

echo "Hello World1";

if ($_SERVER['REQUEST_METHOD'] == 'GET') {

    echo "Hello World2";

    $event_id = $_GET['event_id'];
    echo "Hello World3";
    $user_id = $_SESSION['user_id'];
    echo "Hello World4";
    $status = $_GET['status']; //going or not going
    echo "Hello World5";
    rsvp_event($pdo,$event_id,$user_id,$status);
   

   
   
}
?>
