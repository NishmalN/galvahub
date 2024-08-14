<footer class="footer pt-5">
    <div class="container-fluid">
      <div class="row align-items-center justify-content-lg-between">

        <div class="col-lg-12">
          <ul class="nav nav-footer justify-content-center">
            <li class="nav-item">
              <a href="slider.php" class="nav-link pe-0 text-muted" target="_blank">Slider</a>
            </li> 
            <li class="nav-item">
              <a href="home_page.php" class="nav-link pe-0 text-muted" target="_blank">Home</a>
            </li> 
            <li class="nav-item">
              <a href="about_page.php" class="nav-link pe-0 text-muted" target="_blank">About</a>
            </li>
            <li class="nav-item">
              <a href="services_page.php" class="nav-link pe-0 text-muted" target="_blank">Services</a>
            </li>
            <li class="nav-item">
              <a href="our_commitment.php" class="nav-link pe-0 text-muted" target="_blank">Our Commitment</a>
            </li>
            <li class="nav-item">
              <a href="contact_page.php" class="nav-link pe-0 text-muted" target="_blank">Contact</a>
            </li>
            <li class="nav-item">
              <a href="extra.php" class="nav-link pe-0 text-muted" target="_blank">Extra</a>
            </li>
            <li class="nav-item">
              <a href="socialmedia.php" class="nav-link pe-0 text-muted" target="_blank">Socialmedia</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
</footer>
  </main>

  <script src="assets/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/perfect-scrollbar.min.js"></script>
  <script src="assets/js/smooth-scrollbar.min.js"></script>


  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
 <!-- alertify js -->
 <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.14.0/build/alertify.min.js"></script>
 <script>
  <?php if(isset($_SESSION['message'])) { 
            ?>
            alertify.set('notifier','position', 'top-right');
            alertify.success('<?= $_SESSION['message']; ?>');
            <?php 
            unset($_SESSION['message']);
        } ?>
 </script>
  </body>
  </html>