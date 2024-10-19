<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $message = htmlspecialchars($_POST['message']);
    file_put_contents('chat.txt', $message . PHP_EOL, FILE_APPEND);
}

$messages = file('chat.txt', FILE_IGNORE_NEW_LINES);
echo json_encode($messages);
?>