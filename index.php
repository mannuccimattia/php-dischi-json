<?php require_once "./utils/functions.php" ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <?php require_once "./utils/html_head.php" ?>
  <title>Vinyl Collection</title>
</head>

<body>
  <div class="container-fluid bg-darker">
    <div class="navbar container my-5">
      <div class="img-wrapper">
        <img src="./imgs/logo.png" class="img-fluid" alt="logo">
      </div>
      <h1>My collection</h1>
    </div>
  </div>

  <div class="container">
    <div class="row gy-4 mb-5">

      <?php

      foreach ($vinyls as $vinyl) {

      ?>

        <div class="col-12 col-lg-6">
          <div class="card bg-dark flex-row text-white align-items-center">
            <div class="card-img">
              <img
                src="<?php echo $vinyl['img_url'] ?>"
                class="img-fluid rounded-start"
                alt="album cover">
            </div>
            <div class="card-body ps-4">
              <div class="card-title">
                <h5 class="fw-bold">
                  <?php echo $vinyl['title'] ?>
                </h5>
                <div class="text-secondary">
                  <?php echo $vinyl['artist'] ?>
                </div>
              </div>
              <div class="card-text text-secondary">
                <div>
                  <em> <?php echo $vinyl['year'] ?> </em>
                </div>
                <div>
                  <?php echo $vinyl['genre'] ?>
                </div>
              </div>
            </div>
          </div>
        </div>

      <?php

      }

      ?>

    </div>
  </div>
</body>

</html>