<?php

namespace thiagochfc\pdo\Domain\Repository;

use thiagochfc\pdo\Domain\Model\Student;

interface StudentRepository {
  public function allStudents(): array;
  public function save(Student $student): bool;
  public function remove(Student $student): bool;
}
