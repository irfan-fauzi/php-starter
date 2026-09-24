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
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
  <title>movies</title>
</head>
<body>
  <main class="max-w-screen-xl mx-auto">
    <h1 class="text-2xl text-center mt-5">TMDB movie database</h1>
    <h2 class="mt-10 text-xl ">Koleksi Film dan Series Batman</h2>
    <div class="grid grid-cols-[repeat(auto-fit,minmax(200px,1fr))] md:grid-cols-6 gap-5 mt-5">
        
      <?php foreach ($movies as $movie) : ?>
        <article class="">
          <a href="#">
            <img src=<?= $movie['poster'] ?> alt="pria" class="rounded-xl shadow-lg">
            <p class="font-normal mt-2"><?= $movie['title'] ?></p>
            <p class="text-sm text-gray-500"><?= $movie['year'] ?></p>
          </a>
        </article>

      <?php endforeach; ?>
    </div>
  </main>
</body>
</html>