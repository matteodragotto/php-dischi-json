<?php
require './functions.php'
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

  <title>Lista dei dischi</title>
</head>

<body class="max-w-100vh">
  <div class="container my-5 w-50">
    <div class="row">
      <?php
      foreach ($dischi as $disco) {
        echo "<div class='col-4'>
                <div class='card'>
                 <img src='{$disco['cover']}' class='card-img-top img-fluid' alt='Cover del disco {$disco['titolo']}'>
                  <div class='card-body d-flex flex-column justify-content-center'>

                    <h5 class='card-title text-center'>{$disco['titolo']}</h5>
                    <p class='card-text text-center m-0'>{$disco['artista']}</p>
                    <p class='card-text text-center m-0'>{$disco['anno']}</p>
                    <p class='card-text text-center m-0'>{$disco['genere']}</p>
    
                  </div>

                </div>
              </div>";
      }
      ?>
    </div>
    <h4>Aggiungi un nuovo album</h4>
    <form action="server.php" method="POST">
      <div class="form-control">
        <input type="text" id="albumTitle" name="albumTitle" placeholder="Titolo" required>
        <input type="text" id="albumArtist" name="albumArtist" placeholder="Artista" required>
        <input type="url" id="albumCover" name="albumCover" placeholder="Url della cover" required>
        <input type="number" id="albumYear" name="albumYear" placeholder="Anno" required>
        <input type="text" id="albumGenre" name="albumGenre" placeholder="Genere" required>
        <button>Aggiungi</button>
      </div>
    </form>


  </div>







  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>

</html>