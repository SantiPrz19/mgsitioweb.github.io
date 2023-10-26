<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cancion = $_POST["cancion"];
    $gusto = $_POST["gusto"];
    $utilidad = $_POST["utilidad"];
    $comentarios = $_POST["comentarios"];

    // Puedes hacer lo que desees con los datos, como almacenarlos en una base de datos o enviarlos por correo electrónico.
    
    // Por ejemplo, para mostrar los datos en esta página, puedes hacer lo siguiente:
    
    echo "<h2>Respuestas del formulario:</h2>";
    echo "<p>1. Canción favorita: " . $cancion . "</p>";
    echo "<p>2. Gusto por el artista: " . $gusto . "</p>";
    echo "<p>3. Utilidad de la información: " . $utilidad . "</p>";
    echo "<p>4. Comentarios: " . $comentarios . "</p>";
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