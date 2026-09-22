<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>pos</title>
</head>
<body>
  <form action="pos.php" method="post">
    <label for="user-name">User Name:</label>
    <input type="text" id="user-name" name="user-name" required>
    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required>
    <button type="submit">Submit</button>
  </form>
      <?php
    // Mengecek apakah data 'sandi' sudah dikirim
    if (isset($_POST['user-name']) && isset($_POST['password'])) {
        $password = htmlspecialchars($_POST['password']);
        $user_name = htmlspecialchars($_POST['user-name']);
        echo "<h3>Password rahasia Anda berhasil dikirim!</h3>";
    }
    ?>
</body>
</html>