<?php
declare(strict_types=1);


function get_conflict($pdo, $event_date, $event_time){
    $sql = "SELECT * FROM events WHERE date = ? AND time = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$event_date, $event_time]);
    $result = $stmt->fetch();
    return $result;
    
}

function insert_event($pdo, $event_name, $event_date, $event_time, $event_location, $event_description, $event_image){
    $sql = "INSERT INTO events (title, date, time, location, description, img_path) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$event_name, $event_date, $event_time, $event_location, $event_description, $event_image]);
}

