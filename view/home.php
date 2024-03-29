<?php
session_start()
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>
      Campus Event Manager
    </title>
    <meta name="description" content="Simple landind page" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <link rel="stylesheet" href="../node_modules/normalize.css/normalize.css">
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css"/>
    <link rel="stylesheet" href="../css/home.css"/>
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700" rel="stylesheet" />
  <style>
    /* Style to set the text color of the input fields to black */
    input[type="text"],
    input[type="date"],
    input[type="time"],
    input[type="file"],
    textarea,
    select {
        color: black; /* Set the text color to black */
    }
  </style> 
    
  </head>
  <body class="leading-normal tracking-normal text-white gradient" style="font-family: 'Source Sans Pro', sans-serif;">
    <!--Nav-->
    <nav id="header" class="fixed w-full z-30 top-0 text-white">
      <div class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 py-2">
        <div class="pl-4 flex items-center">
          <a class="toggleColour text-white no-underline hover:no-underline font-bold text-2xl lg:text-4xl" href="#">
            Campus Event Manager
          </a>
        </div>
        <div class="block lg:hidden pr-4">
          <button id="nav-toggle" class="flex items-center p-1 text-pink-800 hover:text-gray-900 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
            <svg class="fill-current h-6 w-6" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
              <title>Home</title>
              <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
            </svg>
          </button>
        </div>
        <div class="w-full flex-grow lg:flex lg:items-center lg:w-auto hidden mt-2 lg:mt-0 bg-white lg:bg-transparent text-black p-4 lg:p-0 z-20" id="nav-content">
          <ul class="list-reset lg:flex justify-end flex-1 items-center">
            <li>
              <div class="searchBox">
              <form action="./results.php" method="GET" class="searchBox">
                <input class="searchInput" type="text" name="search" placeholder="Search event">
                <button class="searchButton" href="./results.php" method="GET"> 
                  <svg xmlns="http://www.w3.org/2000/svg" width="29" height="29" viewBox="0 0 29 29" fill="none">
                    <g clip-path="url(#clip0_2_17)">
                      <g filter="url(#filter0_d_2_17)">
                        <path d="M23.7953 23.9182L19.0585 19.1814M19.0585 19.1814C19.8188 18.4211 20.4219 17.5185 20.8333 16.5251C21.2448 15.5318 21.4566 14.4671 21.4566 13.3919C21.4566 12.3167 21.2448 11.252 20.8333 10.2587C20.4219 9.2653 19.8188 8.36271 19.0585 7.60242C18.2982 6.84214 17.3956 6.23905 16.4022 5.82759C15.4089 5.41612 14.3442 5.20435 13.269 5.20435C12.1938 5.20435 11.1291 5.41612 10.1358 5.82759C9.1424 6.23905 8.23981 6.84214 7.47953 7.60242C5.94407 9.13789 5.08145 11.2204 5.08145 13.3919C5.08145 15.5634 5.94407 17.6459 7.47953 19.1814C9.01499 20.7168 11.0975 21.5794 13.269 21.5794C15.4405 21.5794 17.523 20.7168 19.0585 19.1814Z" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" shape-rendering="crispEdges"></path>
                      </g>
                    </g>
                    <defs>
                      <filter id="filter0_d_2_17" x="-0.418549" y="3.70435" width="29.7139" height="29.7139" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                        <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
                        <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"></feColorMatrix>
                        <feOffset dy="4"></feOffset>
                        <feGaussianBlur stdDeviation="2"></feGaussianBlur>
                        <feComposite in2="hardAlpha" operator="out"></feComposite>
                        <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"></feColorMatrix>
                        <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_2_17"></feBlend>
                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_2_17" result="shape"></feBlend>
                      </filter>
                      <clipPath id="clip0_2_17">
                        <rect width="28.0702" height="28.0702" fill="white" transform="translate(0.403503 0.526367)"></rect>
                      </clipPath>
                    </defs>
                  </svg>
                </button>
              </form>
              </div>
            </div>
            </li>
          </ul>
            </li>
            <li class="mr-3">
              <a class="toggleColour text-white no-underline hover:no-underline font-bold" href="#events-section">Events</a>
            </li>
            <li class="mr-3">
              <a class="toggleColour text-white no-underline hover:no-underline font-bold" href="about.php">About</a>
            </li>
          </ul>
          <button
            onclick="window.location='./login.php'"
             id="navAction"
            class="mx-auto lg:mx-0 hover:underline bg-white text-gray-800 font-bold rounded-full mt-4 lg:mt-0 py-4 px-8 shadow opacity-75 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out" >
            Logout
          </button>
        </div>
      </div>
      <hr class="border-b border-gray-100 opacity-25 my-0 py-0" />
    </nav>
