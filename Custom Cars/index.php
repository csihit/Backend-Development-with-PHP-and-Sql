<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Custom Cars</title>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <!-- stylesheet -->
    <link rel="stylesheet" href="style.css">

    <!-- font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
<?php include './partials/connect.php';?>
    <!-- <h1>custom cars</h1> -->

    <div class="container-fluid slider">
      <?php include './partials/header.php';?>
          <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="image/black2.jpg" class="d-block w-100" alt="Charger 1970">
                <div class="carousel-caption d-none d-md-block">
                  <h3>First slide label</h3>
                  <p>Some representative placeholder content for the first slide.</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="image/red_mustang.jpg" class="d-block w-100" alt="Mustang 1970">
                <div class="carousel-caption d-none d-md-block">
                  <h3>Second slide label</h3>
                  <p>Some representative placeholder content for the second slide.</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="image/red.jpg" class="d-block w-100" alt="Toyota Corolla">
                <div class="carousel-caption d-none d-md-block">
                  <h3>Third slide label</h3>
                  <p>Some representative placeholder content for the third slide.</p>
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
    </div>



    <!-- cards -->
    <div class="container">
      <h1 class="text-center featureTitle mb-5">Featured Cars</h1>
      <div class="row">

        <?php
          $sql = "SELECT * FROM `carinfo`";
          $result = mysqli_query($con, $sql);
          while($row = mysqli_fetch_assoc($result)){
            $id = $row['car_id'];
            $car_image = $row['image'];
            $mod_name = $row['model_name'];
            $build_yr = $row['build_year'];
            $car_desc = $row['car_desc'];
            echo '<div class="col-md-4 col-sm-6 mb-5">
                    <div class="card" style="width: 18rem;">
                      <img src="image/'.$car_image.'" class="card-img-top" alt='.$mod_name.'>
                      <div class="card-body">
                        <h5 class="card-title">'.$mod_name.'</h5>
                        <p class="card-text">' .substr($car_desc, 0, 50). '...</p>
                        <a href="cars.php?car_id='.$id.'" class="btn btn-primary">Get More Details >></a>
                      </div>
                    </div>
                  </div>';
          }

        ?>

      </div>
    </div>
  <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  <?php include './partials/footer.php';?>
</body>
</html>