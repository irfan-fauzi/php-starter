<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>contoh get</title>
</head>
<body>
  <!-- form -->
  <form action="get-pos.php" method="get">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name">
    <button type="submit">Submit</button>
  </form>

  <?php
    if(isset($_GET['name'])) {
      $name = $_GET['name'];
      echo "<p>Hello, " . htmlspecialchars($name) . "!</p>";
    }
  ?>
</body>
</html>