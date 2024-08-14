
 <?php
    session_start();
    function redirect($url, $message)
    {
        $_SESSION['message'] = $message;
        header("Location:" . $url);
        exit();
    }
    // require_once('code.php');
    
    if (isset($_POST['logout_btn'])) 
    // echo "outside";
    {
        // echo "inside";
        unset($_SESSION['user_id']);
        session_destroy();
        redirect("login.php", " logout Succesfully ");
        
        die;
        
    }
?>
