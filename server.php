<?php

var_dump($_POST);

// retrieve json list as string
$json_text = file_get_contents("./vinyls_list.json");

// decode json string into php array
$vinyls = json_decode($json_text);

// add new vinyl to php array
$vinyls[] = [
  "title" => $_POST['vinylTitle'],
  "artist" => $_POST['vinylArtist'],
  "img-url" => "./imgs/$_POST[vinylURL]",
  "year" => $_POST['vinylYear'],
  "genre" => $_POST['vinylGenre']
];

// encode php array into json string
$json_text_updated = json_encode($vinyls);

var_dump($vinyls);

// overwrite .json file with lew list
// file_put_contents("./vinyls_list.json", $json_text_updated);
