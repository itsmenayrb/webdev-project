<?php

    require_once '../classes/Config.php';
    require_once '../classes/Message.php';

    $config = new Config();

    if(isset($_POST['send']))
    {

        $firstname = $config->checkInput($_POST['firstname']);
        $lastname = $config->checkInput($_POST['lastname']);
        $email = $config->checkInput($_POST['email']);
        $message = $config->checkInput($_POST['message']);
        $error = false;

        if( $firstname == "" || $lastname == "" || $email == "" || $message == "" ){
         
            echo json_encode(array(
                'status' => 'empty',
                'message' => 'All fields are required.'
            ));
            $error = true;

        }

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

            echo json_encode(array(
                'status' => 'invalidemail',
                'message' => 'Invalid email address'
            ));
            $error = true;

        }

        if (!preg_match("/^[a-zA-Z ]*$/", $firstname) || !preg_match("/^[a-zA-Z ]*$/", $lastname)) {
            echo json_encode(array(
                'status' => 'invalidname',
                'message' => 'Invalid name'
            ));
            $error = true;
        }

        if($error == false) {

            $date = date('Y-m-d H:i:s');
            $send = new Message();
            $send->sendMessage($firstname, $lastname, $email, $message, $date);
            echo json_encode(array(
                'status' => 'success',
                'message' => 'Message sent!'
            ));
        }

    }

    if (isset($_GET['display']))
    {

        $messages = $config->checkInput($_GET['display']);
        switch ($messages) {
            case 'messages':
                $display = new Message();
                $display->displayMessages();
                break;
            
            default:
                exit('Nothing to show.');
                break;
        }


    }


?>