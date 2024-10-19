<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chatbot TF</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>
<body>
    <button id="open-chat-btn">Abrir Chat</button>

    <div id="chat-popup" class="chat-popup">
        <div class="chat-container">
            <div class="wrapper">
                <div class="title">ChatBot NICA.-VISTA <span class="close-btn">&times;</span></div>
                <div class="form">
                    <div class="bot-inbox inbox">
                        <div class="icon">
                            <i class="fas fa-user"></i>
                        </div>
                        <div class="msg-header">
                            <p>Hola, ¿cómo puedo ayudarte?</p>
                        </div>
                    </div>
                </div>
                <div class="typing-field">
                    <div class="input-data">
                        <input id="data" type="text" placeholder="Escribe algo aquí.." required>
                        <button id="send-btn">Enviar</button>
                    </div>
                    <button id="return-btn">Regresar</button>
                </div>
            </div>
        </div>
    </div>

    <script src="script.js"></script>
</body>
</html>