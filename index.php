<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/main.min.css">
    <link rel="stylesheet" href="./node_modules/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./assets/custom-css/style.css">
</head>
<body>
    
<nav class="navbar navbar-expand-lg bg-primary fixed-top rounded-5 rounded-top-0">
  <div class="container">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="bi bi-list text-light "></span>
    </button>
    <div class="collapse navbar-collapse " id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-5 d-flex justify-content-center">
        <li class="nav-item d-flex justify-content-center">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item d-flex justify-content-center">
          <a class="nav-link" href="#">page 1</a>
        </li>
        <li class="nav-item d-flex justify-content-center">
          <a class="nav-link" href="#">page 2</a>
        </li>
        <li class="nav-item d-flex justify-content-center">
          <a class="nav-link" href="#">page 3</a>
        </li>
        <li class="nav-item d-flex justify-content-center">
          <a class="nav-link" href="#">page 5</a>
        </li>
        </ul>
        <div class="dropdown">
         <button class="btn btn-outline-light" type="button" data-bs-toggle="dropdown" aria-expanded="false">
           More<span class="bi bi-arrow-down-short text-light "></span>
         </button>
         <ul class="dropdown-menu">
           <li><a class="dropdown-item hover-overlay" href="#">Login</a></li>
           <li><a class="dropdown-item" href="#">Request to Sign-in </a></li>
           <li><a class="dropdown-item" href="#">Subscripion pricing</a></li>
         </ul>
       </div>
      </div>
      
    


  </div>
</nav>












  <section class="vh-100 align-items-center">
  <div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100">
      
    
      

    <div   class="d-none d-lg-block col-md-9 col-lg-6 col-xl-5 d-flex  justify-content-center">
        <img   src="./resources/img/png/auditors-comptroller.png"
          class="img-fluid user-select-none " style="wigth: 500px;" alt="Sample image">
      </div>


      <div class="col-md-8 col-lg-6 col-xl-4 ">
      <form>
        

          <div class="divider d-flex align-items-center my-4">
            <p class="text-center fw-bold mx-6 h2 mb-0">Welcome Back</p>
          </div>

          <!-- Email input -->
          <div class="form-outline mb-4">
            <label class="form-label" for="form3Example3">Username</label>
            <div class="input-group">
              <input type="email" id="form3Example3" class="form-control form-control-lg"
              placeholder="Enter username" />
            </div>
          </div>

          <!-- Password input -->
          <div class="form-outline mb-3">
            <label class="form-label" for="form3Example4">Password</label>
            <div class="input-group">
              <input type="password" id="form3Example4" class="form-control form-control-lg"
                placeholder="Enter password" />
            </div>
          </div>

          <div class="d-flex justify-content-between align-items-center">
            <!-- Checkbox -->
            <div class="form-check mb-0">
              <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
              <label class="form-check-label" for="form2Example3">
                Remember me
              </label>
            </div>
            <a href="#!" class="text-body">Forgot password?</a>
          </div>

          <div class="text-center text-lg-start mt-4 pt-2">
            <button type="button" class="btn btn-primary btn-lg"
              style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
            <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="#!"
                class="link-danger">Requiest...</a></p>
          </div>

        </form>
      </div>
    </div>
  </div>
  
</section>
<div
    class="text-center text-md-start justify-content-between py-4 px-4 px-xl-5 bg-dark fixed-bottom">
    <!-- Copyright -->
    <div class="text-white mb-2 mb-md-0">
      Copyright © 2023. All rights reserved by Bilal ahmed.
    </div>
    <!-- Copyright -->

  </div>

<!-- Link to Bootstrap JavaScript and jQuery -->
<!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> -->

<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script> -->
<script src="./node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>