<?php

include_once "../includes/db.php";

class Registro extends DB{

    public function registrar(){
        $email = $_POST['mail'];
        $password = $_POST['pass'];
        $passEncrypt = md5($password);

    $conn = $this->connect()->prepare("INSERT INTO usuarios(username, password) VALUES (':email',':passEncrypt')");
    $conn->execute([':email' => $email, ':passEncrypt' => $passEncrypt]);
    return $conn;
  
    }
    
}

$conne = new Registro();


if (!empty($_POST['mail']) && !empty($_POST['pass'])) {
$conne->registrar();
}


?>