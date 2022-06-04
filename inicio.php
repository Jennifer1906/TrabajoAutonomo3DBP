<!--
  Estudiante: Jennifer Elizabeth Quizhpe
  Ciclo: Quinto "A"
-->

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="icon" href="media/inicio.png">
    <link rel="stylesheet" type="text/css" href="estilo.css">
    <script src="video.js"></script>
    
    
</head>

<body>
    <section id="inicio">
        <video id="videoGif" autoplay muted loop>
            <source src="media/Recorré el mundo.mp4" type="video/mp4">
        </video>
        <h1 id="texto">INICIO</h1>
    </section>
    <section id="listado">
        <div class="buscador">
           BUSCADOR 
            <h4>Nombre-Apellido:</h4><input class="inputBus"  type="text" onkeyup="showHint(this.value)">
            <h4>Sugerencia: </h4><span id="txtHint" ><br></span>  
        </div>
        <iframe src="listado.php">
            
        </iframe>
    </section>
    <section id="curriculum">
        <iframe src="curriculum.php"></iframe>
    </section>
    <section id="video">
        <h3>Reproductor de video</h3>
         <iframe src="video.php"></iframe>
    </section>
    <section id="audio">
        
        <div class="containerAudio">
            <h2>Reproductor de audio</h2>
            <ul class="slider">
                <li id="slide1">
                   <img id="poster" src="media/DannyOcean.jpg" alt="Poster">
                    <audio id="musica1" controls>
                        <source src="media/Danny Ocean - Fuera del mercado.mp3" type="audio/mpeg">
                    </audio> 
                </li>
                <li id="slide2">
                    <img id="poster" src="media/humbe.jpg" alt="Poster">
                     <audio id="musica2" controls>
                         <source src="media/el-poeta.mp3" type="audio/mpeg">
                     </audio> 
                 </li>
                 <li id="slide3">
                    <img id="poster" src="media/EdenMunoz.jpg" alt="Poster">
                     <audio id="musica3" controls>
                         <source src="media/Eden Muñoz - Chale.mp3" type="audio/mpeg">
                     </audio> 
                 </li>
            </ul>
            <ul class="menuSlider">
                <li>
                    <a href="#slide1">1</a>
                </li>
                <li>
                    <a href="#slide2">2</a>
                </li>
                <li>
                    <a href="#slide3">3</a>
                </li>
            </ul>
        </div>
        
    </section>
    <section id="horario">
        <iframe src="horario.php"></iframe>
    </section>
    <section id="calculadora">
        <iframe src="calculadora.php"></iframe>
    </section>
    <section id="asignaturas">
        <iframe src="asignaturas.php"></iframe>
    </section>

    <div class="inicio">
        <img src="media/menu.png" alt="Icono de Menu" weight="30px" height="30px">
        <ul class="barraLateral">
            <li class="nav-item">
                <a href="#inicio" class="nav-link">
                    <i><img src="media/inicio.png" alt="Icono de Inicio" weight="30px" height="30px"></i>
                    <span class="title">Inicio</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="#listado" class="nav-link">
                    <i><img src="media/lista.png" alt="Icono de listado" weight="30px" height="30px"></i>
                    <span class="title">Listado </span>
                </a>
            </li>
            <li class="nav-item">
                <a href="#curriculum" class="nav-link">
                    <i><img src="media/cv.png" alt="Icono de Curriculum"  weight="30px" height="30px"></i>
                    <span class="title">Curriculum</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="#video" class="nav-link">
                    <i><img src="media/video.png" alt="Icono de Video" weight="30px" height="30px"></i>
                    <span class="title">Video</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="#audio" class="nav-link">
                    <i><img src="media/audio.png" alt="Icono de Musica" weight="30px" height="30px"></i>
                    <span class="title">Audio</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="#horario" class="nav-link">
                    <i><img src="media/horario.png" alt="Icono de horario" weight="30px" height="30px"></i>
                    <span class="title">Horario</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="#calculadora" class="nav-link">
                    <i><img src="media/calculadora.png" alt="Icono de calculadora"  weight="30px" height="30px"></i>
                    <span class="title">Calculadora</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="#asignaturas" class="nav-link">
                    <i><img src="media/libro.png" alt="Icono de Libros" weight="30px" height="30px"></i>
                    <span class="title">Asignaturas</span>
                </a>
            </li>
        </ul>
    </div>
    <script src="buscador.js"></script>
</body>

</html>