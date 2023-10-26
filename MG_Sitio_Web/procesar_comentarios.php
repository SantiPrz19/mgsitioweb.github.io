<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];
    $comentario = $_POST["comentario"];

    $destinatario = "memoguz1709@gmail.com";

    $asunto = "Nuevo comentario de $nombre";
    $mensaje = "Nombre: $nombre\n";
    $mensaje .= "Correo Electrónico: $correo\n";
    $mensaje .= "Comentario:\n$comentario";

    $cabeceras = "From: $correo";

    // Envía el correo electrónico
    mail($destinatario, $asunto, $mensaje, $cabeceras);

    // Redirige a una página de confirmación
    header("Location: confirmacion.html");
} else {
    echo "Acceso no autorizado";
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Procesar Encuesta</title>
</head>
<body>
    <header>
        <nav>
            <h3>Memo Guz</h3>
            <div class="logo">
                <img src="MG.png" alt="MG-logo" >
            </div>
            <center>
            <ul class="menu">
                <div>
                <label> - </label>
                <li><a href="MG_Menu.html">Regresar al Menú</a></li><label> - </label>
                </div>
                <br>
            </ul>
        </nav><br><br>
    </header> <br><br><br><br><label>

</body>
</html>
