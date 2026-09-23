<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
  <title>interaksi ke db sesi 1</title>
</head>
<body class="flex flex-col min-h-screen w-full items-center justify-center">
  <main class="shadow-md p-5 max-w-md w-full">
    <h1 class="text-2xl text-center text-black mt-5">Login example form</h1>
    <div class="mt-5 p-5 max-w-md mx-auto">
      <form action="post.php" method="post"> 
        <div class=" flex flex-col gap-2">
          <input type="text" name="username" placeholder="Enter your username" class="shadow-md mb-2 py-2 px-4">
          <input type="password" name="password" placeholder="Enter your password" class="shadow-md mb-2 py-2 px-4">
          <button type="submit" class="border cursor-pointer bg-blue-500 text-white py-2 px-4 rounded">Login</button>
        </div>
      </form>
    </div>
  </main>
</body>
</html>