<?php
include './functions/generatePass.php';


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <link rel="stylesheet" href="./css/style.css">
  <title>PHP Password</title>
</head>

<body>
  <header class="text-center">
    <h1 class="">PHP Generator Password</h1>
    <h2 class="text-white">Genera una password sicura</h2>
  </header>

  <main>
    <div class="container">
      <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="GET">
        <div class="row generator rounded mt-3">
          <div class="col-6 d-flex align-items-center pb-3">
            <div class="text me-3">
              <p class="mb-0">Lunghezza caratteri password:</p>
            </div>
            <div>
              <input type="number" class="form-control pe-3" name="length" min="8" max="24">
            </div>
            <div class="buttons">
              <button type="submit" class="btn btn-primary ms-3">Genera</button>
            </div>
          </div>
        </div>
      </form>
      <?php if (isset($_GET['length'])) { ?>
        <div class="alert alert-primary" role="alert">
          <strong>Ecco la tua password: </strong> <?php echo genPass($_GET['length']) ?>
        </div>
      <?php } ?>
    </div>
  </main>

</body>

</html>