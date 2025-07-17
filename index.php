<?php require_once "./utils/functions.php" ?>

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

      <div class="row gy-4 mb-5">

        <?php

        foreach ($vinyls as $vinyl) {

        ?>

          <div class="col-12">
            <div class="card bg-dark flex-row text-white align-items-center">
              <div class="card-img">
                <img
                  src="<?php echo $vinyl['img_url'] ?>"
                  class="img-fluid rounded-start"
                  alt="album cover">
              </div>
              <div class="card-body ps-4">
                <div class="card-title">
                  <b>Title:</b> <?php echo $vinyl['title'] ?>
                </div>
                <div class="card-title">
                  <b>Artist:</b> <?php echo $vinyl['artist'] ?>
                </div>
                <div class="card-title">
                  <b>Genre:</b> <?php echo $vinyl['genre'] ?>
                </div>
              </div>
            </div>
          </div>

        <?php

        }

        ?>

      </div>
    </div>

  </div>
</body>

</html>