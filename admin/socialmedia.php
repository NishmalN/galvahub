<?php include ('includes/header.php'); ?>
<div class="container">
    <?php

    $socialmedia = getAll("socialmedia");

    if (mysqli_num_rows($socialmedia) > 0) {
        $data = mysqli_fetch_assoc($socialmedia);
        ?>

        <form action="code.php" method="POST" enctype="multipart/form-data">
            <div class="row">
                <h5>Socialmedia</h5>
                <div class="row mb-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">google</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="google" name="google" value="<?= $data['google'] ?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">rss</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="rss" name="rss" value="<?= $data['rss'] ?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">facebook</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="facebook" name="facebook" value="<?= $data['facebook'] ?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">x</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="x" name="x" value="<?= $data['x'] ?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">linkedin</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="linkedin" name="linkedin" value="<?= $data['linkedin'] ?>">
                    </div>
                </div>

            </div>
            <button type="submit" class="btn btn-primary mb-2" name="socialmedia_btn">Confirm</button>
        </form>
        <?php
    }
    ?>
</div>

<?php include ('includes/footer.php'); ?>