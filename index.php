<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clinic</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/all.min.css">
    <link rel="stylesheet" href="./css/homepage.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="./img/favicon.png" type="image/x-icon">
  </head>
<body>
    
  <!-- Navbar  -->

  <nav class="navbar sticky-top navbar-expand-lg bg-body-tertiary bg-dark">
    <div class="container gap-4">
      <a class="navbar-brand title" href="index.php">Clinic</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars navbar-toggler-icon menu"></i>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#about-us">About us</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              departments
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Dental</a></li>
              <li><a class="dropdown-item" href="#">Cardiology</a></li>
              <li><a class="dropdown-item" href="#">Dermatology</a></li>
              <li><a class="dropdown-item" href="#">Bones</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="login.php">Login <i class="fas fa-user"></i>           |</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="signup.php">register</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Navbar  -->

  <!-- Slider  -->

  <div id="carouselExampleAutoplaying" class="carousel slide slider mg" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="./img/img4.jpeg" draggable="false" class="d-block w-100 img-1">
      </div>
      <div class="carousel-item">
        <img src="./img/img2.jpeg" draggable="false" class="d-block w-100 img-2">
      </div>
      <div class="carousel-item">
        <img src="./img/img1.jpeg" draggable="false" class="d-block w-100 img-3">
      </div>
      <div class="carousel-item">
        <img src="./img/img3.jpeg" draggable="false" class="d-block w-100 img-4" width="1520" height="700">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <!-- Slider  -->


  <!-- About us -->

  <section class="about-us mg" id="about-us">
    <div class="container">
      <h1 class="fs-2" style="margin-bottom: 30px;">About us</h1>
      <div class="flex">
        <div class="content" style="line-height: 1.8;">This system helps clinics avoid overcrowding, reduce waiting times, and improve patient experience. Patients can book appointments, and health care providers can allocate their time effectively. Additionally, it aids healthcare organizations in keeping track of patient records and follow-up appointments.</div>
        <div class="img"><img src="./img/patient.jpg" draggable="false" width="500" alt="Patient Picture"></div>
      </div>
    </div>
  </section>

  <!-- About us -->


  <!-- departments -->

  <section class="departments mg" id="departments">
    <div class="container">
      <h1 class="fs-2">departments</h1>
      <div class="flex">
        <div class="card" style="width: 16rem;">
          <img src="./img/dental.jpeg" draggable="false" style="width: 100%; margin:0; height:180px;">
          <div class="card-body">
            <h5 class="card-title text-center"><a href="#">Dental</a></h5>
          </div>
        </div>
        <div class="card" style="width: 16rem;">
          <img src="./img/Cardiology.jpeg" draggable="false" style="width: 100%; margin:0; height:180px;">
          <div class="card-body">
            <h5 class="card-title text-center"><a href="#">Cardiology</a></h5>
          </div>
        </div>
        <div class="card" style="width: 16rem;">
          <img src="./img/Dermatology.jpeg" draggable="false" style="width: 100%; margin:0; height:180px;">
          <div class="card-body">
            <h5 class="card-title text-center"><a href="#">Dermatology</a></h5>
          </div>
        </div>
        <div class="card" style="width: 16rem;">
          <img src="./img/bones.jpeg" draggable="false" style="width: 100%; margin:0; height:180px;">
          <div class="card-body">
            <h5 class="card-title text-center"><a href="#">Bones</a></h5>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- departments -->




  <!-- Appointment Section -->

  <section class="appointment mg">
    <div class="container">
      <div class="flex">
        <figure class="banner">
          <img src="./img/doc.png" draggable="false" class="w-100">
        </figure>
  
        <div class="content">
          <h2 class="title">We Are open And Welcoming Patients</h2>
          <a href="login.php" class="btn">book appointment</a>
        </div>
      </div>
    </div>
  </section>

  <!-- Appointment Section -->


  <!-- Footer  -->

  <footer>
    <div class="container">
      <h2 class="fs-2 text-center fw-bold mb-5">My Clinic</h2>
      <div class="flex">
        <div class="logo" style="text-align: center;">
          <img src="./img/app-icon.jpeg" draggable="false" alt="Clinic">
        </div>
        <div class="socials">
          <i class="fab fa-instagram icon"></i>
          <i class="fab fa-twitter icon"></i>
          <i class="fab fa-linkedin icon"></i>
          <i class="fab fa-whatsapp  icon"></i>
        </div>
      </div>
    </div>
  </footer>

  <!-- Footer  -->


  <!-- Scroll To Top  -->
  <span class="scroll-to-top">
    <i class="fas fa-chevron-up arrow"></i>
  </span>
  <!-- Scroll To Top  -->

  <script src="./js/bootstrap.min.js"></script>
  <script src="./js/all.min.js"></script>
  <script src="./js/main.js"></script>
</body>
</html>