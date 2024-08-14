
<?php include('includes/header.php'); ?>
<div class="container">
<?php 
 
    $slider = getAll("slider");
            
    if(mysqli_num_rows($slider) > 0) {
        $data = mysqli_fetch_assoc($slider);
        ?>   
    <form action="code.php" method="POST" enctype="multipart/form-data">
        <div class="row">
            <div class="col">
                    <div class="slider-header">
                        <h4>Slider1</h4>
                    </div>
                <div class="slider-body">
                     <h5>current image</h5>
                     <img src="../images/slider/<?= $data['slider_1_image'] ?>" height="250px">
                     <input type="hidden" name="old_slider_1_image" value="<?= $data['slider_1_image'] ?>">
                    <div class="form-group">
                          <label for="exampleFormControlFile1">change image</label>
                          <input type="file" class="form-control-file" name="new_slider_1_image">
            
                    </div>
                        <label for="">header</label>
                        <input type="text" class="form-control" id="slider_1_header" name="slider_1_header" value="<?= $data['slider_1_header'] ?>" placeholder="slider_1_header">
                </div>
            </div>
        <div class="form-group">
            <label for="content_1">content</label>
            <textarea class="form-control" name="content_1" rows="2"><?= $data['content_1'] ?></textarea>
         </div>
            <div class="slider-body">
               <label for="">Button|1|name</label>
               <input type="text" class="form-control" id="slider_1_button1_name" name="slider_1_button1_name" value="<?= $data['slider_1_button1_name'] ?>" placeholder="slider_1_button1_name">
            </div>
                <div class="slider-body">
                    <label for="">button|1|link</label>
                    <input type="text" class="form-control" id="slider_1_button1_link" name="slider_1_button1_link" value="<?= $data['slider_1_button1_link'] ?>" placeholder="slider_1_button1_link">
                </div>
                    <div class="slider-body">
                        <label for="">Button|2|name</label>
                        <input type="text" class="form-control" id="slider_1_button2_name" name="slider_1_button2_name" value="<?= $data['slider_1_button2_name'] ?>" placeholder="slider_1_button2_name">

                    </div>
                        <div class="slider-body">
                            <label for="">button|2|link</label>
                            <input type="text" class="form-control" id="slider_1_button2_link" name="slider_1_button2_link" value="<?= $data['slider_1_button2_link'] ?>" placeholder="slider_1_button2_link">

                        </div>
        </div>
    <div class="row">
        <div class="col">
            <div class="slider-header">
                <h4>Slider2</h4>
            </div>
                <div class="slider-body">
                    <h5>current image</h5>
                    <img src="../images/slider/<?= $data['slider_2_image'] ?>" height="250px">
                    <input type="hidden" name="old_slider_2_image" value="<?= $data['slider_2_image'] ?>">
                        <div class="form-group">
                            <label for="exampleFormControlFile1"> change image</label>
                            <input type="file" class="form-control-file" name="new_slider_2_image">
                        </div>
                            <label for="">header</label>
                            <input type="text" class="form-control" id="slider_2_header" name="slider_2_header" value="<?= $data['slider_2_header'] ?>" placeholder="slider_2_header">
                </div>
        </div>
            <div class="form-group">
                <label for="content_2">content</label>
                <textarea class="form-control" name="content_2" id="content_2" rows="2"><?= $data['content_2'] ?></textarea>
            </div>
                <div class="slider-body">
                    <label for="">Button|1|Name</label>
                    <input type="text" class="form-control" id="slider_2_button1_name" name="slider_2_button1_name" value="<?= $data['slider_2_button1_name'] ?>" placeholder="slider_2_button1_name">

                </div>
            <div class="slider-body">
               <label for="">button|1|link</label>
               <input type="text" class="form-control" id="slider_2_button1_link" name="slider_2_button1_link" value="<?= $data['slider_2_button1_link'] ?>" placeholder="slider_2_button1_link">

            </div>
            <div class="slider-body">
               <label for="">Button|2|Name</label>
               <input type="text" class="form-control" id="slider_2_button2_name" name="slider_2_button2_name" value="<?= $data['slider_2_button2_name'] ?>" placeholder="slider_2_button2_name">

            </div>
            <div class="slider-body">
               <label for="">button|2|link</label>
               <input type="text" class="form-control" id="slider_2_button2_link" name="slider_2_button2_link" value="<?= $data['slider_2_button2_link'] ?>" placeholder="slider_2_button2_link">

            </div>
    </div>
            <button type="submit" class="btn btn-primary mb-2" name="slider_btn">Confirm</button>
    </form>
    <?php 
            }
        ?> 
</div>

<?php include('includes/footer.php'); ?>
