<?php

require __DIR__ . '/../autoload.php';

$fieldFormName = 'file';

if (!isset($_POST['title']) || '' == $_POST['title']) {
    $view = new \App\View();
    $view->assign('error', 'Нет названия у альбома');
    $view->display('error');
    die;
}
if (!isset($_POST['published']) || '' == $_POST['published']) {
    $view = new \App\View();
    $view->assign('error', 'Не указана дата публикации альбома');
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

$album = new \App\Models\Album();
$album->title = $_POST['title'];
$album->img = $imgPath;
$album->published = $_POST['published'] . '-01-01';
(new \App\Models\Albums())->save($album);

header('Location: /App/Controllers/Admin.php');
die;