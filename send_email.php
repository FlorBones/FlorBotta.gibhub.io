<?php
$to = "florencia.n.botta@gmail.com"; // Replace with the recipient's email address
$subject = "";
$message = "Hola, tengo una consulta sobre tus servicios, ";

// Send email
if (mail($to, $subject, $message)) {
    echo "Email enviado exitosamente!";
} else {
    echo "Algo salió mal, intentalo de nuevbo por favor.";
}
?>
