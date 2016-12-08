<?php

namespace App\Models;

use App\DB;

class Gallery
{
    const AMOUNT_RECENT_IMAGES_ON_INDEX_PAGE = 3;

    protected $db;

    public function __construct()
    {
        $this->db = new DB();
    }

    public function findAll()
    {
        $sql = 'SELECT * FROM images';
        return $this->db->query($sql, Image::class);
    }

    public function findOneById(int $id)
    {
        $sql = 'SELECT * FROM images WHERE id=:id';
        return $this->db->query($sql, Image::class, [':id' => $id])[0];
    }

    public function findNLastEntries(int $count = 1)
    {
        $sql = 'SELECT * FROM images ORDER BY id DESC LIMIT ' . $count;
        return $this->db->query($sql, Image::class);
    }
    public function save(Image $image) {
        $sql = 'INSERT INTO images (title, path) VALUES (:title, :path)';
        return $this->db->execute($sql, [
            ':title' => $image->title,
            ':path' => $image->path
            ]);
    }

}
