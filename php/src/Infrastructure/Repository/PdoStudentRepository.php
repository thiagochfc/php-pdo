<?php

namespace thiagochfc\pdo\Infrastructure\Repository;

use PDO;
use thiagochfc\pdo\Domain\Repository\StudentRepository;
use thiagochfc\pdo\Domain\Model\Student;

class PdoStudentRepository  implements StudentRepository {
  
  private PDO $connection;

  function __construct(PDO $connection)
  {
    $this->connection = $connection;
  }

  public function allStudents(): array {
    $statement = $this->connection->query('SELECT id, name FROM students;');
    return $statement->fetchAll(PDO::FETCH_ASSOC);
  }
  
  public function save(Student $student): bool {
    $statement = $this->connection->prepare('INSERT INTO students (name) VALUES (:name);');
    $statement->bindValue(':name', $student->getName());
    return $statement->execute();
  }
  
  public function remove(Student $student): bool {
    $statement = $this->connection->prepare('DELETE FROM students WHERE id = :id;');
    $statement->bindValue(':id', $student->getId(), PDO::PARAM_INT);
    return $statement->execute();
  }
}