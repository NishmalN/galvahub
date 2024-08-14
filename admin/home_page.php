<?php include ('includes/header.php'); ?>
<div class="container">
  <?php

  $home_page = getAll("home_page");

  if (mysqli_num_rows($home_page) > 0) {
    $data = mysqli_fetch_assoc($home_page);
    ?>

    <form action="code.php" method="POST" enctype="multipart/form-data">
      <div class="row">
        <h5>home page</h5>
        <div class="row mb-3">
          <label for="inputEmail3" class="col-sm-2 col-form-label">header</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="header" name="header" value="<?= $data['header'] ?>">
          </div>
        </div>
        <div class="row mb-3">
          <label for="inputPassword3" class="col-sm-2 col-form-label">current image</label>
          <div class="col-sm-10">
            <img src="../images/home/<?= $data['about_image'] ?>" height="150px">
            <input type="hidden" name="old_about_image" value="<?= $data['about_image'] ?>">
            <div class="form-group">
              <label for="exampleFormControlFile1"> change image</label>
              <input type="file" class="form-control-file" name="new_about_image">
            </div>
          </div>
        </div>
        <div class="mb-3 row">
          <label for="inputPassword" class="col-sm-2 col-form-label">content_header</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="content_header" value="<?= $data['content_header'] ?>">
          </div>
        </div>
        <div class="mb-3 row">
          <label for="inputPassword" class="col-sm-2 col-form-label">content</label>
          <div class="col-sm-10">
            <textarea class="form-control" name="content" rows="5"><?= $data['content'] ?></textarea>
          </div>
        </div>

        <div class="row mb-3">
        <label for="inputPassword3" class="col-sm-2 col-form-label">current image</label>
        <div class="col-sm-10">
          <img src="../images/home/<?= $data['contact_image'] ?>" height="250px">
          <input type="hidden" name="old_contact_image" value="<?= $data['contact_image'] ?>">
          <div class="form-group">
            <label for="exampleFormControlFile1"> change image</label>
            <input type="file" class="form-control-file" name="new_contact_image">
          </div>
        </div>
        
      </div>
       
      </div>
      <hr>
      <hr>
      <div class="row">
        <div class="row mb-3">
          <label for="inputEmail3" class="col-sm-2 col-form-label">header_2</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="header_2" value="<?= $data['header_2'] ?>">
          </div>
        </div>

        <div class="row">
          <div class="row mb-3">
            <label for="inputPassword3" class="col-sm-2 col-form-label">current image</label>
            <div class="col-sm-10">
              <img src="../images/home/<?= $data['mission1_image'] ?>" height="250px">
              <input type="hidden" name="old_mission1_image" value="<?= $data['mission1_image'] ?>">
              <div class="form-group">
                <label for="exampleFormControlFile1"> change image</label>
                <input type="file" class="form-control-file" name="new_mission1_image">
              </div>
            </div>
          </div>
        </div> 
        <div class="mb-3 row">
          <label for="inputPassword" class="col-sm-2 col-form-label">mission content</label>
          <div class="col-sm-10">
            <textarea class="form-control" name="mission_content" rows="5"><?= $data['mission_content'] ?></textarea>
          </div>
        </div>
        
      </div>
      <div class="mb-3 row">
        <label for="inputPassword" class="col-sm-2 col-form-label">service_button_name</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="service_button_name" value="<?= $data['service_button_name'] ?>">
        </div>
      </div>
      <div class="mb-3 row">
        <label for="inputPassword" class="col-sm-2 col-form-label">service_button_link</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="service_button_link" value="<?= $data['service_button_link'] ?>">
        </div>
      </div>
      <div class="row mb-3">
        <label for="inputPassword3" class="col-sm-2 col-form-label">current image</label>
        <div class="col-sm-10">
          <img src="../images/home/<?= $data['mission2_image'] ?>" height="250px">
          <input type="hidden" name="old_mission2_image" value="<?= $data['mission2_image'] ?>">
          <div class="form-group">
            <label for="exampleFormControlFile1"> change image</label>
            <input type="file" class="form-control-file" name="new_mission2_image">
          </div>
        </div>
      </div>
      <div class="mb-3 row">
        <label for="inputPassword" class="col-sm-2 col-form-label">mission_button_name</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="mission_button_name" value="<?= $data['mission_button_name'] ?>">
        </div>
      </div>
      <div class="mb-3 row">
        <label for="inputPassword" class="col-sm-2 col-form-label">mission_button_link</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="mission_button_link" value="<?= $data['mission_button_link'] ?>">
        </div>
      </div>
      
      <button type="submit" class="btn btn-primary mb-2" name="home_btn">Confirm</button>
  </div>
  

 

    </form>
  </div>
  <?php
  }

  include ('includes/footer.php'); ?>