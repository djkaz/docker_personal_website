<!DOCTYPE html>

<html>
<head>
    <title>Windows software&hardware services</title>
    <!--css-->
    <link rel="stylesheet" href="style.css">
    <!-- bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!--whatsapp-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- font awesome -->
    <script src="https://kit.fontawesome.com/31149d48b0.js" crossorigin="anonymous"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/validate.js/0.13.1/validate.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<!--
<form action="checkbox-form.php" method="$POST">
     Which services do you require for your laptop, desktop?<br/>
    <input type="checkbox" name="formDoor[]" value="A" />Windows with license<br>
    <input type="checkbox" name="formDoor[]" value="B" />Office with license<br>
    <input type="checkbox" name="formDoor[]" value="c" />Thermal paste change for CPU+GPU<br>
    <input type="checkbox" name="formDoor[]" value="D" />Clean desktop or laptop<br>

<input type="submit" name="formSubmit" value="Submit">
</form>
-->
<!--navigation menu-->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <img src="images/direwolf.png" width="30" height="30" alt="Direwolf web-development">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.html">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="services.html">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="aboutus.html">About us</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="portfolio.html" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Portfolio
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="portfolio.html">Current portfolio</a></li>
            <li><a class="dropdown-item" href="https://www.behance.net/tironalexandrustefan" target="_blank">External portfolio</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="contact.html">For quotations & reservations</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.html">Contact</a>
        </li>
      </ul>
     
    </div>
  </div>
</nav>
<!--navigation menu-->

<!--body and select form-->
<body>
<div class="container mt-4 pt-4">

<form method="POST" action="mailer_test.php">
Name:
<!--<input type="text" name="name" size="19"><br>--->
<br>
E-Mail:
<input type="text" name="email" size="19">
    <br>
    <br>
    <input type="checkbox" name="check[]" value="windows_with_license_100RON"> Windows with license<br>
    <input type="checkbox" name="check[]" value="office_with_license_70RON"> Office with license<br>
    <input type="checkbox" name="check[]" value="hardware_defect_1000"> Hardware defect
    <br> 
    <br>
    Describe other issue:<br>
    <textarea rows="9" name="message" cols="30"></textarea><br> 
    <br>
<input type="submit" value="Submit" name="submit">
</form>
  
</div>
</body>

</body> 
<!-- Footer -->
<footer class="text-center text-lg-start bg-light text-muted">
    <!-- Section: Social media -->
    <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
      <!-- Left -->
      <div class="me-5 d-none d-lg-block">
        <span>Get connected with us on social networks:</span>
      </div>
      <!-- Left -->
  
      <!-- Right -->
      <div>
        <a href="https://www.facebook.com/alexstefantiron" class="me-4 text-reset">
          <i class="fab fa-facebook-f"> </i>
        </a>
        <a href="https://ro.linkedin.com/in/tironalexandrustefan" class="me-4 text-reset">
          <i class="fab fa-linkedin"> </i>
        </a>
        <a href="https://github.com/djkaz" class="me-4 text-reset">
          <i class="fab fa-github"> </i>
        </a>
      </div>
      <!-- Right -->
    </section>
    <!-- Section: Social media -->
  
    <!-- Section: Links  -->
    <section class="">
      <div class="container text-center text-md-start mt-5">
        <!-- Grid row -->
        <div class="row mt-3">
         <!-- Grid column -->
         <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h6 class="text-uppercase fw-bold mb-4">
            <i class="fas fa-gem me-3"></i>Direwolf webdevelopment done in house.
          </h6>
        </div>
        <!-- Grid column -->
  
          <!-- Grid column -->
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">
              Products
            </h6>
            <p>
              <a href="#!" class="text-reset">Angular</a>
            </p>
            <p>
              <a href="#!" class="text-reset">React</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Vue</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Laravel</a>
            </p>
          </div>
          <!-- Grid column -->
  
          <!-- Grid column -->
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">
              Useful links
            </h6>
            <p>
              <a href="#!" class="text-reset">Pricing</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Settings</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Orders</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Help</a>
            </p>
          </div>
          <!-- Grid column -->
  
          <!-- Grid column -->
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
            <p><i class="fas fa-home me-3"></i>Bucuresti 2023</p>
            <p>
              <i class="fas fa-envelope me-3"></i>
              alex.tiron[AT]direwolf.ro
            </p>
            <p><i class="fas fa-phone me-3"></i> + 40 770 850 870 </p>
            <p><i class="fas fa-phone me-3"></i> + 40 740 843 449 </p>
            
          </div>
          <!-- Grid column -->
        </div>
        <!-- Grid row -->
      </div>
    </section>
    <!-- Section: Links  -->
  
    <!-- Copyright -->
    <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
      © 2023 Copyright:
      <a class="text-reset fw-bold" href="http://tironalexandru.ro">Website done in house by a lonely direwolf.ro</a>
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->
  <!--<i class="fa fa-copyright" aria-hidden="true"></i></footer> -->
<footer>
</html>