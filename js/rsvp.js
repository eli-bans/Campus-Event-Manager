// Use ajax to get the data from the server
function sendRSVPData(){
    const ajax = new XMLHttpRequest();
    const status = document.getElementById('status').value;
    const user_id = document.getElementById('user_id').getAttribute('data-user_id');
    const event_id = document.getElementById('event_id').getAttribute('data-event_id');
    console.log({status, user_id, event_id});

    /* The code `ajax.onload` is setting up an event handler that will be triggered when the AJAX
    request completes successfully. Inside the event handler function, it checks if the status of
    the AJAX request is 200 (which means the request was successful) and then logs the response text
    received from the server to the console. This allows you to handle the response data returned
    from the server after the AJAX request is completed. */
    ajax.onload = function(){
        if(ajax.status === 200){
            console.log(ajax.responseText);
        }
       
    };

    console.log('../action/rsvp_event_action.php?status='+status+'&user_id='+user_id+'&event_id='+event_id)

    ajax.open('GET', '../action/rsvp_event_action.php?status='+status+'&user_id='+user_id+'&event_id='+event_id, true);
    
    ajax.send();
}