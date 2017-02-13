<?php

require __DIR__ . '/functions/file.php';
require __DIR__ . '/models/photo.php';

if (!empty($_POST)) {

    $data = [];

    if (!empty($_POST['title'])) {
        $data['title'] = $_POST['title'];
    }

    if (!empty($_FILES)) {
        $res = file_upload('image');
        if (false !== $res) {
            $data['image'] = $res;
        }
    }

    if (isset($data['title'])) {      // тут еще нужно проверить на наличие image в массиве, но вырезал это тк не разберусь с правами доступа папки temp в lampp
        photo_insert($data);
        header('Location: ./');
        die;
    }
}
include __DIR__ . '/views/add_photo.php';
