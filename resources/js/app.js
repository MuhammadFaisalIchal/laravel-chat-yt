const { default: axios } = require('axios');

require('./bootstrap');

const messages_el = document.getElementById("messages");
const username_input = document.getElementById("username");
const message_input = document.getElementById("message_input");
const message_form = document.getElementById("message_form");

message_form.addEventListener('submit', function (e) {
    e.preventDefault();

    let has_errors = false;

    if (username_input.value == '') {
        alert("Please enter a username");
        has_errors = true;
    }

    if (message_input.value == '') {
        alert("Please enter a message");
        has_errors = true;
    }

    // If it got any errors, return it
    if (has_errors) {
        return;
    }

    // Refer to "axios" in bootstrap.js
    const options = {
        method: 'post',
        url: '/send-message',
        data: {
            username: username_input.value,
            message: message_input.value
        }
    }

    axios(options);
});

// Please refer to Message.php on broadcastAs function
window.Echo.channel('chat')
.listen('.message', (e) => {
    // console.log(e); // To log di result into console
    messages_el.innerHTML += '<strong class="message"><strong></strong>' + e.username + ':</strong>' + e.message + '</div>';
});