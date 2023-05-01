<?php
session_start();
include 'db.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    if(!empty($fname)&& !empty($lname) && !is_numeric($username) && !empty($email)&& !empty($password)){
        $query = "INSERT INTO user(fname,lname,username,email,password)VALUES('$fname','$lname','$username','$email','$password')";
        //to save
        mysqli_query($conn,$query);

        header("Location: login.php");
        die;
    }else {
        echo "Enter the valid values";
    }
}
?>