<div id="mainContent" class="pt-24">
    <!--Hero-->
    <div class="pt-24">
      <div class="container px-3 mx-auto flex flex-wrap flex-col md:flex-row items-center">
        <!--Left Col-->
        <div class="flex flex-col w-full md:w-2/5 justify-center items-start text-center md:text-left">
          <p class="uppercase tracking-loose w-full">Want to manage your events?</p>
          <h1 class="my-4 text-5xl font-bold leading-tight">
           Let's get started
          </h1>
          <p class="leading-normal text-2xl mb-8">
            Don't just manage your events, make them memorable.
          </p>
          <button id="createEventBtn" class="mx-auto lg:mx-0 hover:underline bg-white text-gray-800 font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
            Create Event
          </button>
        </div>
        <!--Right Col-->
        <div class="w-full md:w-4/5 py-6 text-center">
          <img class="w-full md:w-4/5 z-50" src="../hero.png" />
        </div>
      </div>
    </div>
    <div class="relative -mt-12 lg:-mt-24">
      <div style="position: relative;">
    </div>

<!-- Current Events -->
<section class="bg-white border-b py-8" id="events-section">
    <div class="container max-w-5xl mx-auto m-8">
        <h2 class="w-full my-2 text-5xl font-bold leading-tight text-center text-gray-800">
            Upcoming Events
        </h2>
        <div class="w-full mb-4">
            <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
        </div>

        <?php
        require_once '../settings/connection.php'; 
       
        // Get current date
        $current_date = date('Y-m-d');

        // Query to select past events
        $query = "SELECT * FROM events WHERE date >= :current_date";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(':current_date', $current_date);
        $stmt->execute();
        $result = $stmt;

        // Check if there are events retrieved
        if ($result->rowCount() > 0) {
            $counter = 0;

            // Loop through each event
            while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                $event_id = $row['event_id'];
                $event_title = $row['title'];
                $event_description = $row['description'];
                $event_image = '../images/' .$row['img_path'];
                ?>

                <!-- Event Container -->
                <div class="flex flex-wrap flex-col-reverse sm:flex-row">
                  <?php
                    if (fmod($counter, 2) == 0) {
                      ?>
                      <!-- Event Content -->
                      <div class="w-full sm:w-1/2 p-6 flex items-center justify-center">
                          <div>
                              <h3 class="text-3xl text-gray-800 font-bold leading-none mb-3">
                                  <?php echo $event_title; ?>
                              </h3>
                              <p class="text-gray-600 mb-8">
                                  <?php echo $event_description; ?>
                                  <br />
                                  <br />
                                  <input type="hidden" name="event_id" value="<?php echo $event_id; ?>">
                                  <input type="hidden" name="user_id" value="<?php echo $_SESSION['user_id']; ?>">
                                      <button class="rsvp mx-auto lg:mx-0 hover:underline bg-white text-gray-800 font-bold rounded-full my-6 py-4 px-5 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                                          RSVP
                                      </button>
                              </p>
                          </div>
                      </div>
                      <!-- Event Image -->
                      <div class="w-full sm:w-1/2 p-6">
                          <img src="<?php echo $event_image; ?>" alt="Event Image" class="w-full">
                      </div>
                    <?php
                    } else {
                    ?>
                        <!-- Event Image -->
                        <div class="w-full sm:w-1/2 p-6">
                            <img src="<?php echo $event_image; ?>" alt="Event Image" class="w-full">
                        </div>
                        <!-- Event Content -->
                        <div class="w-full sm:w-1/2 p-6 flex items-center justify-center">
                            <div>
                                <h3 class="text-3xl text-gray-800 font-bold leading-none mb-3">
                                    <?php echo $event_title; ?>
                                </h3>
                                <p class="text-gray-600 mb-8">
                                    <?php echo $event_description; ?>
                                    <br />
                                    <br />
                                        <input type="hidden" id="event_id" data-event_id="<?php echo $event_id; ?>" style="color: red;" name="event_id" value="<?php echo $event_id; ?>">
                                        <input type="hidden" id="user_id" data-user_id="<?php echo $_SESSION['user_id']; ?>" name="user_id" value="<?php echo $_SESSION['user_id']; ?>">
                                        <button class="rsvp mx-auto lg:mx-0 hover:underline bg-white text-gray-800 font-bold rounded-full my-6 py-4 px-5 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                                            RSVP
                                        </button>
                                </p>
                            </div>
                        </div>
                  <?php
                    }
                    $counter++;
                  ?>
                </div>
            <?php
            }
        } else {
            // No events found
            echo "<p>No upcoming events found.</p>";
        }
        ?>
    </div>
