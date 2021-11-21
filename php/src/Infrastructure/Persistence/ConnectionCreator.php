<?php

namespace thiagochfc\pdo\Infrastructure\Persistence;

use PDO;
use PDOException;

class ConnectionCreator {
  public static function create() : PDO {
    $caminhoBanco = __DIR__ . '/../../../database.sqlite';
    try {
      return new PDO("mysql:host=my_database;dbname=pdo", "root", "example");
      //return new PDO("sqlite:" . $caminhoBanco);
    } catch (PDOException $e) {
      echo "Connection failed: " . $e->getMessage();
    }
  }
}
