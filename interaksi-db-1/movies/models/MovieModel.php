<?php

  function getAllMovies($db){
    $query = "SELECT * FROM movies";
    $results = mysqli_query($db, $query);
    if(!$results) {
      die("gagal mengambil data : " . mysqli_error($db));
    }
    return mysqli_fetch_all($results, MYSQLI_ASSOC);
  }
?>