<?php

include (__DIR__ . '/config/dbcon.php');

if (!$connection) {
    die("connection Failed: " . mysqli_connect_error());
}

function redirect($url, $message)
{
    $_SESSION['message'] = $message;
    header("Location:" . $url);
    exit();
}



if (isset($_POST['slider_btn'])) {

    $slider_1_header = $_POST['slider_1_header'];
    $content_1 = $_POST['content_1'];
    $slider_1_button1_name = $_POST['slider_1_button1_name'];
    $slider_1_button1_link = $_POST['slider_1_button1_link'];
    $slider_1_button2_link = $_POST['slider_1_button2_link'];
    $slider_1_button2_name = $_POST['slider_1_button2_name'];


    $slider_2_button1_name = $_POST['slider_2_button1_name'];
    $slider_2_button2_link = $_POST['slider_1_button1_link'];


    $slider_2_header = $_POST['slider_2_header'];
    $content_2 = $_POST['content_2'];
    $slider_1_button1_name = $_POST['slider_1_button1_name'];
    $slider_1_button2_link = $_POST['slider_1_button2_link'];


    $slider_2_button1_name = $_POST['slider_2_button1_name'];
    $slider_2_button1_link = $_POST['slider_2_button1_link'];
    $slider_2_button2_link = $_POST['slider_2_button2_link'];
    $slider_2_button2_name = $_POST['slider_2_button2_name'];


    $old_slider_1_image = $_POST['old_slider_1_image'];
    $new_slider_1_image = $_FILES['new_slider_1_image']['name'];

    $old_slider_2_image = $_POST['old_slider_2_image'];
    $new_slider_2_image = $_FILES['new_slider_2_image']['name'];

    if ($new_slider_1_image != "") {
        $slider_1_image = $new_slider_1_image;
    } else {
        $slider_1_image = $old_slider_1_image;
    }

    if ($new_slider_2_image != "") {
        $slider_2_image = $new_slider_2_image;
    } else {
        $slider_2_image = $old_slider_2_image;
    }



    $path = "../images/slider";





    $update_slider_query = "UPDATE slider SET slider_1_image='$slider_1_image', slider_1_header ='$slider_1_header',content_1='$content_1',content_2='$content_2',
                    slider_1_button1_name='$slider_1_button1_name', slider_1_button1_link='$slider_1_button1_link', slider_1_button2_name='$slider_1_button2_name', 
                    slider_1_button2_link='$slider_1_button2_link', 
                    slider_2_image='$slider_2_image', slider_2_header='$slider_2_header', 
                    slider_2_button1_name='$slider_2_button1_name', slider_2_button1_link	='$slider_2_button1_link', slider_2_button2_name='$slider_2_button2_name', 
                    slider_2_button2_link='$slider_2_button2_link' WHERE id='1' ";

    $update_slider_query_run = mysqli_query($connection, $update_slider_query);


    if ($update_slider_query_run) {
        //slider image1
        if ($_FILES['new_slider_1_image']['name'] != "") {


            // Check if the old image exists before attempting to delete
            if (file_exists("../images/slider/" . $old_slider_1_image)) {
                // echo "Old image exists!";
                unlink("../images/slider/" . $old_slider_1_image);
            }
            move_uploaded_file($_FILES['new_slider_1_image']['tmp_name'], $path . '/' . $new_slider_1_image);
        }
        //slider image2
        if ($_FILES['new_slider_2_image']['name'] != "") {

            // Check if the old image exists before attempting to delete
            if (file_exists("../images/slider/" . $old_slider_2_image)) {
                // echo "Old image exists!";
                unlink("../images/slider/" . $old_slider_2_image);
            }
            move_uploaded_file($_FILES['new_slider_2_image']['tmp_name'], $path . '/' . $new_slider_2_image);

        }
       echo "Error: " . mysqli_error($connection);
       redirect("slider.php", "Update Succesfully ");
    } 
    else{
        echo "Error: " . mysqli_error($connection);
        redirect("slider.php", "Not Updated ");

    }
}