</section>





<!-- Section for Past Events -->
<section class="bg-gray-100 py-8">
    <div class="container mx-auto flex flex-wrap pt-4 pb-12">
        <h2 class="w-full my-2 text-5xl font-bold leading-tight text-center text-gray-800">
            Past Events
        </h2>
        <div class="w-full mb-4">
            <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
        </div>

        <?php
        // Get current date
        $current_date = date('Y-m-d');

        // Query to select past events
        $query = "SELECT * FROM events WHERE date < :current_date";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(':current_date', $current_date);
        $stmt->execute();
        $past_events = $stmt->fetchAll(PDO::FETCH_ASSOC);

        if (empty($past_events)): ?>
            <p class="text-center text-gray-800 text-xl">No past events found.</p>
        <?php else:
            foreach ($past_events as $event): ?>
                <div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink">
                    <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow">
                        <a href="#" class="flex flex-wrap no-underline hover:no-underline">
                            <p class="w-full text-gray-600 text-xs md:text-sm px-6">
                                <?php echo $event['category_name']; ?>
                            </p>
                            <div class="w-full font-bold text-xl text-gray-800 px-6">
                                <?php echo $event['title']; ?>
                            </div>
                            <p class="text-gray-800 text-base px-6 mb-5">
                                <?php echo $event['description']; ?>
                            </p>
                        </a>
                    </div>
                    <div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow p-6">
                        <div class="flex items-center justify-center">
                            <!-- Feedback button -->
                            <input type="hidden" id="event_id" data-event_id="<?php echo $event['event_id']; ?>" style="color: red;" name="event_id" value="<?php echo $event['event_id']; ?>">
                            <button class="feedback-button mx-auto lg:mx-0 hover:underline gradient text-white font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                                Give Feedback
                            </button>
                        </div>
                    </div>
                </div>
            <?php endforeach;
        endif; ?>
    </div>
</section>




</div>
    
    <!-- Change the colour #f8fafc to match the previous section colour -->
   
    <section class="container mx-auto text-center py-6 mb-12">
      <h2 class="w-full my-2 text-5xl font-bold leading-tight text-center text-white">
        Join an event now!
      </h2>
      <div class="w-full mb-4">
        <div class="h-1 mx-auto bg-white w-1/6 opacity-25 my-0 py-0 rounded-t"></div>
      </div>
      <h3 class="my-4 text-3xl leading-tight">
       Don't miss out on the fun
      </h3>
    </section>

<!-- Pop-up menu for feedback -->
<div id="feedbackMenu" class="hidden bg-slate-800 border border-slate-700 grid grid-cols-6 gap-2 rounded-xl p-2 text-sm">
    <div class="bg-slate-800 border border-slate-700 grid grid-cols-6 gap-2 rounded-xl p-2 text-sm">
        <h1 class="text-center text-slate-600 text-xl font-bold col-span-6">Send Feedback</h1>
        <textarea id="feedbackText" class="bg-slate-700 text-slate-300 h-28 placeholder:text-slate-300 placeholder:opacity-50 border border-slate-600 col-span-6 resize-none outline-none rounded-lg p-2 duration-300 focus:border-slate-300" placeholder="Your feedback..."></textarea>
        <button id="submitFeedbackButton" class="fill-slate-300 col-span-2 flex justify-center items-center rounded-lg p-2 duration-300 bg-slate-700 hover:border-slate-300 focus:fill-blue-200 focus:bg-blue-600 border border-slate-600">
            Submit
        </button>
        <button id="cancelFeedbackButton" class="fill-slate-300 col-span-2 flex justify-center items-center rounded-lg p-2 duration-300 bg-slate-700 hover:border-slate-300 focus:fill-blue-200 focus:bg-blue-600 border border-slate-600">
            Cancel
        </button>
    </div>
</div>

