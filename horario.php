<!--
  Estudiante: Jennifer Elizabeth Quizhpe
  Ciclo: Quinto "A"
-->

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Horario</title>
    <link rel="icon" href="media/horario.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/css/materialize.min.css">
</head>

<body>
    <div class="container" background-color= "#ffffff"> 
        <div class="section">
            <h1 style="text-align: center; font-family: 'Times New Roman', Times, serif; background: #ccc; 
                        background: linear-gradient(90deg, #020036, #0059df,#020036);
                        -webkit-text-fill-color: transparent; -webkit-background-clip: text;"><b>HORARIO PERSONAL</b></h1>
            <button class="btn" id="boton" style="background-color: #07038b; border-radius: 12px; margin-bottom: 10px; font-weight: bold;">Horario</button>
            
            <table  style="background-color: rgba(255, 255, 255, 0.808);">
                <thead>
                    <tr> 
                        <th><center><b>HORA</b></center></th>
                        <th><b>LUNES</b></th>
                        <th><b>MARTES</b></th>
                        <th><b>MIERCOLES</b></th>
                        <th><b>JUEVES</b></th>
                        <th><b>VIERNES</b></th>
                        <th><b>SABADO</b></th>
                        <th><b>DOMINGO</b></th>
                    </tr>
                </thead>
                <tbody id="res">

                </tbody>
            </table>
        </div>
    </div>
    <script src="leerhorario.js"></script>
</body>  
</html>