<?php

namespace App\Models;

/**
 * Class Image
 */
class Image
{
    protected $id;
    public $title;
    public $path;
    public $category;

    public function __construct()
    {
    }

    public function setId(int $id)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }

}