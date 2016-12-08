<?php

namespace App\Models;

/**
 * Class Album
 */
class Album
{
    protected $id;
    public $title;
    public $img;
    public $published;

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