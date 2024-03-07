<?php

declare(strict_types=1);

require_once '../settings/connection.php';

function is_user_already_rsvp(object $pdo, int $user_id, int $event_id): bool
{
    $stmt = $pdo->prepare('SELECT * FROM rsvp WHERE user_id = :user_id AND event_id = :event_id');
    $stmt->bindParam(':user_id', $user_id, PDO::PARAM_INT);
    $stmt->bindParam(':event_id', $event_id, PDO::PARAM_INT);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    if ($result === false) {
        return false;
    }
    return true;
}


function rsvp_event(object $pdo, int $user_id, int $event_id): void
{
    try {
        $stmt = $pdo->prepare('INSERT INTO rsvps (user_id, event_id) VALUES (:user_id, :event_id)');
        $stmt->bindParam(':user_id', $user_id, PDO::PARAM_INT);
        $stmt->bindParam(':event_id', $event_id, PDO::PARAM_INT);
        
        // Execute the prepared statement
        $stmt->execute();
        
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }

}
?>
