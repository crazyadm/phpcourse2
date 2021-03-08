<?php
    const PHOTO_PATH = 'img';

    require_once "vendor/autoload.php";
    Twig_Autoloader::register();

    try {
        $loader = new Twig_Loader_Filesystem('templ');

        $twig = new Twig_Environment($loader);

        $template = $twig->loadTemplate('index.html');
        $photos_in_dir = array_slice(scandir(PHOTO_PATH),2);


        echo $template->render(array(
            'title' => 'Список фото',
            'path_to_photo' => PHOTO_PATH,
            'photos' => $photos_in_dir
        ));
    }     catch (Exception $e) {
        die('Error: '. $e->getMessage());
    }
