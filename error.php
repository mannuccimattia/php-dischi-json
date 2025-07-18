<!DOCTYPE html>
<html lang="en">

<head>
  <?php require_once "./utils/html_head.php" ?>
  <title>Something went wrong</title>
</head>

<body>
  <div class="container-fluid bg-darker">
    <div class="navbar container">
      <div class="img-wrapper">
        <img src="./imgs/logo.png" class="img-fluid" alt="logo">
      </div>
      <h1>My collection</h1>
    </div>
  </div>

  <div class="container">
    <div class="row gy-4 my-5">

      <div class="col-12 text-center my-5">
        <h3>Something went wrong while submitting the form</h3>
        <p class="mt-5">Please try again</p>
        <a href="./index.php" class="btn btn-danger">Back</a>
      </div>

    </div>
  </div>
</body>

</html>