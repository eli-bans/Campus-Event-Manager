<?php
function is_input_empty($event_name, $event_date, $event_time, $event_location, $event_description, $event_image){
    if (empty($event_name) || empty($event_date) || empty($event_time) || empty($event_location) || empty($event_description) || empty($event_image)){
        return true;
    }
    return false;
}

function is_event_conflict($pdo, $event_date, $event_time){
    if (get_conflict($pdo, $event_date, $event_time)){
        return true;
    }
    return false;
}

function create_event($pdo, $event_name, $event_date, $event_time, $event_location, $event_description, $event_image){
    insert_event($pdo, $event_name, $event_date, $event_time, $event_location, $event_description, $event_image);
}