<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Chat</title>

    {{-- Include our own css --}}
    <link rel="stylesheet" href="./css/app.css">
</head>
<body>
    <div class="app">
        <header>
            <h1>Let's Talk!</h1>
            <input type="text" name="username" id="username" placeholder="Please enter a username..." />
        </header>
        
        <div id="messages"></div>
        
        {{-- Gak pakai action --}}
        <form id="message_form">
            <input type="text" name="message" id="message_input" placeholder="Write a message..." />
            <button type="submit" id="message_send">Send Message</button>
        </form>
    </div>

    {{-- Include our own javascript --}}
    <script src="./js/app.js"></script>
</body>
</html>