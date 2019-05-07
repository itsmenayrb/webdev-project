<?php

    session_start();
    require_once '../classes/Config.php';
    require_once '../classes/Login.php';

    $config = new Config();

    if(isset($_POST['login']))
    {

        $username = $config->checkInput($_POST['username']);
        $email = $config->checkInput($_POST['email']);
        $password = $config->checkInput($_POST['password']);
        $error = false;

        if( $username == "" || $password == ""){
         
            echo json_encode(array(
                'status' => 'empty',
                'message' => 'All fields are required.'
            ));
            $error = true;

        }

        if($error == false) {

            $login = new Login($username, $email, $password);
            $login->loginMe();
            
        }

    }


?>