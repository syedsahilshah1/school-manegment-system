<?php include('shared/_header.php');?>

  <main>
    <div class="big-wrapper light">
      <img src="./images/shape.png" alt="" class="shape" />

     <?php include('shared/_navbar.php'); ?>
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-md-6 d-flex justify-content-center get-started" style="height: 550px;">
            <div class=" d-flex justify-content-center align-items-center">
              <div>
                <div class="big-title">
                  <h1>Future is here,</h1>
                  <h1>Start Exploring now.</h1>
                </div>
                <p class="text">
                  streamline processes, manage resources, track student data, facilitate
                  communication, and enhance administrative tasks effectively.
                </p>
                <div class="cta">
                  <a href="index.php" class="btn">Get started</a>
                </div>


              </div>
            </div>
          </div>

          <div class="col-12 col-md-6 image-box">

            <img src="./images/children.png" alt="Person Image" class="person" />
          </div>
        </div>
      </div>


      <!-- Management Section -->
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 text-center mb-5">
            <h2 class="big-title" style="font-size: 2.5rem;">Leadership Team</h2>
            <div style="width: 100px; height: 5px; background: var(--mainColor); margin: 15px auto; border-radius: 5px;"></div>
            <p class="text-muted">Dedicated to leading FJGSCK towards educational excellence.</p>
          </div>
          
          <!-- Clerk Profile -->
          <div class="col-md-6 mb-4">
            <div class="card border-0 shadow leadership-card h-100">
              <div class="card-body text-center p-5">
                <div class="profile-img-container mb-4 mx-auto" style="width: 180px; height: 180px; border-radius: 50%; overflow: hidden; border: 5px solid var(--mainColor);">
                  <img src="./images/clerk.png" class="mx-auto" style="width: 100%; height: 100%; object-fit: cover;" alt="Clerk">
                </div>
                <h3 class="mb-1 text-dark">Clerk</h3>
                <p class="text-primary fw-bold mb-3">School Administration</p>
                <div class="contact-details mt-4 pt-3 border-top">
                  <p class="mb-2"><i class="bx bxs-phone-call text-success me-2"></i> <strong>0336-6020304</strong></p>
                  <p class="text-muted"><i class="bx bxs-envelope me-2"></i> Email will be added later</p>
                </div>
              </div>
            </div>
          </div>

          <!-- Principal Profile -->
          <div class="col-md-6 mb-4">
            <div class="card border-0 shadow leadership-card h-100">
              <div class="card-body text-center p-5">
                <div class="profile-img-container mb-4 mx-auto d-flex align-items-center justify-content-center bg-light rounded-circle shadow" style="width: 180px; height: 180px; border: 5px solid var(--mainColor);">
                  <i class="bx bxs-user-circle" style="font-size: 120px; color: var(--lightTwo);"></i>
                </div>
                <h3 class="mb-1 text-dark">Shakeela Wajid <strong>Principal</strong></h3>
                <p class="text-primary fw-bold mb-3">Principal & School Administration</p>
                <div class="contact-details mt-4 pt-3 border-top">
                  <p class="mb-2"><i class="bx bxs-envelope text-danger me-2"></i> <strong>sahilkhan536ah@gmail.com</strong></p>
                  <p class="text-muted"><i class="bx bxs-institution me-2"></i> Fatima Jinnah Girls School & College</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="container mt-5">
          <hr>
      </div>

      <?php include('shared/feature-cards.php'); ?>
    </div>
  </main>




  <?php include('shared/_footer.php'); ?>
