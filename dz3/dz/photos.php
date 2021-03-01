<?php

const PHOTO_PATH = 'img';

require_once 'vendor/Autoload.php';
Twig_Autoloader::register();

try {
    $loader = new Twig_Loader_Filesystem('templ');

    $twig = new Twig_Environment($loader);

    $template = $twig->loadTemplate('photos.html');

    $photo = stripcslashes($_GET['photo']);
    if (!file_exists(PHOTO_PATH . '/' . $photo)) throw new Exception ('Фото отсутсвует');

    echo $template->render(array(
        'title' => 'Список фотографий альбома',
        'path_to_photo' => PHOTO_PATH,
        'photo' => $photo
    ));

} catch (Exception $e) {
    die ('ERROR: ' . $e->getMessage());
}