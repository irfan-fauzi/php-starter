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
      <form action="index.php" method="post"> 
        <div class=" flex flex-col gap-2">
          <input type="text" name="username" placeholder="Enter your username" class="shadow-md mb-2 py-2 px-4">
          <input type="password" name="password" placeholder="Enter your password" class="shadow-md mb-2 py-2 px-4">
          <button type="submit" class="border cursor-pointer bg-blue-500 text-white py-2 px-4 rounded">Login</button>
        </div>
      </form>
    </div>
    <?php
    // koneksi ke database
    $host = "localhost";
    $user = "root";
    $password = "";
    $database = "db_latihan1";
    $connection = mysqli_connect($host, $user, $password, $database);
    // cek koneksi
    if(!$connection){
      die("Koneksi gagal: " . mysqli_connect_error());
    }

    // cek apakah form login telah disubmit
    if(isset($_POST['username']) && isset($_POST['password'])){
      // ambil data dari masing-masing input form & bersihkan dari karakter yang tidak diinginkan
      $username = mysqli_real_escape_string($connection, $_POST['username']);
      $passHashed = password_hash($_POST['password'], PASSWORD_BCRYPT);

      // "membuat" query untuk mengambil data user dari database
      $query = "INSERT INTO users (username, password) VALUES ('$username', '$passHashed')";

      // "menjalankan" query ke database
      if(mysqli_query($connection, $query)) {
        echo "<p class='text-green-500'>User registered successfully!</p>";
      } else {
        echo "<p class='text-red-500'>Error: " . mysqli_error($connection) . "</p>";
      }

      // tutup koneksi ke database
      mysqli_close($connection);

    }
    
    ?>
  </main>
</body>
</html>