<?php

declare(strict_types=1);

function rsvp_event($pdo, $event_id, $user_id, $status): bool
{
    $sql = "INSERT INTO rsvp (event_id, user_id, status, created_at) VALUES (:event_id, :user_id, :status, NOW())";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':event_id', $event_id, PDO::PARAM_INT);
    $stmt->bindParam(':user_id', $user_id, PDO::PARAM_INT);
    $stmt->bindParam(':status', $status, PDO::PARAM_STR);
    return $stmt->execute();
}

