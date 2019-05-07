<?php

    session_start();
    require_once '../classes/Config.php';
    require_once '../classes/Register.php';

    $config = new Config();

    if(isset($_POST['register']))
    {

        $username = $config->checkInput($_POST['username']);
        $email = $config->checkInput($_POST['email']);
        $password = $config->checkInput($_POST['password']);
        $error = false;

        if( $username == "" || $password == "" || $email == ""){
         
            echo json_encode(array(
                'status' => 'empty',
                'message' => 'All fields are required.'
            ));
            $error = true;

        }

        if($error == false) {

            $login = new Register($username, $email, $password);
            $login->validateCredentials();
            
        }

    }


?>