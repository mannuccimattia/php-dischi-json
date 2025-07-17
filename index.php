<?php

$vinyls_text = file_get_contents("./vinyls_list.json");

$vinyls = json_decode($vinyls_text);
var_dump($vinyls);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <?php require_once "./utils/html_head.php" ?>
  <title>Vinyl Collection</title>
</head>

<body>
  <div class="container">
    <div class="mt-5">
      <h1>My collection</h1>
    </div>

  </div>
</body>

</html>