if (isset($_POST['home_btn'])) {

    $header = $_POST['header'];
    $content_header = $_POST['content_header'];
    $content = $_POST['content'];
    $old_about_image = $_POST['old_about_image'];
    $new_about_image = $_FILES['new_about_image']['name'];


    $header_2 = $_POST['header_2'];

    $old_mission1_image = $_POST['old_mission1_image'];
    $new_mission1_image = $_FILES['new_mission1_image']['name'];
    $mission_content = $_POST['mission_content'];

   

  
    $service_button_name = $_POST['service_button_name'];
    $service_button_link = $_POST['service_button_link'];

    $old_mission2_image = $_POST['old_mission2_image'];
    $new_mission2_image = $_FILES['new_mission2_image']['name'];

    $mission_button_name = $_POST['mission_button_name'];
    $mission_button_link = $_POST['mission_button_link'];

    $old_contact_image = $_POST['old_contact_image'];
    $new_contact_image = $_FILES['new_contact_image']['name'];



    if ($new_about_image != "") {
        $about_image = $new_about_image;
    } else {
        $about_image = $old_about_image;
    }

    if ($new_mission1_image != "") {
        $mission1_image = $new_mission1_image;
    } else {
        $mission1_image = $old_mission1_image;
    }

    if ($new_mission2_image != "") {
        $mission2_image = $new_mission2_image;
    } else {
        $mission2_image = $old_mission2_image;
    }

    if ($new_contact_image != "") {
        $contact_image = $new_contact_image;
    } else {
        $contact_image = $old_contact_image;
    }



    $path = "../images/home";


    $update_home_page_query = "UPDATE home_page SET header='$header',
        content_header='$content_header',
        content='$content',
        about_image='$about_image',
     
        mission_content='$mission_content',

        mission1_image='$mission1_image',
      
        service_button_name='$service_button_name',service_button_link='$service_button_link',
        mission2_image='$mission2_image',
        mission_button_name='$mission_button_name',mission_button_link='$mission_button_link',
        contact_image='$contact_image' WHERE id='1' ";

    $update_home_page_query_run = mysqli_query($connection, $update_home_page_query);



    if ($update_home_page_query_run) {
        //header 1 image
        if ($_FILES['new_about_image']['name'] != "") {


            // Check if the old image exists before attempting to delete
            if (file_exists("../images/home/" . $old_about_image)) {
                // echo "Old image exists!";
                unlink("../images/home/" . $old_about_image);
            }
            move_uploaded_file($_FILES['new_about_image']['tmp_name'], $path . '/' . $new_about_image);
        }

        //header 2 image
        if ($_FILES['new_mission1_image']['name'] != "") {


            // Check if the old image exists before attempting to delete
            if (file_exists("../images/home/" . $old_mission1_image)) {
                // echo "Old image exists!";
                unlink("../images/home/" . $old_mission1_image);
            }
            move_uploaded_file($_FILES['new_mission1_image']['tmp_name'], $path . '/' . $new_mission1_image);
        }

        //header 3 image
        if ($_FILES['new_mission2_image']['name'] != "") {


            // Check if the old image exists before attempting to delete
            if (file_exists("../images/home/" . $old_mission2_image)) {
                // echo "Old image exists!";
                unlink("../images/home/" . $old_mission2_image);
            }
            move_uploaded_file($_FILES['new_mission2_image']['tmp_name'], $path . '/' . $new_mission2_image);
        }

        //header 4 image
        if ($_FILES['new_contact_image']['name'] != "") {


            // Check if the old image exists before attempting to delete
            if (file_exists("../images/home/" . $old_contact_image)) {
                // echo "Old image exists!";
                unlink("../images/home/" . $old_contact_image);
            }
            move_uploaded_file($_FILES['new_contact_image']['tmp_name'], $path . '/' . $new_contact_image);
        }

        // echo "Error: " . mysqli_error($connection);
        redirect("home_page.php", "Update Succesfully ");
    } else {
        // echo "Error: " . mysqli_error($connection);
        redirect("home_page.php", "Not Updated ");
    }

}
if (isset($_POST['about_btn'])) {

    $old_about_image = $_POST['old_about_image'];
    $new_about_image = $_FILES['new_about_image']['name'];
    $About_us = $_POST['About_us'];
    $About = $_POST['About'];
    $button_name = $_POST['button_name'];
    $button_link = $_POST['button_link'];


    $session1_header = $_POST['session1_header'];
    $old_session1_image = $_POST['old_session1_image'];
    $new_session1_image = $_FILES['new_session1_image']['name'];
    $content_header = $_POST['content_header'];
    $session1_content = $_POST['session1_content'];
    $sub_header = $_POST['sub_header'];
    $commitment = $_POST['commitment'];
    $content_button_name = $_POST['content_button_name'];
    $content_button_link = $_POST['content_button_link'];
    $old_session2_image1 = $_POST['old_session2_image1'];
    $new_session2_image1 = $_FILES['new_session2_image1']['name'];
    $title1 = $_POST['title1'];
   
    $session2_content1 = $_POST['session2_content1'];
    $title2 = $_POST['title2'];
   
    $session2_content2 = $_POST['session2_content2'];
    $old_session2_image2 = $_POST['old_session2_image2'];
    $new_session2_image2 = $_FILES['new_session2_image2']['name'];



    if ($new_about_image != "") {
        $about_image = $new_about_image;
    } else {
        $about_image = $old_about_image;
    }


    if ($new_session1_image != "") {
        $session1_image = $new_session1_image;
    } else {
        $session1_image = $old_session1_image;
    }


    if ($new_session2_image1 != "") {
        $session2_image1 = $new_session2_image1;
    } else {
        $session2_image1 = $old_session2_image1;
    }


    if ($new_session2_image2 != "") {
        $session2_image2 = $new_session2_image2;
    } else {
        $session2_image2 = $old_session2_image2;
    }

    $path = "../images/about";


    $update_about_query = "UPDATE about SET about_image='$about_image',
        About_us='$About_us',
        About='$About',
        button_name='$button_name',button_link='$button_link',

        session1_header='$session1_header',
        session1_image='$session1_image',
        content_header='$content_header',
        session1_content='$session1_content',
        sub_header='$sub_header',
        commitment='$commitment',
        content_button_name='$content_button_name',content_button_link='$content_button_link',
        session2_image1='$session2_image1',
        title1='$title1',
       
        session2_content1='$session2_content1',
        title2='$title2',
      
        session2_content2='$session2_content2',
        session2_image2='$session2_image2' WHERE id='1' ";

    $update_about_query_run = mysqli_query($connection, $update_about_query);

    if ($update_about_query_run) {
        //header 1 image
        if ($_FILES['new_about_image']['name'] != "") {


            // Check if the old image exists before attempting to delete
            if (file_exists("../images/about/" . $old_about_image)) {
                // echo "Old image exists!";
                unlink("../images/about/" . $old_about_image);
            }
            move_uploaded_file($_FILES['new_about_image']['tmp_name'], $path . '/' . $new_about_image);
        }
        //header 2 image
        if ($_FILES['new_session1_image']['name'] != "") {


            // Check if the old image exists before attempting to delete
            if (file_exists("../images/about/" . $old_session1_image)) {
                // echo "Old image exists!";
                unlink("../images/about/" . $old_session1_image);
            }
            move_uploaded_file($_FILES['new_session1_image']['tmp_name'], $path . '/' . $new_session1_image);
        }
        //header 3 image
        if ($_FILES['new_session2_image1']['name'] != "") {


            // Check if the old image exists before attempting to delete
            if (file_exists("../images/about/" . $old_session2_image1)) {
                // echo "Old image exists!";
                unlink("../images/about/" . $old_session2_image1);
            }
            move_uploaded_file($_FILES['new_session2_image1']['tmp_name'], $path . '/' . $new_session2_image1);
        }
        //header 4 image
        if ($_FILES['new_session2_image2']['name'] != "") {


            // Check if the old image exists before attempting to delete
            if (file_exists("../images/about/" . $old_session2_image2)) {
                // echo "Old image exists!";
                unlink("../images/about/" . $old_session2_image2);
            }
            move_uploaded_file($_FILES['new_session2_image2']['tmp_name'], $path . '/' . $new_session2_image2);
        }



        echo "Error: " . mysqli_error($connection);
        redirect("about_page.php", "Update Succesfully ");
    } 
    else{
        echo "Error: " . mysqli_error($connection);
        redirect("about_page.php", "Not Updated ");

    }
}

