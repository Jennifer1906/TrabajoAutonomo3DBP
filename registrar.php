<?php
    $nombre = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    //Lectura del Formulario LOGIN.HTML
    $lecturaJson = file_get_contents("registrar.json");
    $usuario = json_decode($lecturaJson, true);
    $usuarios = ['id'=>count($usuario), 'name'=>$nombre,'email'=>$email,'password'=>$password];
    array_push($usuario,$usuarios);
    foreach ($usuario as $user){
        print_r ($user);
    }
    //Guardar los nuevos usuarios
    $guardar = json_encode($usuario);
    $almacenar = file_put_contents("registrar.json",$guardar);
		header("Location: index.php");	
?>
