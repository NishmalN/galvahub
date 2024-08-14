<?php include ('includes/header.php'); ?>
<div class="container">
    <?php
    $contact = getAll("contact");
    if (mysqli_num_rows($contact) > 0) {
        $data = mysqli_fetch_assoc($contact);
        ?>

        <form action="code.php" method="POST" enctype="multipart/form-data">
            <div class="row">
            <h5>contact</h5>
                <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label"> banner current image</label>
                    <div class="col-sm-10">
                        <img src="../images/Contact/<?= $data['Contact_image'] ?>" height="250px">
                        <input type="hidden" name="old_contact_image" value="<?= $data['Contact_image'] ?>">
                        <div class="form-group">
                            <label for="exampleFormControlFile1">banner change image</label>
                            <input type="file" class="form-control-file" name="new_contact_image">
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
                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">header</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="header" value="<?= $data['header'] ?>">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Phone number</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="phone_number" value="<?= $data['phone_number'] ?>">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Email address</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="email_address" value="<?= $data['email_address'] ?>">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Address info</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="address_info" value="<?= $data['address_info'] ?>">
                    </div>
                </div>


            </div>
            <button type="submit" class="btn btn-primary mb-2" name="contact_btn">Confirm</button>
        </form>
        <?php
    }
    ?>
</div>

<?php include ('includes/footer.php'); ?>