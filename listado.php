
<?php

$file = simplexml_load_file("listado.xml");

echo ('<body  id = curriculum>');
echo ('<link rel= stylesheet href=estiloL.css type=text/css />');
echo ('<h1> Lista de Estudiantes 5A</h1>');
echo ('<div class = estudiantes>');

echo ('<table id = tabla align:center>');
echo ('<tr>');
echo ('<th> Nro </th>');
echo ('<th> Nombres  </th>');
echo ('<th> Apellidos  </th>');
echo ('<th> Edad  </th>');
echo ('<th> Cédula  </th>');
echo ('<th> Paralelo</th>');
echo ('</tr>');

foreach ($file->Estudiante as $datos) {

    echo ('<tr>');
    echo ('<td> ' . $datos->id . ' </td>');
    echo ('<td> ' . $datos->nombres . ' </td>');
    echo ('<td> ' . $datos->apellidos . ' </td>');
    echo ('<td> ' . $datos->edad . ' </td>');
    echo ('<td> ' . $datos->cedula . ' </td>');
    echo ('<td> ' . $datos->paralelo . ' </td>');
    echo ('</tr>');
}

echo ('</table>');
echo ('</estudiantes>');
echo ('</body>');
