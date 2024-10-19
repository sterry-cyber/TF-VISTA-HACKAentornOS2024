document.getElementById('send-button').addEventListener('click', function() {
    const messageInput = document.getElementById('message-input');
    const message = messageInput.value;
    
    if (message) {
        fetch('chat.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded',
            },
            body: 'message=' + encodeURIComponent(message)
        }).then(() => {
            messageInput.value = '';
            loadMessages();
        });
    }
});

function loadMessages() {
    fetch('chat.php')
        .then(response => response.json())
        .then(messages => {
            const messagesDiv = document.getElementById('messages');
            messagesDiv.innerHTML = messages.map(msg => <div>${msg}</div>).join('');
            messagesDiv.scrollTop = messagesDiv.scrollHeight;
        });
}

setInterval(loadMessages, 1000); // Cargar mensajes cada segundo

$(document).ready(function() {
    // Abrir la ventana emergente
    $("#open-chat-btn").click