<?php
    session_start();

    if(!isset($_SESSION['login'])){
        header('Location:index.php');
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="chat.css">
    <title>ki obosta?</title>
</head>
<body>
    <div class="msg-section-container">
        <div class="chat-header">
            <div class="chat-header-dot"></div>
            <span class="chat-header-title">Ki Obosta?</span>
            <span class="chat-header-sub">LIVE CHAT</span>
        </div>
        <div class="msg-body" id="msg-body">
            
        </div>
        <div class="msg-input">
            <input type="text" placeholder="type your message..." name="msg" id="msg-input">
            <button id="msg-send-btn">Send</button>
        </div>
    </div>
    <a href="logout.php">logout</a>
    <script src="msging.js"></script>
</body>
</html>