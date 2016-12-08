<?php

require __DIR__ . '/../../autoload.php';

$images = (new \App\Models\Gallery())->findAll();
$albums = (new \App\Models\Albums())->findAll();

$view = new \App\View();
$view->assign('images', $images);
$view->assign('albums', $albums);
$view->display('Admin');