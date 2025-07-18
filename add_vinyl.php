<?php



?>

<!DOCTYPE html>
<html lang="en">

<head>
  <?php require_once "./utils/html_head.php" ?>
  <title>Add New Vinyl</title>
</head>

<body>
  <div class="container-fluid bg-darker mb-5">
    <div class="navbar container">
      <div class="img-wrapper">
        <img src="./imgs/logo.png" class="img-fluid" alt="logo">
      </div>
      <h1>Add New Vinyl</h1>
    </div>
  </div>

  <div class="container">

    <form action="./server.php" method="POST" enctype="multipart/form-data" class="bg-dark rounded p-3">
      <div class="row">
        <div class="col-12 col-lg-6 mb-4">
          <label for="vinyl-title" class="form-label"> Insert title</label>
          <input
            type="text"
            name="vinylTitle"
            id="vinyl-title"
            required
            class="form-control bg-dark border-secondary text-white">
        </div>
        <div class="col-12 col-lg-6 mb-4">
          <label for="vinyl-artist" class="form-label"> Insert artist</label>
          <input
            type="text"
            name="vinylArtist"
            id="vinyl-artist"
            required
            class="form-control bg-dark border-secondary text-white">
        </div>
        <div class="col-12 col-lg-6 mb-4">
          <label for="vinyl-year" class="form-label"> Insert year</label>
          <input
            type="text"
            name="vinylYear"
            id="vinyl-year"
            required
            class="form-control bg-dark border-secondary text-white">
        </div>
        <div class="col-12 col-lg-6 mb-4">
          <label for="vinyl-genre" class="form-label"> Insert genre</label>
          <input
            type="text"
            name="vinylGenre"
            id="vinyl-genre"
            required
            class="form-control bg-dark border-secondary text-white">
        </div>
        <div class="col-12 col-lg-6 mb-4 mx-auto">
          <label for="vinyl-img-url" class="form-label"> Insert image url</label>
          <input
            type="file"
            name="vinylURL"
            id="vinyl-img-url"
            required
            class="form-control bg-dark border-secondary text-white styled-file-input">
        </div>
        <div class="mb-4 text-center">
          <button type="submit" class="btn btn-primary btn-large">Add</button>
          <a href="./index.php" class="btn btn-danger btn-large">Back</a>
        </div>
      </div>
    </form>

  </div>
  </div>
  </div>
</body>

</html>