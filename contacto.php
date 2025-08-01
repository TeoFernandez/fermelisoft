<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = filter_var($_POST['nombre'], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $mensaje = filter_var($_POST['mensaje'], FILTER_SANITIZE_STRING);

    if ($nombre && $email && $mensaje) {
        $to = "contacto@fermelisoft.com.ar";
        $subject = "Nuevo mensaje de contacto desde FermeliSoft";
        $body = "Nombre: $nombre\nEmail: $email\nMensaje:\n$mensaje";
        $headers = "From: $email";

        if (mail($to, $subject, $body, $headers)) {
            echo "<p>Mensaje enviado con éxito. ¡Te contactaremos pronto!</p>";
        } else {
            echo "<p>Error al enviar el mensaje. Por favor, intenta de nuevo.</p>";
        }
    } else {
        echo "<p>Por favor, completa todos los campos correctamente.</p>";
    }
}
?>