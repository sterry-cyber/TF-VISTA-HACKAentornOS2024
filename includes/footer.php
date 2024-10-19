



<!--- /footer-top ---->
<!---copy-right ---->
<div class="copy-right">
	<div class="container">
	
		<div class="footer-social-icons wow fadeInDown animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">
			<ul>
				<li><a class="facebook" href="#"><span>Facebook</span></a></li>
				<li><a class="twitter" href="#"><span>Twitter</span></a></li>
				<li><a class="googleplus" href="#"><span>Google+</span></a></li>
				<li><a class="dribbble" href="#"><span>Dribbble</span></a></li>
			</ul>
		</div>
		<p class="wow zoomIn animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: zoomIn;">© 2024 TF . Reservados todos los derechos</p>
	</div>
	<!-- Botón emergente -->
	<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chatbot TF</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="ESTILO.CSS">
    <script scr="javascript.js">   
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>

<body>
<button id="open-chat-btn">Abrir Chat</button>
<script>$(document).ready(function() {
    // Abrir la ventana emergente
    $("#open-chat-btn").click

</script>
<div id="chat-popup" class="chat-popup">

<div class="chat-container">
    <div class="wrapper">
        <div class="title">ChatBot NICA.-VISTA</div>
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
			<!-- Botón de Regresar -->
			<button id="back-btn">Regresar</button>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $("#send-btn").on("click", function() {
                $value = $("#data").val();
                $msg = '<div class="user-inbox inbox"><div class="msg-header"><p>' + $value + '</p></div></div>';
                $(".form").append($msg);
                $("#data").val('');

                // iniciar el código ajax
                $.ajax({
                    url: 'message.php',
                    type: 'POST',
                    data: 'text=' + $value,
                    success: function(result) {
                        $replay = '<div class="bot-inbox inbox"><div class="icon"><i class="fas fa-user"></i></div><div class="msg-header"><p>' + result + '</p></div></div>';
                        $(".form").append($replay);
                        // cuando el chat baja, la barra de desplazamiento llega automáticamente al final
                        $(".form").scrollTop($(".form")[0].scrollHeight);
                    }
                });
            });
        });
    </script>

    <script>
    $(document).ready(function() {
    // Abrir la ventana emergente
    $("#open-chat-btn").click(function() {
        $("#chat-popup").fadeIn(); // Muestra la ventana emergente con un efecto de desvanecimiento
    });

    // Cerrar la ventana emergente
    $(".close-btn, #back-btn").click(function() {
        $("#chat-popup").fadeOut(); // Oculta la ventana emergente con un efecto de desvanecimiento
    });

    // Opcional: cerrar la ventana emergente al hacer clic fuera de ella
    $(window).click(function(event) {
        if ($(event.target).is("#chat-popup")) {
            $("#chat-popup").fadeOut();
			
        }
		
    });
});
    </script>
    


</body>

</html>