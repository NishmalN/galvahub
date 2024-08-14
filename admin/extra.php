<?php include ('includes/header.php'); ?>
<div class="container">
    <?php

    $extra = getAll("extra");

    if (mysqli_num_rows($extra) > 0) {
        $data = mysqli_fetch_assoc($extra);
        ?>

        <form action="code.php" method="POST" enctype="multipart/form-data">
            <div class="row">
            <h5>Extra</h5>
            <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label"> logo current image</label>
                    <div class="col-sm-10">
                        <img src="../images/extra/<?= $data['header_logo'] ?>" height="250px">
                        <input type="hidden" name="old_header_logo" value="<?= $data['header_logo'] ?>">
                        <div class="form-group">
                            <label for="exampleFormControlFile1">logo change image</label>
                            <input type="file" class="form-control-file" name="new_header_logo">
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label"> logo current image</label>
                    <div class="col-sm-10">
                        <img src="../images/extra/<?= $data['footer_logo'] ?>" height="250px">
                        <input type="hidden" name="old_footer_logo" value="<?= $data['footer_logo'] ?>">
                        <div class="form-group">
                            <label for="exampleFormControlFile1">logo change image</label>
                            <input type="file" class="form-control-file" name="new_footer_logo">
                        </div>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">content</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" name="content" rows="5"><?= $data['content'] ?></textarea>
                    </div>
                </div>

            </div>
            <button type="submit" class="btn btn-primary mb-2" name="extra_btn">Confirm</button>
        </form>
        <?php
    }
    ?>
</div>

<?php include ('includes/footer.php'); ?>