<?php
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    //Lectura del Formulario LOGIN.HTML
    $lecturaJson = file_get_contents("registrar.json");
    $userarray = json_decode($lecturaJson, true);
    //Para validar campos del login con el Json
    foreach($userarray as $usarray){
        $name_user = $usarray["email"];
        $contra_user =$usarray["password"];
        echo $name_user, $contra_user;
        if (strcmp($name_user,$email)==0 && strcmp($contra_user,$password)==0) {
            header("Location: inicio.php ");
        }else{
            ?>
            <?php
            
            include("index.php");
            ?>
            <script> alert("Credenciales Incorrectas")</script>;
            <?php
        }
    }

?>