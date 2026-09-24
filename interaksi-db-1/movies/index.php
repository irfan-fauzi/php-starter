<?php
  require_once __DIR__ . '/cofig/connectDb.php';
  require_once __DIR__ . '/models/MovieModel.php';
  $movies = getAllMovies($connection);
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>movies</title>
</head>
<body>
  
</body>
</html>