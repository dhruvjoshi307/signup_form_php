<?php
  session_start();
  if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true){
    header("location: http://localhost/techsays/Signup/login.php");
    exit;
  }
?>
<!Doctype html>
<html lang="en">

<head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <title>Tech-Says</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
     <style>
     .navbar-brand {
          font-family: cursive;
     }
     </style>
</head>
<body>
    <!-- Navbar started -->
    <?php
      require 'nav.php';
    ?>
     <!-- Navbar Ended -->
     <!-- Carousel in bootstrap -->
     <div class="container">
          <div id="carouselExampleDark" class="carousel carousel-light slide mt-5" data-bs-ride="carousel">
               <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
                         aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
                         aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
                         aria-label="Slide 3"></button>
               </div>
               <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="10000">
                         <img src="https://source.unsplash.com/1400x500/?books" class="d-block w-100" alt="...">
                         <div class="carousel-caption d-none d-md-block">
                              <div class="btn btn-primary">Engineering</div>
                              <div class="btn btn-success">About Me</div>
                              <div class="btn btn-danger">Material</div>
                         </div>
                    </div>
                    <div class="carousel-item" data-bs-interval="2000">
                         <img src="https://source.unsplash.com/1400x500/?office" class="d-block w-100" alt="...">
                         <div class="carousel-caption d-none d-md-block">
                              <!-- <h5>Click the image to get the materials</h5> -->
                              <!-- <p></p> -->
                              <div class="btn btn-primary">Pharmacy</div>
                              <div class="btn btn-success">About Me</div>
                              <div class="btn btn-danger">Material</div>
                         </div>
                    </div>
                    <div class="carousel-item">
                         <img src="https://source.unsplash.com/1400x500/?laptop" class="d-block w-100" alt="...">
                         <div class="carousel-caption d-none d-md-block">
                              <!-- <h5>The best pharmacy notes and suggeston of videos to learn</h5>
            <p>Thaks For visiting us</p> -->
                              <div class="btn btn-primary">Agriculture</div>
                              <div class="btn btn-success">About me</div>
                              <div class="btn btn-danger">Material</div>
                         </div>
                    </div>
               </div>
               <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
               </button>
               <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
               </button>
          </div>
     </div>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
          integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
     </script>
</body>
</html>