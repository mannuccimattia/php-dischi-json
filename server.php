<?php

if (
  $_POST['vinylTitle'] === ""
  && $_POST['vinylTitle'] === ""
  && $_FILES['vinylURL']['error'] !== 0
  && $_POST['vinylYear'] === ""
  && $_POST['vinylGenre'] === ""
) {

  header("Location: ./error.php");

  return;
} else {
  echo "else";
  // retrieve json list as string
  $json_text = file_get_contents("./vinyls_list.json");

  // decode json string into php array
  $vinyls = json_decode($json_text);

  // add new vinyl to php array
  $vinyls[] = [
    "title" => $_POST['vinylTitle'],
    "artist" => $_POST['vinylArtist'],
    "img_url" => "./imgs/" . $_FILES['vinylURL']['full_path'],
    "year" => $_POST['vinylYear'],
    "genre" => $_POST['vinylGenre']
  ];

  // save loaded image into ~/imgs/ folder
  $image_file = $_FILES['vinylURL']['tmp_name'];
  $image_destination = "./imgs/" . $_FILES['vinylURL']['name'];

  move_uploaded_file($image_file, $image_destination);

  // encode php array into json string
  $json_text_updated = json_encode($vinyls);

  // overwrite .json file with lew list
  file_put_contents("./vinyls_list.json", $json_text_updated);

  // redirect user to index.php
  header("Location: ./index.php");
}
