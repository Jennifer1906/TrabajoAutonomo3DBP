<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Calculadora</title>
    <link href="https://fonts.googleapis.com/css2?family=Fraunces:wght@200&display=swap" rel="stylesheet">
    <link href="estiloCal.css" rel="stylesheet">
    <script src="display.js" type="text/javascript"></script>
    <script src="calculadora.js" type="text/javascript"></script>
    <script src="funciones.js" type="text/javascript" defer></script>
   
</head>

<body>
    <h1>CALCULADORA</h1>
    <div class="contenedor" id="div">
        <div class="calculadora" id="div">
            <div class="display" id="div">
                <div id="valorAnterior" id="div"></div>
                <div id="valorActual" id="div"></div>
            </div>
            <button id="boton" class="complementarios" onclick="display.borrarTodo()">C</button>
            <button id="boton" class="dobleColumna complementarios" onclick="display.borrar()">&larr;</button>
            <button id="boton" class="operador" value="dividir">/</button>
            <button id="boton" class="numero">7</button>
            <button id="boton" class="numero">8</button>
            <button id="boton" class="numero">9</button>
            <button id="boton" class="operador" value="multiplicar">*</button>
            <button id="boton" class="numero">4</button>
            <button id="boton" class="numero">5</button>
            <button id="boton" class="numero">6</button>
            <button id="boton" class="operador" value="restar">-</button>
            <button id="boton" class="numero">1</button>
            <button id="boton" class="numero">2</button>
            <button id="boton" class="numero">3</button>
            <button id="boton" class="operador" value="sumar">+</button>
            <button id="boton" class="dobleColumna numero">0</button>
            <button id="boton" class="numero">.</button>
            <button id="boton" class="operador igual" value="igual">=</button>
        </div>
    </div>
</body>

</html>