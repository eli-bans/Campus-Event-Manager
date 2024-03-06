<?php
/**
 * This file is the action file for the login form. 
 * It checks if the user input is valid and logs the user in if it is. 
 */


if ($_SERVER['REQUEST_METHOD'] == 'POST'){  //Check if the form has been submitted and if it is a POST request
    $username = $_POST['username'];
    $pwd = $_POST['password']; 

    //Check if the input is valid
    try{
        require_once '../settings/connection.php';
        require_once '../function/login_model.php';
        require_once '../function/login_controller.php';
        

        //Error Handlers
        $errors = []; 

        if (is_input_empty($username,$pwd)){
            $errors["empty_input"] = "Please fill in all fields!";

        }
        
        $result = get_user($pdo, $username); //Get the user from the database
        

        if (is_username_wrong($result)){
            $errors["username_wrong"] = "Username does not exist!";
        }
      
  

        if (!is_username_wrong($result) && is_password_wrong($pwd, $result['password_hash'])){
            $errors["password_wrong"] = "Password is incorrect!";
        }

 
        require_once '../settings/config_session.php'; 

        /**
         * If there are errors, redirect to the index page and display the errors
         */

        if ($errors){
            $_SESSION['errors_login'] = $errors;

            foreach ($errors as $error){
                echo "$error";
            }
            header('Location: ../index.php');
            die();
        }


        /**
         * If there are no errors, log the user in and redirect to the home page
         */
        $newSessionID = session_create_id();
        $session_id = $newSessionID . "_" . $result['user_id'];
        session_id($session_id);

    

        $_SESSION['user_id'] = $result['user_id'];
        $_SESSION['user_username'] = htmlspecialchars( $result['username']) ; 
        $_SESSION['LAST_ACTIVITY'] = time();

        header('Location: ../view/home.php?login=success');
        $pdo = null;
        $stmt = null;
        die();


    }catch( PDOException $e){
        die('Query failed: ' . $e->getMessage()); //If the query fails, display the error message
    }

}
else{
    header('Location: ../index.php');  //If the form has not been submitted, redirect to the index page
    die();
}
