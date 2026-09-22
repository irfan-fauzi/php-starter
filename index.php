<!-- php -->
 <?php
  require_once 'utils/data.php';
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
 <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
  <h1 class="text-2xl font-bold text-center mt-10 text-gray-800">Movies</h1>
  <ul class="flex max-w-2xl mx-auto gap-2 mt-10 flex-wrap">
    <?php foreach ($movies as $movie): ?>
      <li class="border border-black max-w-xs p-2 rounded-lg shadow-md p-4">
        <h2><?php echo $movie['title']; ?></h2>
        <p>Year: <?php echo $movie['year']; ?></p>
        <p>Director: <?php echo $movie['director']; ?></p>
        <p>Rating: <?php echo $movie['rating']; ?></p>       
      </li>
    <?php endforeach; ?>
  </ul>
</body>
</html>