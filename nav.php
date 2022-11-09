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
     <nav class="navbar navbar-expand-lg bg-info navbar-primary">
          <div class="container-fluid">
               <a class="navbar-brand mx-5" href="index.html">Tech-Says</a>
               <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
                    aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="bi bi-chevron-double-down"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                              height="16" fill="currentColor" class="bi bi-chevron-double-down" viewBox="0 0 16 16">
                              <path fill-rule="evenodd"
                                   d="M1.646 6.646a.5.5 0 0 1 .708 0L8 12.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z" />
                              <path fill-rule="evenodd"
                                   d="M1.646 2.646a.5.5 0 0 1 .708 0L8 8.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z" />
                         </svg></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarText">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 text=center">
                         <li class="nav-item">
                              <a class="nav-link active text-dark fw-bold" aria-current="page"
                                   href="index.html">Home</a>
                         </li>
                         <li class="nav-item">
                              <a class="nav-link text-dark fw-bold" href="#">Engineering</a>
                         </li>
                         <li class="nav-item">
                              <a class="nav-link text-dark fw-bold" href="#">Pharmacy</a>
                         </li>
                         <li class="nav-item">
                              <a class="nav-link text-dark fw-bold" href="#">Agriculture</a>
                         </li>
                         <li class="nav-item">
                              <a class="nav-link text-dark fw-bold" href="#">Technology</a>
                         </li>
                         <li class="nav-item">
                              <a class="nav-link text-dark fw-bold" href="#">Latest Updates</a>
                         </li>
                    </ul>
                    <!-- <a href="signup.php">
                         <div class="btn btn-danger  mx-1">Sign-Up</div>
                    </a> -->
                    <a href="switch.php">
                         <div class="btn btn-success mx-1">Switch Account</div>
                    </a>
                    <a class="mx-1" href="logout.php">
                         <div class="btn btn-primary">Logout</div>
                    </a>
               </div>
          </div>
     </nav>
     <!-- Navbar Ended -->
</body>
</html>