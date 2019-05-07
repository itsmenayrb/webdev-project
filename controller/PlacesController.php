<?php

    require_once '../classes/Config.php';
    require_once '../classes/Places.php';

    $config = new Config();

    if (!empty($_POST['title']) || !empty($_POST['content']) || !empty($_FILES['file']['name'])) {

        $title = $config->checkInput($_POST['title']);
        $content = $config->checkInput($_POST['content']);

        if (isset($_FILES['file'])) {
            $valid_extensions = array('jpeg', 'jpg', 'png', 'JPEG', 'JPG', 'PNG', 'GIF', 'gif');
            $path = '../uploads/';

            $img = $_FILES['file']['name'];
            $temporary = $_FILES['file']['tmp_name'];


            $ext = strtolower(pathinfo($img, PATHINFO_EXTENSION));
            $final_image = rand(1000, 1000000) . $img;

            if (in_array($ext, $valid_extensions))
            {
                $path = $path.strtolower($final_image);

                if(move_uploaded_file($temporary, $path)) {   
                    if ($post = new Places()){
                        $path = ltrim($path, './');
                        $post->sendPost($title, $content, $path);
                        echo 'ok';
                    }
                }

            } else {
                echo 'invalid file';
            }

        }


    }

    if(isset($_GET['display'])) {

        $display = $config->checkInput($_GET['display']);
        switch ($display) {
            case 'places':
                $places = new Places();
                $places->displayPlaces();
                break;
            
            default:
                exit('Nothing to show');
                break;
        }

    }

    if (isset($_POST['lastid'])) {
        sleep(1);
        $lastid = $config->checkInput($_POST['lastid']);

        $loadmoredata = new Places();
        $loadmoredata->displayMorePlaces($lastid);
    }


?>