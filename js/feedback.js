document.addEventListener("DOMContentLoaded", function () {
    // Add event listener to the submit feedback button
    document.getElementById("submitFeedbackButton").addEventListener("click", function () {
        sendFeedbackData();
    });

    // Add event listener to the cancel button
    document.getElementById("cancelFeedbackButton").addEventListener("click", function () {
        // Hide the feedback menu
        document.getElementById("feedbackMenu").classList.add("hidden");
    });
});

// Use AJAX to send feedback data to the server
function sendFeedbackData() {
    const ajax = new XMLHttpRequest();
    const feedbackText = document.getElementById('feedbackText').value;

    // Check if the feedback text is not empty
    if (feedbackText.trim() === '') {
        alert("Please provide your feedback.");
        return;
    }

    // AJAX configuration
    ajax.onload = function () {
        if (ajax.status === 200) {
            // Log the response from the server
            console.log(ajax.responseText);
            // Hide the feedback menu
            document.getElementById("feedbackMenu").classList.add("hidden");
            // Optionally, you can show a success message or perform other actions
            alert("Thank you for your feedback!");
        }
    };

   // Open the AJAX request with POST method
ajax.open('POST', '../action/feedback_action.php', true);

// Set the Content-Type header to indicate the form data
ajax.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

// Send the AJAX request with the encoded feedback text as the payload
ajax.send('feedbackText=' + encodeURIComponent(feedbackText));


    // Send the AJAX request
    ajax.send();
}
