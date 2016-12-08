<?php

require __DIR__ . '/../../autoload.php';

$images = (new \App\Models\Gallery())->findAll();

$view = new \App\View();
$view->assign('images', $images);
$view->display('Gallery');