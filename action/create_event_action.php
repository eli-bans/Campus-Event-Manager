<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
session_start();



if ($_SERVER['REQUEST_METHOD'] == 'POST'){ 
    echo "Hello World2";
    $event_name = $_POST['title'];
    $event_date = $_POST['date'];
    $event_time = $_POST['time']; 
    $event_location = $_POST['location'];
    $event_description = $_POST['description'];
    $event_image = $_FILES['image']['name']; 
    

    $hash_time = md5(time());

    $allowed_image_types = ["image/jpeg", "image/jpg", "image/png", "image/svg"];

    // if (!in_array($_FILES["image"]["name"], $allowed_image_types)) {
    //     echo '<script>alert("Invalid file type! Only JPEG, PNG, and JPG images are allowed.")</script>';
    //     $_SESSION["invalid-image-type"] = true;
    //     exit();
    // }

    // Image upload
    $target_dir = "../images/";
    $target_file = $target_dir . $hash_time . $_FILES["image"]["name"];
    echo "Hello World4";

    
    
    if(move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)){
        // file upload successful 
        $event_image = $target_file;  // save the file path to the database
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
   
    
    try{
        echo "Hello World6";
        require_once '../settings/connection.php';
        require_once '../function/create_event_model.php';
        require_once '../function/create_event_controller.php';

      
        $errors = [];

        if (is_input_empty($event_name, $event_date, $event_time, $event_location, $event_description, $event_image)){
            $errors["empty_input"] = "Please fill in all fields!";
        }
   
        
        if (is_event_conflict($pdo, $event_date, $event_time)){
            $errors["event_conflict"] = "Event date and time conflict with another event!";
        }

        
    

        if ($errors){
            $_SESSION['errors_create_event'] = $errors;
            foreach ($errors as $error){
                echo "$error";
            }
            header('Location: ../view/home.php');
            die();
        }

        create_event($pdo, $event_name, $event_date, $event_time, $event_location, $event_description, $event_image);
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>
