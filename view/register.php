<?php
session_start();
require_once '../settings/config_session.php'; //Require the session configuration
require_once '../function/register_controller.php'; //Require the register controller
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register | Campus Event Manager</title>
    <!-- Include Tailwind CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-200">
    <div class="bg-gray-300 min-h-screen flex flex-col">
        <div class="container max-w-sm mx-auto flex-1 flex flex-col items-center justify-center px-2">
            <div class="bg-white px-6 py-8 rounded shadow-md text-black w-full">
                <h1 class="mb-8 text-3xl text-center">Sign up</h1>
                <?php
                if (isset($_SESSION['errors_register'])) {
                    foreach ($_SESSION['errors_register'] as $error) {
                        echo '<p class="text-red-500 mb-2">' . $error . '</p>';
                    }
                    unset($_SESSION['errors_register']);
                }
                ?>
                <form action="../action/register_user_action.php" method="POST">
                <input 
                    type="text"
                    class="block border border-gray-300 w-full p-3 rounded mb-4"
                    name="username"
                    placeholder="Username" />

                <input 
                    type="text"
                    class="block border border-gray-300 w-full p-3 rounded mb-4"
                    name="email"
                    placeholder="Email" />

                <input 
                    type="password"
                    class="block border border-gray-300 w-full p-3 rounded mb-4"
                    name="password"
                    placeholder="Password" />

                <input 
                    type="password"
                    class="block border border-gray-300 w-full p-3 rounded mb-4"
                    name="confirm_password"
                    placeholder="Confirm Password" />

                <button
                    type="submit"
                    class="w-full text-center py-3 rounded bg-green-500 text-white hover:bg-green-700 focus:outline-none my-1"
                >Create Account</button>

                <div class="text-center text-sm text-gray-600 mt-4">
                    By signing up, you agree to the 
                    <a class="no-underline border-b border-gray-600 text-gray-600" href="#">
                        Terms of Service
                    </a> and 
                    <a class="no-underline border-b border-gray-600 text-gray-600" href="#">
                        Privacy Policy
                    </a>
                </div>
            </div>
            </form>

            <div class="text-gray-600 mt-6">
                Already have an account? 
                <a class="no-underline border-b border-blue-500 text-blue-500" href="./login.php">
                    Log in
                </a>.
            </div>
        </div>
    </div>
</body>

</html>
