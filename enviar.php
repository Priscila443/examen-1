<?php

    $nombre = $_POST["nombre"];
    $WhatsApp = $_POST["WhatsApp"];
    $correo = $_POST["email"];
    $mensaje = $_POST["mensaje"];

    $destinatario = "prixy.rb@gmail.com";
    $asunto = "Solicitud de Inscripción en Taller de Verano - Diseños e Ilustraciones";

    $carta = "De: $nombre \n";
    $carta .= "Whatsapp: $WhatsApp \n";
    $carta .= "Correo: $correo \n";
    $carta .= "Mensaje: $mensaje";

    mail($destinatario, $asunto, $carta);
    header("Location:mensaje-enviado.php");
    
?>