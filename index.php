<!-- php -->
 <?php
  $data = "hello php";
  $fruits = ['banana', 'orange', 'grape'];
  $employees = [
    ['name' => 'John', 'age' => 30],
    ['name' => 'Jane', 'age' => 25],
    ['name' => 'Bob', 'age' => 35],
    ['name' => 'Alice', 'age' => 28],
    ['name' => 'Mike', 'age' => 32],
    ['name' => 'Sara', 'age' => 27],
    ['name' => 'Tom', 'age' => 29],
    ['name' => 'Emma', 'age' => 31],
    ['name' => 'David', 'age' => 33],
    ['name' => 'Sophia', 'age' => 26]
  ];

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1> php said<?php echo $data; ?></h1>
  <ul>
    <?php foreach ($employees as $employee): ?>
      <li><?php echo $employee['name'] . ' - ' . $employee['age']; ?></li>
    <?php endforeach; ?>
  </ul>
</body>
</html>