<!-- Pop-up menu for RSVP -->
<div id="rsvpMenu" class="hidden bg-gray-800 border border-gray-700 grid grid-cols-6 gap-2 rounded-xl p-2 text-sm">
  <h1 class="text-center text-gray-600 text-xl font-bold col-span-6">RSVP</h1>
  <form class="grid grid-cols-6 gap-2">
    <select id="status" name="status" class="bg-gray-700 text-gray-300 border border-gray-600 col-span-6 outline-none rounded-lg p-2 duration-300 focus:border-gray-300 appearance-none pr-8">
      <option value="going">Yes, I will attend</option>
      <option value="not_going">No, I cannot attend</option>
    </select>
    <div class="col-span-6 flex justify-between">
      <button id="cancelRSVPButton" type="button" class="fill-gray-300 flex justify-center items-center rounded-lg p-2 duration-300 bg-gray-700 hover:border-gray-300 focus:fill-blue-200 focus:bg-blue-600 border border-gray-600">
        Cancel
      </button>
      <button id="submitRSVPButton" type="button" class="flex justify-center items-center rounded-lg p-2 duration-300 bg-gray-700 hover:border-gray-300 focus:fill-blue-200 focus:bg-blue-600 border border-gray-600" onclick="sendRSVPData()">
        Submit
      </button>
    </div>
  </form>
</div>


<!-- The pop-up modal for Create Event -->
<div id="createEvent" class="fixed inset-0 z-50 overflow-auto bg-gray-900 bg-opacity-50 flex justify-center items-center">
    <div class="bg-white rounded-lg w-full max-w-md p-6">
        <h2 class="text-2xl font-semibold mb-4">Create Event</h2>
        <form action="../action/create_event_action.php" method="POST" enctype="multipart/form-data">
            <div class="mb-4">
                <label for="title" class="block text-sm font-medium text-white">Title</label>
                <input type="text" id="title" name="title" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm" required>
            </div>
            <div class="mb-4">
                <label for="date" class="block text-sm font-medium text-white">Date</label>
                <input type="date" id="date" name="date" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm" required>
            </div>
            <div class="mb-4">
                <label for="time" class="block text-sm font-medium text-white">Time</label>
                <input type="time" id="time" name="time" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm" required>
            </div>
            <div class="mb-4">
                <label for="location" class="block text-sm font-medium text-white">Location</label>
                <input type="text" id="location" name="location" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm" required>
            </div>
            <div class="mb-4">
                <label for="description" class="block text-sm font-medium text-white">Description</label>
                <textarea id="description" name="description" rows="3" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm" required></textarea>
            </div>
            <div class="mb-4">
                <label for="category" class="block text-sm font-medium text-white">Category</label>
                <select id="category" name="category" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm" required>
                    <?php
                    require_once '../settings/connection.php'; // Include the database connection file
                    
                    // Query to select categories from the event_categories table
                    $query = "SELECT * FROM event_categories";
                    $result = $pdo->query($query);

                    // Check if there are categories retrieved
                    if ($result->rowCount() > 0) {
                        echo '<option value="">Select a category</option>'; // Default option

                        // Loop through each category
                        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                            $category_id = $row['category_id'];
                            $category_name = $row['name'];
                            // Create option element for each category
                            echo "<option value='$category_id'>$category_name</option>";
                        }
                    } else {
                        // No categories found
                        echo "<option value=''>No categories found</option>";
                    }
                    ?>
                </select>
            </div>
            <div class="mb-4">
                <label for="image" class="block text-sm font-medium text-white">Image</label>
                <input type="file" id="image" name="image" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm" required>
            </div>       
            <div class="flex justify-center">
                <button id="submitEvent" type="submit" class="tmx-auto lg:mx-0 bg-white text-gray-ml-4 text-gray-700 hover:tex800 font-bold rounded-full my-6 py-4 px-5 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">Create</button>
                <button id="cancelCreateEvent" type="button" class="tmx-auto lg:mx-0 bg-white text-gray-ml-4 text-gray-700 hover:tex800 font-medium rounded-full my-8 py-4 px-5 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out" onclick="closeCreateEvent()">Cancel</button>
            </div>
        </form>
    </div>
