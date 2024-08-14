<?php include ('includes/header.php'); ?>
<div class="container">
    <?php

    $commitment = getAll("commitment");

    if (mysqli_num_rows($commitment) > 0) {
        $data = mysqli_fetch_assoc($commitment);
        ?>

        <form action="code.php" method="POST" enctype="multipart/form-data">
            <div class="row">
                <h5>Our Commitment</h5>
                <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label"> banner current image</label>
                    <div class="col-sm-10">
                        <img src="../images/Commitment/<?= $data['Commitment_image'] ?>" height="250px">
                        <input type="hidden" name="old_Commitment_image" value="<?= $data['Commitment_image'] ?>">
                        <div class="form-group">
                            <label for="exampleFormControlFile1">banner change image</label>
                            <input type="file" class="form-control-file" name="new_Commitment_image">
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
                    <label for="inputPassword3" class="col-sm-2 col-form-label">header current image</label>
                    <div class="col-sm-10">
                        <img src="../images/Commitment/<?= $data['header_image'] ?>" height="250px">
                        <input type="hidden" name="old_header_image" value="<?= $data['header_image'] ?>">
                        <div class="form-group">
                            <label for="exampleFormControlFile1">header change image</label>
                            <input type="file" class="form-control-file" name="new_header_image">
                        </div>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">main header</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="main_header" value="<?= $data['main_header'] ?>">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">content1</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" name="content1" rows="5"><?= $data['content1'] ?></textarea>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">sub header</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="sub_header" value="<?= $data['sub_header'] ?>">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">content2</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" name="content2" rows="5"><?= $data['content2'] ?></textarea>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">content3</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" name="content3" rows="5"><?= $data['content3'] ?></textarea>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label"> current image</label>
                    <div class="col-sm-10">
                        <img src="../images/Commitment/<?= $data['image1'] ?>" height="250px">
                        <input type="hidden" name="old_image1" value="<?= $data['image1'] ?>">
                        <div class="form-group">
                            <label for="exampleFormControlFile1"> change image</label>
                            <input type="file" class="form-control-file" name="new_image1">
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label"> current image</label>
                    <div class="col-sm-10">
                        <img src="../images/Commitment/<?= $data['image2'] ?>" height="250px">
                        <input type="hidden" name="old_image2" value="<?= $data['image2'] ?>">
                        <div class="form-group">
                            <label for="exampleFormControlFile1"> change image</label>
                            <input type="file" class="form-control-file" name="new_image2">
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label"> current image</label>
                    <div class="col-sm-10">
                        <img src="../images/Commitment/<?= $data['image3'] ?>" height="250px">
                        <input type="hidden" name="old_image3" value="<?= $data['image3'] ?>">
                        <div class="form-group">
                            <label for="exampleFormControlFile1"> change image</label>
                            <input type="file" class="form-control-file" name="new_image3">
                        </div>
                    </div>
                </div>

            </div>
            <button type="submit" class="btn btn-primary mb-2" name="commitment_btn">Confirm</button>
        </form>
        <?php
    }
    ?>
</div>

<?php include ('includes/footer.php'); ?>