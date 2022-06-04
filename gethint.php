<?php
// Array with names
$file = simplexml_load_file("listado.xml");

$q = $_REQUEST["q"];

$hint = "";

if ($q !== "") {
    $q = strtolower($q);
    $len=strlen($q);
    foreach($file->Estudiante as $name) {
        if (stristr($q, substr($name->nombres, 0, $len)) || stristr($q, substr($name->apellidos, 0, $len))) {
            if ($hint === "") {
                $hint = $name->nombres.$name->apellidos;
            } else {
                $hint .= ", $name->nombres $name->apellidos";
            }
        }       
    }
}

echo $hint === "" ? "No existe" : $hint;
?>