</div>
<!-- End the pop-up modal for Create Event -->


    <!--Footer-->
    <footer class="bg-white">
      <div class="container mx-auto px-8">
        <div class="w-full flex flex-col md:flex-row py-6">
          <div class="flex-1 mb-6 text-black">
            <a class="text-pink-600 no-underline hover:no-underline font-bold text-2xl lg:text-4xl" href="#">
              
              Campus Event Manager
            </a>
          </div>
          <div class="flex-1">
            <p class="uppercase text-gray-500 md:mb-6">Links</p>
            <ul class="list-reset mb-6">
              <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                <a href="#" class="no-underline hover:underline text-gray-800 hover:text-pink-500">FAQ</a>
              </li>
              <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                <a href="#" class="no-underline hover:underline text-gray-800 hover:text-pink-500">Help</a>
              </li>
              <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                <a href="#" class="no-underline hover:underline text-gray-800 hover:text-pink-500">Support</a>
              </li>
            </ul>
          </div>
          <div class="flex-1">
            <p class="uppercase text-gray-500 md:mb-6">Legal</p>
            <ul class="list-reset mb-6">
              <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                <a href="#" class="no-underline hover:underline text-gray-800 hover:text-pink-500">Terms</a>
              </li>
              <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                <a href="#" class="no-underline hover:underline text-gray-800 hover:text-pink-500">Privacy</a>
              </li>
            </ul>
          </div>
          <div class="flex-1">
            <p class="uppercase text-gray-500 md:mb-6">Social</p>
            <ul class="list-reset mb-6">
              <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                <a href="#" class="no-underline hover:underline text-gray-800 hover:text-pink-500">Facebook</a>
              </li>
              <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                <a href="#" class="no-underline hover:underline text-gray-800 hover:text-pink-500">Linkedin</a>
              </li>
              <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                <a href="#" class="no-underline hover:underline text-gray-800 hover:text-pink-500">Twitter</a>
              </li>
            </ul>
          </div>
          <div class="flex-1">
            <p class="uppercase text-gray-500 md:mb-6">Company</p>
            <ul class="list-reset mb-6">
              <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                <a href="#" class="no-underline hover:underline text-gray-800 hover:text-pink-500">Official Blog</a>
              </li>
              <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                <a href="#" class="no-underline hover:underline text-gray-800 hover:text-pink-500">About Us</a>
              </li>
              <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                <a href="#" class="no-underline hover:underline text-gray-800 hover:text-pink-500">Contact</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <p class="text-gray-500">Project Created By Team 4</p>
    </footer>
    <script src="../js/home.js"></script>
    <script src="../js/rsvp.js"></script>
    <script src="../js/feedback.js"></script>
    <script>

var createEventModal = document.getElementById('createEvent');
createEventModal.classList.add('hidden');

// Function to handle the click event of the Create Event button
document.getElementById('createEventBtn').addEventListener('click', () => {
    showCreateEvent();
});

// Function to handle the click event of the Cancel button
document.getElementById('cancelCreateEvent').addEventListener('click', () => {
    closeCreateEvent();
});

// Function to handle the click event of the Submit button
document.getElementById('submitEvent').addEventListener('click', () => {
    closeCreateEvent();
});

// Function to close the Create Event modal
function closeCreateEvent() {
    var createEventModal = document.getElementById('createEvent');
    createEventModal.classList.add('hidden');
}

// Function to show the Create Event modal
function showCreateEvent() {
    var createEventModal = document.getElementById('createEvent');
    createEventModal.classList.remove('hidden');
}

// Handle close button separately
document.getElementById('cancelFeedbackButton').addEventListener('click', () => {
    var createEventMenu = document.getElementById('createEvent');
    createEventMenu.classList.add('hidden');
    // document.getElementById('mainContent').classList.remove('blur-background'); 
});

// Handle the submit button separately
document.getElementById('submitFeedbackButton').addEventListener('click', () => {
    var createEventMenu = document.getElementById('createEvent');
    createEventMenu.classList.add('hidden');
    // document.getElementById('mainContent').classList.remove('blur-background'); 
});


  </script>
<script>
    // Function to show the RSVP pop-up
    function showRSVPPopup() {
        document.getElementById('rsvpMenu').classList.remove('hidden');
        document.body.classList.add('overflow-hidden'); // Prevent scrolling behind the pop-up
        document.body.insertAdjacentHTML('beforeend', '<div class="backdrop"></div>'); // Add backdrop
        document.getElementById('cancelRSVPButton').addEventListener('click', hideRSVPPopup);
        document.getElementById('submitRSVPButton').addEventListener('click', hideRSVPPopup);
    }

    // Function to hide the RSVP pop-up
    function hideRSVPPopup() {
        document.getElementById('rsvpMenu').classList.add('hidden');
        document.body.classList.remove('overflow-hidden'); // Allow scrolling again
        document.querySelector('.backdrop').remove(); // Remove backdrop
        document.getElementById('cancelRSVPButton').removeEventListener('click', hideRSVPPopup);
        document.getElementById('submitRSVPButton').removeEventListener('click', hideRSVPPopup);
    }

    // Event listener for showing the RSVP pop-up
    document.addEventListener('click', function(event) {
        if (event.target.classList.contains('rsvp')) {
            showRSVPPopup();
        }
    });

    //handle submit button separately
    document.getElementById('submitRSVPButton').addEventListener('click', () => {
        hideRSVPPopup();
    });
</script>



  </body>
</html>
