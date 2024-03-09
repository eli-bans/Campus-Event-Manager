<?php

function search_event($pdo, $search)
{
  
    $searchTerm = '%' . $search . '%';
    $query = 'SELECT * FROM events WHERE title LIKE :search OR location LIKE :search OR description LIKE :search';
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(':search', $searchTerm);
    $stmt->execute();
    $events = $stmt->fetchAll();
    return $events;
}
