<?php

namespace thiagochfc\pdo\Domain\Model;

class Student {
  private ?int $id;  
  private string $name;

  function __construct(?int $id, string $name)
  {
    $this->id = $id;
    $this->name = $name;
  }

  function getId() : int {
    return $this->id;
  }

  function getName() : string {
    return $this->name;
  }
}