<?php include ('includes/header.php'); ?>
<div class="container">
    <?php

    $services = getAll("services");

    if (mysqli_num_rows($services) > 0) {
        $data = mysqli_fetch_assoc($services);
        ?>

        <form action="code.php" method="POST" enctype="multipart/form-data">
            <div class="row">
                <h5>Services</h5>
                <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label"> banner current image</label>
                    <div class="col-sm-10">
                        <img src="../images/Services/<?= $data['Services_image'] ?>" height="250px">
                        <input type="hidden" name="old_Services_image" value="<?= $data['Services_image'] ?>">
                        <div class="form-group">
                            <label for="exampleFormControlFile1">banner change image</label>
                            <input type="file" class="form-control-file" name="new_Services_image">
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">banner name1</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="banner_name1" name="banner_name1"
                            value="<?= $data['banner_name1'] ?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">banner name2</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="banner_name2" name="banner_name2" value="<?= $data['banner_name2'] ?>">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">button name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="button_name" value="<?= $data['button_name'] ?>">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">button link</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="button_link" value="<?= $data['button_link'] ?>">
                    </div>
                </div>
                <BR><br><hr>
                <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">current image</label>
                    <div class="col-sm-10">
                        <img src="../images/Services/<?= $data['session1_image'] ?>" height="250px">
                        <input type="hidden" name="old_session1_image" value="<?= $data['session1_image'] ?>">
                        <div class="form-group">
                            <label for="exampleFormControlFile1"> change image</label>
                            <input type="file" class="form-control-file" name="new_session1_image">
                        </div>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">session1 content header</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="session1_content_header" value="<?= $data['session1_content_header'] ?>">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">session1 content</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" name="session1_content" rows="5"><?= $data['session1_content'] ?></textarea>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">title</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="title" value="<?= $data['title'] ?>">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">numbers</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="numbers" value="<?= $data['numbers'] ?>">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">session1 button name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="session1_button_name" value="<?= $data['session1_button_name'] ?>">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">session1 button link</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="session1_button_link" value="<?= $data['session1_button_link'] ?>">
                    </div>
                </div>
                <br><br><hr>
                <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">current image</label>
                    <div class="col-sm-10">
                        <img src="../images/Services/<?= $data['session2_bg_image'] ?>" height="250px">
                        <input type="hidden" name="old_session2_bg_image" value="<?= $data['session2_bg_image'] ?>">
                        <div class="form-group">
                            <label for="exampleFormControlFile1"> change image</label>
                            <input type="file" class="form-control-file" name="new_session2_bg_image">
                        </div>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">session2 content header</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="session2_content_header" value="<?= $data['session2_content_header'] ?>">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">session2 content</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" name="session2_content" rows="5"><?= $data['session2_content'] ?></textarea>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">current image</label>
                    <div class="col-sm-10">
                        <img src="../images/Services/<?= $data['session2_image1'] ?>" height="250px">
                        <input type="hidden" name="old_session2_image1" value="<?= $data['session2_image1'] ?>">
                        <div class="form-group">
                            <label for="exampleFormControlFile1"> change image</label>
                            <input type="file" class="form-control-file" name="new_session2_image1">
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">current image</label>
                    <div class="col-sm-10">
                        <img src="../images/Services/<?= $data['session2_image2'] ?>" height="250px">
                        <input type="hidden" name="old_session2_image2" value="<?= $data['session2_image2'] ?>">
                        <div class="form-group">
                            <label for="exampleFormControlFile1"> change image</label>
                            <input type="file" class="form-control-file" name="new_session2_image2">
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">current image</label>
                    <div class="col-sm-10">
                        <img src="../images/Services/<?= $data['session2_image3'] ?>" height="250px">
                        <input type="hidden" name="old_session2_image3" value="<?= $data['session2_image3'] ?>">
                        <div class="form-group">
                            <label for="exampleFormControlFile1"> change image</label>
                            <input type="file" class="form-control-file" name="new_session2_image3">
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">current image</label>
                    <div class="col-sm-10">
                        <img src="../images/Services/<?= $data['session2_image4'] ?>" height="250px">
                        <input type="hidden" name="old_session2_image4" value="<?= $data['session2_image4'] ?>">
                        <div class="form-group">
                            <label for="exampleFormControlFile1"> change image</label>
                            <input type="file" class="form-control-file" name="new_session2_image4">
                        </div>
                    </div>
                </div>


            </div>
            <button type="submit" class="btn btn-primary mb-2" name="services_btn">Confirm</button>
        </form>
        <?php
    }
    ?>
</div>

<?php include ('includes/footer.php'); ?>