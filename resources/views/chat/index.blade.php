<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/chat/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
</head>
<body>
    <div id="app">
        <top-menu></top-menu>
        <left-panel>
            
            <div slot="contact-messages">
                <contact-message></contact-message>
                <contact-message></contact-message>
                <contact-message></contact-message>
                <contact-message></contact-message>
                <contact-message></contact-message>
                <contact-message></contact-message>
                <contact-message></contact-message>
                <contact-message></contact-message>
                <contact-message></contact-message>
            </div>
        </left-panel>
        <right-panel>
            <top-chat></top-chat>
            <chat-area></chat-area>
            <down-chat></down-chat>
        </right-panel>
    </div>
</body>
</html>