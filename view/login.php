<?php
session_start();
if (isset($_SESSION['errors_login'])) {
    $errors = $_SESSION['errors_login'];

    foreach ($errors as $error) {
        echo "$error";
    }
    // header('Location: ../index.php');
    // die();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Campus Event Manager</title>
    <!-- Include Tailwind CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-200">
    <div class="bg-gray-300 min-h-screen flex flex-col">
        <div class="container max-w-sm mx-auto flex-1 flex flex-col items-center justify-center px-2">
            <div class="bg-white px-6 py-8 rounded shadow-md text-black w-full">
                <h1 class="mb-8 text-3xl text-center">Login</h1>

                <form action="../action/login_user_action.php" method="post">
                    <input type="text" class="block border border-gray-300 w-full p-3 rounded mb-4" name="username" placeholder="Username" />

                    <input type="password" class="block border border-gray-300 w-full p-3 rounded mb-4" name="password" placeholder="Password" />

                    <button href="../action/login_user_action.php" type="submit" class="w-full text-center py-3 rounded bg-blue-500 text-white hover:bg-blue-700 focus:outline-none my-1">Login</button>

                    <!-- <div class="text-center text-sm text-gray-600 mt-4">
                    <a class="no-underline border-b border-gray-600 text-gray-600" href="#">
                        Forgot password?
                    </a>
                </div> -->
            </div>

            <div class="text-gray-600 mt-6">
                Don't have an account?
                <a class="no-underline border-b border-blue-500 text-blue-500" href="./register.php">
                    Sign up here
                </a>.
            </div>
            </form>
        </div>
    </div>
</body>

</html>