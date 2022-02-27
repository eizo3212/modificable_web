<?php
require_once('./conf.php');

    $user = $_POST['user'];
    $pass = $_POST['pass'];


    /*$log = $link->query("SELECT nickname, psw FROM users WHERE nickname=$user and psw=$pass")->fetch();*/
    $log = $link->prepare("select id, user, pass, rol from users where user = '".$user."' and pass = '".$pass."'");
    $log->execute();
    $log = $log->fetch();

    if (isset($log)) {
        session_start();
        $u=$log['id'];
        $_SESSION['user'] = $u;
        
           switch ($log['rol']) {
               case '1':
                   header('location: admin.php');
                   break;
               
               case '2':
                header('location:./users/index.php');
                break;
    
           }
        
    
    }

    else if ($user == '' && $pass == '') {
        echo '<script>alert("usuario y contraseña vacios");</script>';
        header('location:login.html');
    }

    else {
        echo '<script>alert("inicio de sesion incorrecto");</script>';
        header('location:login.html');
    }
