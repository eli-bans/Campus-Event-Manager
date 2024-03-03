
var scrollpos = window.scrollY;
var header = document.getElementById("header");
var navcontent = document.getElementById("nav-content");
var navaction = document.getElementById("navAction");
var brandname = document.getElementById("brandname");
var toToggle = document.querySelectorAll(".toggleColour");

document.addEventListener("scroll", function () {
/*Apply classes for slide in bar*/
scrollpos = window.scrollY;

if (scrollpos > 10) {
    header.classList.add("bg-white");
    navaction.classList.remove("bg-white");
    navaction.classList.add("gradient");
    navaction.classList.remove("text-gray-800");
    navaction.classList.add("text-white");
    //Use to switch toggleColour colours
    for (var i = 0; i < toToggle.length; i++) {
    toToggle[i].classList.add("text-gray-800");
    toToggle[i].classList.remove("text-white");
    }
    header.classList.add("shadow");
    navcontent.classList.remove("bg-gray-100");
    navcontent.classList.add("bg-white");
} else {
    header.classList.remove("bg-white");
    navaction.classList.remove("gradient");
    navaction.classList.add("bg-white");
    navaction.classList.remove("text-white");
    navaction.classList.add("text-gray-800");
    //Use to switch toggleColour colours
    for (var i = 0; i < toToggle.length; i++) {
    toToggle[i].classList.add("text-white");
    toToggle[i].classList.remove("text-gray-800");
    }

    header.classList.remove("shadow");
    navcontent.classList.remove("bg-white");
    navcontent.classList.add("bg-gray-100");
}
});
/*Toggle dropdown list*/
/*https://gist.github.com/slavapas/593e8e50cf4cc16ac972afcbad4f70c8*/

var navMenuDiv = document.getElementById("nav-content");
var navMenu = document.getElementById("nav-toggle");

document.onclick = check;
function check(e) {
var target = (e && e.target) || (event && event.srcElement);

//Nav Menu
if (!checkParent(target, navMenuDiv)) {
    // click NOT on the menu
    if (checkParent(target, navMenu)) {
    // click on the link
    if (navMenuDiv.classList.contains("hidden")) {
        navMenuDiv.classList.remove("hidden");
    } else {
        navMenuDiv.classList.add("hidden");
    }
    } else {
    // click both outside link and outside menu, hide menu
    navMenuDiv.classList.add("hidden");
    }
}
}
function checkParent(t, elm) {
while (t.parentNode) {
    if (t == elm) {
    return true;
    }
    t = t.parentNode;
}
return false;
}

document.querySelectorAll(".feedback-button").forEach((button) => {
    const feedbackMenu = document.getElementById('feedbackMenu');
    // const mainContent = document.getElementById('mainContent');

    button.addEventListener('click', () => {
        console.log('clicked');
        if (feedbackMenu.classList.contains('hidden')) {
            feedbackMenu.classList.remove('hidden');
            // mainContent.classList.add('blur-background'); 
        } else {
            feedbackMenu.classList.add('hidden');
            // mainContent.classList.remove('blur-background'); 
        }
    });
});

// Handle close button separately
document.getElementById('cancelButton').addEventListener('click', () => {
    document.getElementById('feedbackMenu').classList.add('hidden');
    // document.getElementById('mainContent').classList.remove('blur-background'); 
});


    // const feedbackMenu = document.getElementsByClassName('feedbackMenu');
    // const submitButton = document.getElementById('submitButton');
    // const cancelButton = document.getElementById('cancelButton');
    // const feedbackButtons = document.getElementsByClassName('feedback-button');

   // Select all feedback buttons
//    var feedbackButtons = document.querySelectorAll('.feedback-button');

//    // Select the feedback menu
//    var feedbackMenu = document.querySelector('feedbackMenu');

//    // Iterate through each feedback button
//    feedbackButtons.forEach(function(button) {
//         console.log("clicked");
//        // Add click event listener to each feedback button
//        button.addEventListener('click', function() {
//            // Toggle the visibility of the feedback menu
//            if (feedbackMenu.style.display === 'block') {
//                feedbackMenu.style.display = 'none';
//            } else {
//                feedbackMenu.style.display = 'block';
//            }
//        });
//    });
    

    // // Add event listener to the submit button
    // submitButton.addEventListener('click', function() {
    //     // Add your code to handle form submission here
    //     console.log('Submitting feedback...');
    //     feedbackMenu.style.display = 'none';
    // });

    // // Add event listener to the cancel button
    // cancelButton.addEventListener('click', function() {
    //     // Hide the pop-up menu
    //     feedbackMenu.style.display = 'none';
    // });





