<?php
session_start();
include('db.php');
include ('function.php');
$user_data = check_login($conn);

if($_SERVER['REQUEST_METHOD'] == 'GET'){

    $username = $_GET['username'];
    $email = $_GET['email'];
    $password = $_GET['password'];

    if( !is_numeric($username) && !empty($email)&& !empty($password)){
        $query = "SELECT * FROM user WHERE username='$username' LIMIT 1";
        //to save
        $result = mysqli_query($conn,$query);
        if($result)
    {
             if($result && mysqli_num_rows($result) > 0)
             {
            $user_data = mysqli_fetch_assoc($result);
            // return $user_data;
            if($user_data['password']===$password)
            {
                $_SESSION['email'] = $user_data['email'];
                header("Location: index.php");
                die;
            }
            }
    }
     echo "wrong username or password";
    }else {
        echo "Enter the valid values";
    }
}
?>