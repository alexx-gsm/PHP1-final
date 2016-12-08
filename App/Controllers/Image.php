<?php

require __DIR__ . '/../../autoload.php';

$id = $_GET['id'] ?? null;

$view = new \App\View();

if (null !== $id && (int)$id > 0) {

    $image = (new \App\Models\Gallery())->findOneById($id);

    if (!empty($image)) {
        $view->assign('image', $image);
        $view->display('Image');
        die;
    }
}

$view->display('404');