<?php

namespace App\Models;

use App\DB;

class Albums
{
    protected $db;

    public function __construct()
    {
        $this->db = new DB();
    }

    public function findAll()
    {
        $sql = 'SELECT * FROM albums ORDER BY published DESC';
        return $this->db->query($sql, Album::class);
    }

    public function findOneById(int $id)
    {
        $sql = 'SELECT * FROM albums WHERE id=:id';
        return $this->db->query($sql, Album::class, [':id' => $id])[0];
    }

    public function findNLastEntries(int $count = 1)
    {
        $sql = 'SELECT * FROM albums ORDER BY id DESC LIMIT ' . $count;
        return $this->db->query($sql, Album::class);
    }

    public function save(Album $album) {
        $sql = 'INSERT INTO albums (title, img, published) VALUES (:title, :img, :published)';
        return $this->db->execute($sql, [
            ':title' => $album->title,
            ':img' => $album->img,
            ':published' => date('Y-m-d', strtotime($album->published)),
            ]);
    }

}
