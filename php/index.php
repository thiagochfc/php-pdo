<?php

require 'vendor/autoload.php';

use thiagochfc\pdo\Domain\Model\Student;
use thiagochfc\pdo\Infrastructure\Persistence\ConnectionCreator;
use thiagochfc\pdo\Infrastructure\Repository\PdoStudentRepository;

$pdoStudentRepository = new PdoStudentRepository(ConnectionCreator::create());
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    tbody {
      border-bottom: 1px solid black;
    }
  </style>
  <title>Estudantes</title>
</head>
<body>
  <table>
    <thead>
      <tr align="left">
        <th>ID</th>
        <th>Name</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($pdoStudentRepository->allStudents() as $student): ?>
      <tr>
        <td><?php echo $student['id']; ?></td>
        <td><?php echo $student['name']; ?></td>
      </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</body>
</html>

