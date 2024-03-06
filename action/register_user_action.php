<?php
/**
 * This file is the action file for the register form and it checks if the user input 
 * is valid and registers the user if it is.
 * 
 */

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $pwd = $_POST['password'];
    $pwd_repeat = $_POST['password_repeat'];
    echo "Hello World1";

    try{

        echo "Hello World2";
        require_once('../settings/connection.php');
        require_once('../function/register_model.php');
        require_once('../function/register_controller.php');

        //Error Handlers
        echo "Hello World3";
       
        $errors = [];

        if ( is_input_empty($username, $email, $pwd)){
            $errors["empty_input"] = "Please fill in all fields!";

        }
        echo "Hello World4";

        if ( is_email_invalid($email)){
            $errors["invalid_email"] = "Please enter a valid email!";

        }
        echo "Hello World5";
        
        if (is_username_taken($pdo, $username)){
            $errors["username_taken"] = "Username already taken!";
        }
        echo "Hello World6";
        
        if (is_email_registered($pdo, $email)){
            $errors["email_registered"] = "Email already registered!";

        }
        echo "Hello World7";
        
        
        // if ( is_password_invalid($pwd, $pwd_repeat)){
        //     $errors["invalid_password"] = "Passwords do not match!";
        // }
        echo "Hello World8";

        require_once '../settings/config_session.php'; 
        

        if ($errors){
            
            $_SESSION['errors_register'] = $errors;

            header('Location: ../view/register.php');
            die();

        }
        /**
         * If there are no errors, register the user and redirect to the home page
         */

        echo "Hello World9";

        create_user($pdo, $username, $email, $pwd);
        header('Location: ../view/home.php?register=success');
        $pdo = null;
        $stmt = null;
        die()  ;


    }catch(PDOException $e){
        die('Query failed: ' . $e->getMessage()); //If the query fails, display an error message
    } 


}else{
    header('Location: ../view/register.php'); //If the user tries to access this page without submitting the form, redirect to the index page
    die();
}
