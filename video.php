<!--
  Estudiante: Jennifer Elizabeth Quizhpe
  Ciclo: Quinto "A"
-->

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reproductor de video</title>
    <link rel="stylesheet" href="estiloV.css">
    <script src="video.js"></script>
</head>

<body>
    
        <div class="container-video mx-auto">
        <video id="video">
            <source src="media/bts.mp4" type="video/mp4">
        </video>
        <button id="play" onclick="playPause()" class="btn-primary fa fa-play"> </button>
        <button class="btn-danger fa fa-stop" onclick="stop()"></button>
        <button class="fa fa-angle-double-left bg-dark" onclick="atrasar()"></button>
        <button class="fa fa-angle-double-right bg-dark" onclick="adelantar()"></button>

    </div>
    <br>

</body>

</html>