if (isset($_POST['services_btn'])) {

    $old_Services_image = $_POST['old_Services_image'];
    $new_Services_image = $_FILES['new_Services_image']['name'];
    $banner_name1 = $_POST['banner_name1'];
    $banner_name2 = $_POST['banner_name2'];
    $button_name = $_POST['button_name'];
    $button_link = $_POST['button_link'];


    $old_session1_image = $_POST['old_session1_image'];
    $new_session1_image = $_FILES['new_session1_image']['name'];
    $session1_content_header = $_POST['session1_content_header'];
    $session1_content = $_POST['session1_content'];
    $title = $_POST['title'];
    $numbers = $_POST['numbers'];
    $session1_button_name = $_POST['session1_button_name'];
    $session1_button_link = $_POST['session1_button_link'];
    $old_session2_bg_image = $_POST['old_session2_bg_image'];
    $new_session2_bg_image = $_FILES['new_session2_bg_image']['name'];
    $session2_content_header = $_POST['session2_content_header'];
    $session2_content = $_POST['session2_content'];
    $old_session2_image1 = $_POST['old_session2_image1'];
    $new_session2_image1 = $_FILES['new_session2_image1']['name'];
    $old_session2_image2 = $_POST['old_session2_image2'];
    $new_session2_image2 = $_FILES['new_session2_image2']['name'];
    $old_session2_image3 = $_POST['old_session2_image3'];
    $new_session2_image3 = $_FILES['new_session2_image3']['name'];
    $old_session2_image4 = $_POST['old_session2_image4'];
    $new_session2_image4 = $_FILES['new_session2_image4']['name'];

    
    if ($new_Services_image != "") {
        $Services_image = $new_Services_image;
    } else {
        $Services_image = $old_Services_image;
    }

    if ($new_session1_image != "") {
        $session1_image = $new_session1_image;
    } else {
        $session1_image = $old_session1_image;
    }

    if ($new_session2_bg_image != "") {
        $session2_bg_image = $new_session2_bg_image;
    } else {
        $session2_bg_image = $old_session2_bg_image;
    }

    if ($new_session2_image1 != "") {
        $session2_image1 = $new_session2_image1;
    } else {
        $session2_image1 = $old_session2_image1;
    }

    if ($new_session2_image2 != "") {
        $session2_image2 = $new_session2_image2;
    } else {
        $session2_image2 = $old_session2_image2;
    }

    if ($new_session2_image3 != "") {
        $session2_image3 = $new_session2_image3;
    } else {
        $session2_image3 = $old_session2_image3;
    }

    if ($new_session2_image4 != "") {
        $session2_image4 = $new_session2_image4;
    } else {
        $session2_image4 = $old_session2_image4;
    }


    $path = "../images/services";


 $update_services_query = "UPDATE services SET Services_image='$Services_image',
        banner_name1='$banner_name1',
        banner_name2='$banner_name2',
        button_name='$button_name',
        button_link='$button_link',


        session1_image='$session1_image',
       
        session1_content_header='$session1_content_header',
        session1_content='$session1_content',
        title='$title',
        numbers='$numbers',
        session1_button_name='$session1_button_name',
        session1_button_link='$session1_button_link',
        session2_bg_image='$session2_bg_image',
        session2_content_header='$session2_content_header',
        session2_content='$session2_content',

        session2_image1='$session2_image1',
        session2_image2='$session2_image2',
        session2_image3='$session2_image3',
        session2_image4='$session2_image4' WHERE id='1' ";

    $update_services_query_run = mysqli_query($connection, $update_services_query);

    if ($update_services_query_run) {

          //banner 1 image
          if ($_FILES['new_Services_image']['name'] != "") {


            // Check if the old image exists before attempting to delete
            if (file_exists("../images/services/" . $old_Services_image)) {
                // echo "Old image exists!";
                unlink("../images/services/" . $old_Services_image);
            }
            move_uploaded_file($_FILES['new_Services_image']['tmp_name'], $path . '/' . $new_Services_image);
        }

         //session 1 image
         if ($_FILES['new_session1_image']['name'] != "") {


            // Check if the old image exists before attempting to delete
            if (file_exists("../images/services/" . $old_session1_image)) {
                // echo "Old image exists!";
                unlink("../images/services/" . $old_session1_image);
            }
            move_uploaded_file($_FILES['new_session1_image']['tmp_name'], $path . '/' . $new_session1_image);
        }
        //session bg image
        if ($_FILES['new_session2_bg_image']['name'] != "") {


            // Check if the old image exists before attempting to delete
            if (file_exists("../images/services/" . $old_session2_bg_image)) {
                // echo "Old image exists!";
                unlink("../images/services/" . $old_session2_bg_image);
            }
            move_uploaded_file($_FILES['new_session2_bg_image']['tmp_name'], $path . '/' . $new_session2_bg_image);
        }

        //session2 image1
        if ($_FILES['new_session2_image1']['name'] != "") {


            // Check if the old image exists before attempting to delete
            if (file_exists("../images/services/" . $old_session2_image1)) {
                // echo "Old image exists!";
                unlink("../images/services/" . $old_session2_image1);
            }
            move_uploaded_file($_FILES['new_session2_image1']['tmp_name'], $path . '/' . $new_session2_image1);
        }

         //session2 image2
         if ($_FILES['new_session2_image2']['name'] != "") {


            // Check if the old image exists before attempting to delete
            if (file_exists("../images/services/" . $old_session2_image2)) {
                // echo "Old image exists!";
                unlink("../images/services/" . $old_session2_image2);
            }
            move_uploaded_file($_FILES['new_session2_image2']['tmp_name'], $path . '/' . $new_session2_image2);
        }

         //session2 image3
         if ($_FILES['new_session2_image3']['name'] != "") {


            // Check if the old image exists before attempting to delete
            if (file_exists("../images/services/" . $old_session2_image3)) {
                // echo "Old image exists!";
                unlink("../images/services/" . $old_session2_image3);
            }
            move_uploaded_file($_FILES['new_session2_image3']['tmp_name'], $path . '/' . $new_session2_image3);
        }

         //session2 image4
         if ($_FILES['new_session2_image4']['name'] != "") {


            // Check if the old image exists before attempting to delete
            if (file_exists("../images/services/" . $old_session2_image4)) {
                // echo "Old image exists!";
                unlink("../images/services/" . $old_session2_image4);
            }
            move_uploaded_file($_FILES['new_session2_image4']['tmp_name'], $path . '/' . $new_session2_image4);
        }


    // echo "Error: " . mysqli_error($connection);
    redirect("services_page.php", "Update Succesfully ");
} 
else{
    // echo "Error: " . mysqli_error($connection);
    redirect("services_page.php", "Not Updated ");

}
   
}
if (isset($_POST['commitment_btn'])) {

    $old_Commitment_image = $_POST['old_Commitment_image'];
    $new_Commitment_image = $_FILES['new_Commitment_image']['name'];
    $banner_name1 = $_POST['banner_name1'];
    $banner_name2 = $_POST['banner_name2'];
    $button_name = $_POST['button_name'];
    $button_link = $_POST['button_link'];


    $old_header_image = $_POST['old_header_image'];
    $new_header_image = $_FILES['new_header_image']['name'];
    $main_header = $_POST['main_header'];
    $content1 = $_POST['content1'];
    $sub_header = $_POST['sub_header'];
    $content2 = $_POST['content2'];
    $content3 = $_POST['content3'];
    $old_image1 = $_POST['old_image1'];
    $new_image1 = $_FILES['new_image1']['name'];
    $old_image2 = $_POST['old_image2'];
    $new_image2 = $_FILES['new_image2']['name'];
    $old_image3 = $_POST['old_image3'];
    $new_image3 = $_FILES['new_image3']['name'];


    if ($new_Commitment_image != "") {
        $Commitment_image = $new_Commitment_image;
    } else {
        $Commitment_image = $old_Commitment_image;
    }

    if ($new_header_image != "") {
        $header_image = $new_header_image;
    } else {
        $header_image = $old_header_image;
    }

    if ($new_image1!= "") {
        $image1 = $new_image1;
    } else {
        $image1 = $old_image1;
    }

    if ($new_image2!= "") {
        $image2 = $new_image2;
    } else {
        $image2 = $old_image2;
    }

    if ($new_image3!= "") {
        $image3 = $new_image3;
    } else {
        $image3 = $old_image3;
    }

    $path = "../images/commitment";

    $update_commitment_query = "UPDATE commitment SET Commitment_image='$Commitment_image',
        banner_name1='$banner_name1',
        banner_name2='$banner_name2',
        button_name='$button_name',
        button_link='$button_link',


        header_image='$header_image',
        main_header='$main_header',
        content1='$content1',
        sub_header='$sub_header',
        content2='$content2',
        content3='$content3',
        image1='$image1',
        image2='$image2',
        image3='$image3' WHERE id='1' ";

    $update_commitment_query_run = mysqli_query($connection, $update_commitment_query);
   
    if ($update_commitment_query_run) {

         //banner 1 image
         if ($_FILES['new_Commitment_image']['name'] != "") {


            // Check if the old image exists before attempting to delete
            if (file_exists("../images/commitment/" . $old_Commitment_image)) {
                // echo "Old image exists!";
                unlink("../images/commitment/" . $old_Commitment_image);
            }
            move_uploaded_file($_FILES['new_Commitment_image']['tmp_name'], $path . '/' . $new_Commitment_image);
        }

        
        //header_image
        if ($_FILES['new_header_image']['name'] != "") {


            // Check if the old image exists before attempting to delete
            if (file_exists("../images/commitment/" . $old_header_image)) {
                // echo "Old image exists!";
                unlink("../images/commitment/" . $old_header_image);
            }
            move_uploaded_file($_FILES['new_header_image']['tmp_name'], $path . '/' . $new_header_image);
        }

         //image1
         if ($_FILES['new_image1']['name'] != "") {


            // Check if the old image exists before attempting to delete
            if (file_exists("../images/commitment/" . $old_image1)) {
                // echo "Old image exists!";
                unlink("../images/commitment/" . $old_image1);
            }
            move_uploaded_file($_FILES['new_image1']['tmp_name'], $path . '/' . $new_image1);
        }

         //image2
         if ($_FILES['new_image2']['name'] != "") {


            // Check if the old image exists before attempting to delete
            if (file_exists("../images/commitment/" . $old_image2)) {
                // echo "Old image exists!";
                unlink("../images/commitment/" . $old_image2);
            }
            move_uploaded_file($_FILES['new_image2']['tmp_name'], $path . '/' . $new_image2);
        }

         //image3
         if ($_FILES['new_image3']['name'] != "") {


            // Check if the old image exists before attempting to delete
            if (file_exists("../images/commitment/" . $old_image3)) {
                // echo "Old image exists!";
                unlink("../images/commitment/" . $old_image3);
            }
            move_uploaded_file($_FILES['new_image3']['tmp_name'], $path . '/' . $new_image3);
        }

        
    // echo "Error: " . mysqli_error($connection);
    redirect("our_commitment.php", "Update Succesfully ");
} 
else{
    // echo "Error: " . mysqli_error($connection);
    redirect("our_commitment.php", "Not Updated ");

}
   

}
if (isset($_POST['contact_btn'])) {

    $old_contact_image = $_POST['old_contact_image'];
    $new_contact_image = $_FILES['new_contact_image']['name'];
    $banner_name1 = $_POST['banner_name1'];
    $banner_name2 = $_POST['banner_name2'];
    $button_name = $_POST['button_name'];
    $button_link = $_POST['button_link'];


    $header = $_POST['header'];
    $phone_number = $_POST['phone_number'];
    $email_address = $_POST['email_address'];
    $address_info = $_POST['address_info'];


    if ($new_contact_image != "") {
        $Contact_image = $new_contact_image;
    } else {
        $Contact_image = $old_contact_image;
    }

    $path = "../images/Contact";


    $update_contact_query = "UPDATE contact SET Contact_image='$Contact_image',
        banner_name1='$banner_name1',
        banner_name2='$banner_name2',
        button_name='$button_name',
        button_link='$button_link',


        header='$header',
        phone_number='$phone_number',
        email_address='$email_address',
        address_info='$address_info' WHERE id='1' ";

    $update_contact_query_run = mysqli_query($connection, $update_contact_query);

    if ($update_contact_query_run) {
         //banner 1 image
         if ($_FILES['new_contact_image']['name'] != "") {


            // Check if the old image exists before attempting to delete
            if (file_exists("../images/Contact/" . $old_contact_image)) {
                // echo "Old image exists!";
                unlink("../images/Contact/" . $old_contact_image);
            }
            move_uploaded_file($_FILES['new_contact_image']['tmp_name'], $path . '/' . $new_contact_image);
        }


        // echo "Error: " . mysqli_error($connection);
        redirect("contact_page.php", "Update Succesfully ");
    } 
    else{
        // echo "Error: " . mysqli_error($connection);
        redirect("contact_page.php", "Not Updated ");
    
    }


}

