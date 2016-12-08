<?php

require __DIR__ . '/autoload.php';

$gallery = new \App\Models\Gallery();
$images = $gallery->findNLastEntries($gallery::AMOUNT_RECENT_IMAGES_ON_INDEX_PAGE);
$albums = (new \App\Models\Albums())->findNLastEntries(1);

$view = new \App\View();
$view->assign('images', $images);
$view->assign('albums', $albums);
$view->display('index');