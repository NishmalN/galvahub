<?php
session_start();

// include(__DIR__ . '/config/dbcon.php');
include ('code.php');

// $username=filter_input (INPUT_POST,'username');
// $password=filter_input (INPUT_POST,'password');
// if(!empty($username)){
//     if(!empty($password)){
//         // $host="localhost";
//         // $dbusername="root";
//         // $dbpassword="";
//         // $dbname="nishmal";

//         // $conn= new mysqli ($host,$dbusername,$dbpassword,$dbname);

//         if(mysqli_connect_error()){
//             die('Connect Error('.mysqli_connect_errno().')'
//             .mysqli_connect_error());

//         }
//         else{
//             $sql="INSERT INTO login (username,password)
//             values ('$username','$password')";
//             if($connection->query($sql)){
//                 echo "New record is inserted sucessfully";
//             }
//             else{
//                 echo "Error:".$sql."<br>".$connection->error;
//             }
//             $connection->close();
//         }
//     }
//     else{
//         echo "password should not be empty";
//         die();
//     }
// }
// else{
//     echo "username should not be empty";
//     die();
// }

if (isset($_POST['login_btn'])) {
    $username = $_POST['username'];
		$password = $_POST['password'];

		if(!empty($username) && !empty($password) && !is_numeric($username))
		{

			//read from database
			$query = "SELECT * FROM login WHERE username = '$username' LIMIT 1";
			$result = mysqli_query($connection, $query);
			echo "fdsgd12343";

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$username = mysqli_fetch_assoc($result);
					
					if($username['password'] === $password)
					{

						$_SESSION['user_id'] = $username['id'];
                        $_SESSION['is_logged_in'] = true; // This can be used for further authentication checks

						// header("Location: index.php");
                        redirect("index.php", "Login Succesfully ");

						// die;
					}
				}
			}
			
			redirect("login.php", "wrong username or password ");
		}else
		{
			redirect("login.php", " one of your field is empty ");
		}
    
}

?>