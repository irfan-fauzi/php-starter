<!-- algoritma -->
<?php
// jika tombol submit sudah di tekan
if(isset($_POST['submit'])){
  // cek isi username dan password yang diisi
  if($_POST['username'] == 'admin' && $_POST['password'] == '123'){
    // jika benar maka direct ke halaman dashboard
    header("Location: dashboard.php");
    exit;
  } else {
    $error = true;
  }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>sistem login</title>
</head>
<body>
  <h1>Sistem Login</h1>

  <?php if(isset($error)) : ?>
    <p>username / password salah</p>
  <?php endif ?>   
  
  <form action="" method="post">
    <label for="username">Username:</label>
    <input type="text" name="username" id="username" required>
    <label for="password">Password:</label>
    <input type="password" name="password" id="password" required>
    <button type="submit" name="submit">Login</button>
  </form>  
</body>
</html>