if (isset($_POST['extra_btn'])) {

    $old_header_logo = $_POST['old_header_logo'];
    $new_header_logo = $_FILES['new_header_logo']['name'];
    $old_footer_logo = $_POST['old_footer_logo'];
    $new_footer_logo = $_FILES['new_footer_logo']['name'];
    $content = $_POST['content'];


    if ($new_header_logo != "") {
        $header_logo = $new_header_logo;
    } else {
        $header_logo = $old_header_logo;
    }

    if ($new_footer_logo != "") {
        $footer_logo = $new_footer_logo;
    } else {
        $footer_logo = $old_footer_logo;
    }

    $path = "../images/extra";

    $update_extra_query = "UPDATE extra SET header_logo='$header_logo',
    footer_logo='$footer_logo',
    content='$content' WHERE id='1' ";

$update_extra_query_run = mysqli_query($connection, $update_extra_query);

if ($update_extra_query_run) {

     //header logo
     if ($_FILES['new_header_logo']['name'] != "") {


        // Check if the old image exists before attempting to delete
        if (file_exists("../images/extra/" . $old_header_logo)) {
            // echo "Old image exists!";
            unlink("../images/extra/" . $old_header_logo);
        }
        move_uploaded_file($_FILES['new_header_logo']['tmp_name'], $path . '/' . $new_header_logo);
    }

     //footer logo
     if ($_FILES['new_footer_logo']['name'] != "") {


        // Check if the old image exists before attempting to delete
        if (file_exists("../images/extra/" . $old_footer_logo)) {
            // echo "Old image exists!";
            unlink("../images/extra/" . $old_footer_logo);
        }
        move_uploaded_file($_FILES['new_footer_logo']['tmp_name'], $path . '/' . $new_footer_logo);
    }



    
    // echo "Error: " . mysqli_error($connection);
    redirect("extra.php", "Update Succesfully ");
} 
else{
    // echo "Error: " . mysqli_error($connection);
    redirect("extra.php", "Not Updated ");

}

   
}

if (isset($_POST['socialmedia_btn'])) {

    $google = $_POST['google'];
    $rss = $_POST['rss'];
    $facebook = $_POST['facebook'];
    $x = $_POST['x'];
    $linkedin = $_POST['linkedin'];



    $update_socialmedia_query = "UPDATE socialmedia SET google='$google',
    rss='$rss',
    facebook='$facebook',
    x='$x', 
    linkedin='$linkedin' WHERE id='1' ";

    $update_socialmedia_query_run = mysqli_query($connection, $update_socialmedia_query);

    if ($update_socialmedia_query_run) {

        // echo "Error: " . mysqli_error($connection);
        redirect("socialmedia.php", "Update Succesfully ");

    }
    
    else{
        // echo "Error: " . mysqli_error($connection);
        redirect("socialmedia.php", "Not Updated ");
    }
}


?>