<?php
include_once 'includes/user_session.php';
include_once 'includes/user.php';

$userSession = new UserSession();
$user = new User();

if(isset($_SESSION['user'])){
    //echo "Hay session";
    $user->setUser($userSession->getCurrentUser());
    include_once 'vistas/home.php';
    
}else if(isset($_POST['username']) && isset($_POST['password'])){
    //echo "Validacion de Login";

    $userForm = $_POST['username'];
    $passForm = $_POST['password'];

    if($user->userExist($userForm, $passForm)){
        //echo "User validado";

        $userSession->setCurrentUser($userForm);
        $user->setUser($userForm);
        include_once 'vistas/home.php';

    }else {
        //echo "User incorrecto";

        $errorLogin = "Nombre de Usuario y/o password son incorrectos";
        include_once 'vistas/login.php';

    }
}else {

    include_once 'vistas/login.php';

}



?>