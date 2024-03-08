<?php

require_once '../settings/connection.php';

// declare(strict_types=1);

function rsvp_event($pdo,$event_id,$user_id,$status)
{
    $query = 'INSERT INTO rsvps (event_id, user_id, status) VALUES (:event_id, :user_id, :status)';
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(':event_id', $event_id);
    $stmt->bindParam(':user_id', $user_id);
    $stmt->bindParam(':status', $status);
    $stmt->execute();
}




