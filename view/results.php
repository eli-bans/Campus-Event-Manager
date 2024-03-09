<?php
session_start();

// Include the function to search for events
require_once '../function/search_controller.php';

// Check if the form was submitted using GET method
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    if (isset($_GET['search'])) {
        $search = $_GET['search'];

        // Include the database connection file
        require_once '../settings/connection.php';

        // Search for events based on the search query
        $events = search_event($pdo, $search);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.2/dist/tailwind.min.css" rel="stylesheet">
    <title>Search Results</title>
</head>
<body>
    <section class="bg-gray-100 py-8">
        <div class="container mx-auto flex flex-wrap pt-4 pb-12">
            <h2 class="w-full my-2 text-5xl font-bold leading-tight text-center text-gray-800">
                Search Results
            </h2>
            <div class="w-full mb-4">
                <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
            </div>

            <?php if (isset($events) && !empty($events)): ?>
                <?php foreach ($events as $event): ?>
                    <div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink">
                        <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow">
                            <div class="flex flex-wrap no-underline hover:no-underline">
                                <p class="w-full text-gray-600 text-xs md:text-sm px-6">
                                    <?php echo $event['category']; ?>
                                </p>
                                <div class="w-full font-bold text-xl text-gray-800 px-6">
                                    <?php echo $event['title']; ?>
                                </div>
                                <p class="text-gray-800 text-base px-6 mb-5">
                                    <?php echo $event['description']; ?>
                                </p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <p>No events found.</p>
            <?php endif; ?>
        </div>
    </section>
</body>
</html>
