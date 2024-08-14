<?php include ('includes/header.php'); ?>
<div class="container">
    <?php

    $about = getAll("about");

    if (mysqli_num_rows($about) > 0) {
        $data = mysqli_fetch_assoc($about);
        ?>

        <form action="code.php" method="POST" enctype="multipart/form-data">
            <div class="row">
                <h5>About</h5>
                <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">current image</label>
                    <div class="col-sm-10">
                        <img src="../images/about/<?= $data['about_image'] ?>" height="250px">
                        <input type="hidden" name="old_about_image" value="<?= $data['about_image'] ?>">
                        <div class="form-group">
                            <label for="exampleFormControlFile1"> change image</label>
                            <input type="file" class="form-control-file" name="new_about_image">
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">About_us</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="About_us" name="About_us" value="<?= $data['About_us'] ?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">About</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="About" name="About" value="<?= $data['About'] ?>">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">button_name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="button_name" value="<?= $data['button_name'] ?>">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">button_link</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="button_link" value="<?= $data['button_link'] ?>">
                    </div>
                </div>
                <BR><br>
                <div class="row mb-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">session1_header</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="session1_header" name="session1_header" value="<?= $data['session1_header'] ?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">current image</label>
                    <div class="col-sm-10">
                        <img src="../images/about/<?= $data['session1_image'] ?>" height="250px">
                        <input type="hidden" name="old_session1_image" value="<?= $data['session1_image'] ?>">
                        <div class="form-group">
                            <label for="exampleFormControlFile1"> change image</label>
                            <input type="file" class="form-control-file" name="new_session1_image">
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
                    <label for="inputPassword" class="col-sm-2 col-form-label">session1_content</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" name="session1_content" rows="5"><?= $data['session1_content'] ?></textarea>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">sub header</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="sub_header" name="sub_header" value="<?= $data['sub_header'] ?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">commitment</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="commitment" name="commitment" value="<?= $data['commitment'] ?>">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">content_button_name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="content_button_name" value="<?= $data['content_button_name'] ?>">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">content_button_link</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="content_button_link" value="<?= $data['content_button_link'] ?>">
                    </div>
                </div>
                <BR>
                <hr>
                <hr><br><BR>
                <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">current image</label>
                    <div class="col-sm-10">
                        <img src="../images/about/<?= $data['session2_image1'] ?>" height="250px">
                        <input type="hidden" name="old_session2_image1" value="<?= $data['session2_image1'] ?>">
                        <div class="form-group">
                            <label for="exampleFormControlFile1"> change image</label>
                            <input type="file" class="form-control-file" name="new_session2_image1">
                        </div>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">title1</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="title1" value="<?= $data['title1'] ?>">
                    </div>
                </div>
               
                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">session2_content1</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" name="session2_content1" rows="5"><?= $data['session2_content1'] ?></textarea>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">title2</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="title2" value="<?= $data['title2'] ?>">
                    </div>
                </div>
               
                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">session2_content2</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" name="session2_content2" rows="5"><?= $data['session2_content2'] ?></textarea>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">current image</label>
                    <div class="col-sm-10">
                        <img src="../images/about/<?= $data['session2_image2'] ?>" height="250px">
                        <input type="hidden" name="old_session2_image2" value="<?= $data['session2_image2'] ?>">
                        <div class="form-group">
                            <label for="exampleFormControlFile1"> change image</label>
                            <input type="file" class="form-control-file" name="new_session2_image2">
                        </div>
                    </div>
                </div>

            </div>
            <button type="submit" class="btn btn-primary mb-2" name="about_btn">Confirm</button>
        </form>
        <?php
    }
    ?>

</div>


<?php include ('includes/footer.php'); ?>