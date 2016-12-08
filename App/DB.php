<?php

namespace App;

class DB
{
  protected $dbh;

  public function __construct()
  {
    $config = include __DIR__ . '/config.php';
    $host = $config['db_host'];
    $db_name = $config['db_name'];
    $dsn = 'mysql:host=' . $host . ';dbname=' . $db_name . ';';
    $this->dbh = new \PDO($dsn, $config['db_user'], $config['db_pass']);
  }

  public function execute(string $sql, $data = [])
  {
    $sth = $this->dbh->prepare($sql);
    return $sth->execute($data);
  }

  public function query(string $sql, $class = \stdClass::class, array $data = [])
  {
      $sth = $this->dbh->prepare($sql);
      $sth->execute($data);

      $res = $sth->fetchAll(\PDO::FETCH_CLASS, $class);

      return (!empty($res)) ? $res : false;
  }
}
