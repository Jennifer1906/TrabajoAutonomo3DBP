<!--
  Estudiante: Jennifer Elizabeth Quizhpe
  Ciclo: Quinto "A"
-->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curriculum Vitae</title>
    <link rel="stylesheet" href="estiloC.css">
    <script src="contarEtiquetas.js" type="text/javascript" defer></script>
</head>

<body>
    <div>
        <img src="media/f1.png" alt="2x2">
        <h1> Curriculum Vitae</h1>
        <fieldset>
            <legend>Datos Generales</legend>
            <ul>
                <li><span>Apellidos:</span> Quizhpe Hurtado</li>
                <li><span>Nombres:</span> Jennifer Elizabeth</li>
                <li><span>Cédula:</span> 1105653172</li>
                <li><span>Edad:</span> 22</li>
                <li><span>Fecha Nacimiento:</span> 19 de junio, 1999</li>
                <li><span>Dirección: </span> Gonzalez Suarez y Miguel Angel Suarez</li>
                <li><span>Email:</span> jennifer.quizhpe@unl.edu.ec</li>
                <li><span>Teléfono:</span> 0995913572</li>
            </ul>
        </fieldset>
        <fieldset>
            <legend>Formación Académica</legend>
            <ul>
                <li><span>Primaria:</span> Monseñor Jorge Mosquera</li>
                <li><span>Secundaria:</span> Unidad Educativa "Daniel Álvarez Burneo</li>
                <li><span>Superior:</span> Estudiante carrera de Computación - Universidad Nacional de Loja</li>
            </ul>
        </fieldset>
        <fieldset>
            <legend>Experiencia Laboral</legend>
            <ul>
                <li>Asistente de cocina</li>
                <li>Niñera</li>
                <li>Quehaceres domésticos</li>
            </ul>
        </fieldset>
        <fieldset>
            <legend>Hobbies</legend>
            <ul>
                <li>Deportes</li>
                <ul>
                    <li>Fútbol</li>
                    <li> Baloncesto</li>
                </ul>
                <li>Cocinar</li>
                <li>Viajar</li>
            </ul>
        </fieldset>
        <fieldset>
            <legend>Lenguajes de programación</legend>
            <ul id="ul">
                <table id="table" bordercolor="#071584">
                    <tr id="tr">
                        <th height="50" width="250" bgcolor="#071584" bordercolor="#ffffff" color="#ffffff"><b>Lenguaje de
                                Programación</b></th>
                        <th height="50" width="200" bgcolor="#071584" bordercolor="#ffffff"><b>Nivel</b></th>
                    </tr>
                    <tr id="tr">
                        <th id="th">C</th>
                        <th id="th">Básico</th>
                    </tr>
                    <tr id="tr">
                        <th id="th">Java</th>
                        <th id="th">Básico</th>
                    </tr>
                    <tr id="tr">
                        <th id="th">Python</th>
                        <th id="th">Básico</th>
                    </tr>
                    <tr id="tr">
                        <th id="th">HTML</th>
                        <th id="th">Básico</th>
                    </tr>
                </table>
            </ul>
        </fieldset>
        <fieldset>
            <legend>Contar etiquetas</legend>
            <p>Número de etiquetas que ha sido utilizadas en el archivo de curriculum</p>
            <input id="input" type="button" class="input" value="PRESENTAR" onclick="presentar()">
        </fieldset>
    </div>
</body>