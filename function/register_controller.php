<?php
/**
 * This file contains the functions to handle the registration process
 */
declare(strict_types=1);

/**
 * This function checks if the username is wrong
 * 
 * @param bool|array $result  The result of the query
 * @return bool  True if the username is wrong, false if it is not
 */

 function is_input_empty(string $username, string $email, string $pwd)
 {
     if (empty($username) || empty($email) || empty($pwd)) {
         return true;
     } else {
         return false;
     }
 }

function is_username_wrong(bool|array $result){
    if ($result === false){
        return true;
    }
    return false;

}


/**
 * This function checks if the email is invalid
 * 
 * @param string $email The email entered by the user
 * @return bool True if the email is invalid, false if it is not
 */

 function is_email_invalid(string $email)
 {
     // Check if the email is a valid format
     if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
         return true; // If the email format is invalid, return true
     }
 
     // Split the email address into parts
     $email_parts = explode('@', $email);
 
     // Check if the email domain is 'ashesi.edu.gh'
     if (end($email_parts) !== 'ashesi.edu.gh') {
         return true; // If the domain is not 'ashesi.edu.gh', return true
     }
 
     // If the email format is valid and the domain is 'ashesi.edu.gh', return false
     return false;
 }

/**
 * This function checks if the email is already registered
 * 
 * @param object $pdo The database connection
 * @param string $email The email entered by the user
 * @return bool True if the email is already registered, false if it is not
 */
function is_password_invalid(string $password, string $confirm_password)
{
    if ($password !== $confirm_password) {
        return true;
    } else {
        return false;
    }
}


function is_email_registered(object $pdo, string $email){
    if(get_email($pdo, $email)){
        return true;
    }else{
        return false;
    }
}
function is_username_taken(object $pdo, string $username){
    if(get_username($pdo, $username)){
        return true;
    }else{
        return false;
    }
}
/**
 * This function checks if the input is empty
 * 
 * @param string $username The username entered by the user
 * @param string $pwd The password entered by the user
 * @return bool True if the input is empty, false if it is not
 */

/**
 * This function creates a new user
 * 
 * @param object $pdo The database connection
 * @param string $username The username entered by the user
 * @param string $email The email entered by the user
 * @param string $pwd The password entered by the user
 */

function create_user(object $pdo, string $username, string $email, string $pwd){
    set_user( $pdo, $username, $email,  $pwd); 
    
}

