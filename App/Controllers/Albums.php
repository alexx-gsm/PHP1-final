<?php

require __DIR__ . '/../../autoload.php';

$albums = (new \App\Models\Albums())->findAll();

$view = new \App\View();
$view->assign('albums', $albums);
$view->display('Albums');