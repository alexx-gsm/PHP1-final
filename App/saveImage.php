<?php

require __DIR__ . '/../autoload.php';

$fieldFormName = 'file';

if (!isset($_POST['title']) || '' == $_POST['title']) {
    $view = new \App\View();
    $view->assign('error', 'Нет названия у картинки');
    $view->display('error');
    die;
}

$uploader = new \App\Uploader($fieldFormName);

$imgPath = $uploader->upload();
if (false === $imgPath) {
    $view = new \App\View();
    $view->assign('error', 'Ошибка загрузки файла');
    $view->display('error');
    die;
}

$image = new \App\Models\Image();
$image->title = $_POST['title'];
$image->path = $imgPath;
(new \App\Models\Gallery())->save($image);

header('Location: /App/Controllers/Admin.php');
die;
