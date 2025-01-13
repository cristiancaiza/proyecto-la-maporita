<?php
header("Access-Control-Allow-Origin: *");

// Solo procesar solicitudes POST.
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los campos del formulario y eliminar espacios en blanco.
    $name = strip_tags(trim($_POST["con_name"]));
    $name = str_replace(array("\r","\n"),array(" "," "),$name);
    $email = filter_var(trim($_POST["con_email"]), FILTER_SANITIZE_EMAIL);
    $message = trim($_POST["con_message"]);
    $check = strip_tags(trim($_POST["check"]));
    $phone = strip_tags(trim($_POST["con_phone"]));

    // Verificar que se enviaron datos al mailer.
    if (empty($name) || empty($message) || empty($check) || empty($phone) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Establecer un código de respuesta 400 (solicitud incorrecta) y salir.
        http_response_code(400);
        echo "Por favor, complete el formulario y vuelva a intentarlo.";
        exit;
    }

    // Establecer la dirección de correo electrónico del destinatario.
    $recipient = "swear0006@hotmail.com"; // Cambia esto a tu dirección de correo electrónico.

    // Establecer el asunto del correo electrónico.
    $subject = "Nuevo mensaje de contacto de $name";

    // Construir el contenido del correo electrónico.
    $email_content = "Nombre: $name\n";
    $email_content .= "Correo electrónico: $email\n";
    $email_content .= "Teléfono: $phone\n";
    $email_content .= "Check: $check\n";
    $email_content .= "Mensaje:\n$message\n";

    // Construir las cabeceras del correo electrónico.
    $email_headers = "From: $name <$email>";

    // Enviar el correo electrónico.
    if (mail($recipient, $subject, $email_content, $email_headers)) {
        // Establecer un código de respuesta 200 (correcto).
        http_response_code(200);
        echo "¡Gracias! Su mensaje ha sido enviado.";
    } else {
        // Establecer un código de respuesta 500 (error interno del servidor).
        http_response_code(500);
        echo "¡Vaya! Algo salió mal y no pudimos enviar su mensaje.";
    }

} else {
    // No es una solicitud POST, establecer un código de respuesta 403 (prohibido).
    http_response_code(403);
    echo "Hubo un problema con su envío, por favor intente de nuevo.";
}
?>