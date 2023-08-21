<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/main.min.css">
    <link rel="stylesheet" href="./assets/custom-css/style.css">
</head>
<body>
    

<div class="navbar navbar-expand-lg fixed-top bg-primary" data-bs-theme="dark">
      <div class="container">
        <a href="../" class="navbar-brand">Bootswatch</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav">
            
              
            <li class="nav-item">
              <a class="nav-link" href="../help/">Help</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://blog.bootswatch.com/">Blog</a>
            </li>
            <li class="nav-item dropdown" data-bs-theme="light">
              <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" id="download">Zephyr</a>
              <div class="dropdown-menu" aria-labelledby="download">
                <a class="dropdown-item" rel="noopener" target="_blank" href="https://jsfiddle.net/bootswatch/5n3yLr7u/">Open in JSFiddle</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="../5/zephyr/bootstrap.css" download="">bootstrap.css</a>
                <a class="dropdown-item" href="../5/zephyr/bootstrap.min.css" download="">bootstrap.min.css</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="../5/zephyr/bootstrap.rtl.css" download="">bootstrap.rtl.css</a>
                <a class="dropdown-item" href="../5/zephyr/bootstrap.rtl.min.css" download="">bootstrap.rtl.min.css</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="../5/zephyr/_variables.scss" download="">_variables.scss</a>
                <a class="dropdown-item" href="../5/zephyr/_bootswatch.scss" download="">_bootswatch.scss</a>
              </div>
            </li>
          </ul>
          <ul class="navbar-nav ms-md-auto">
            <li class="nav-item">
              <a target="_blank" rel="noopener" class="nav-link" href="https://github.com/thomaspark/bootswatch/"><i class="bi bi-github"></i><span class="d-lg-none ms-2">GitHub</span></a>
            </li>
            <li class="nav-item">
              <a target="_blank" rel="noopener" class="nav-link" href="https://twitter.com/bootswatch"><i class="bi bi-twitter"></i><span class="d-lg-none ms-2">Twitter</span></a>
            </li>
            <li class="nav-item py-2 py-lg-1 col-12 col-lg-auto">
              <div class="vr d-none d-lg-flex h-100 mx-lg-2 text-white"></div>
              <hr class="d-lg-none my-2 text-white-50">
            </li>
            <li class="nav-item dropdown" data-bs-theme="light">
              <a class="nav-link dropdown-toggle d-flex align-items-center" href="#" id="theme-menu" aria-expanded="false" data-bs-toggle="dropdown" data-bs-display="static" aria-label="Toggle theme">
                <i class="bi bi-circle-half"></i>
                <span class="d-lg-none ms-2">Toggle theme</span>
              </a>
              <ul class="dropdown-menu dropdown-menu-end">
                <li>
                  <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="light" aria-pressed="false">
                    <i class="bi bi-sun-fill"></i><span class="ms-2">Light</span>
                  </button>
                </li>
                <li>
                  <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark" aria-pressed="true">
                    <i class="bi bi-moon-stars-fill"></i><span class="ms-2">Dark</span>
                  </button>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </div>


  <section class="vh-100">
  <div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div   class="col-md-9 col-lg-6 col-xl-5 ">
        <img   src="./resources/img/png/auditors-comptroller.png"
          class="img-fluid user-select-none" alt="Sample image">
      </div>
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
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
  <div
    class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 bg-primary">
    <!-- Copyright -->
    <div class="text-white mb-3 mb-md-0">
      Copyright © 2023. All rights reserved by Bilal ahmed.
    </div>
    <!-- Copyright -->

    <!-- Right -->
    <div>
      <a href="#!" class="text-white me-4">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href="#!" class="text-white me-4">
        <i class="fab fa-twitter"></i>
      </a>
      <a href="#!" class="text-white me-4">
        <i class="fab fa-google"></i>
      </a>
      <a href="#!" class="text-white">
        <i class="fab fa-linkedin-in"></i>
      </a>
    </div>
    <!-- Right -->
  </div>
</section>


<!-- Link to Bootstrap JavaScript and jQuery -->
<!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> -->

<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script> -->
<script src="./node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>