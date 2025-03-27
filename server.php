<?php
$json_text = file_get_contents('./dischi.json');

$dischi = json_decode($json_text, true);

$dischi[] = [
  'titolo' => $_POST['albumTitle'],
  'artista' => $_POST['albumArtist'],
  'cover' => $_POST['albumCover'],
  'anno' => $_POST['albumYear'],
  'genere' => $_POST['albumGenre']
];

$json_text = json_encode($dischi);

file_put_contents('./dischi.json', $json_text);

header('Location: ./index.php');
