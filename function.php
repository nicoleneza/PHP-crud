<?php
 function check_login($conn){
    if(isset($_SESSION['email'])){
        $email = $_SESSION['email'];
        $query = "SELECT * FROM user where email='$email' limit 1"   ;

        $result = mysqli_query($conn,$query);
        
        if($result && mysqli_num_rows($result) > 0){
            $user_data = mysqli_fetch_assoc($result);
            return $user_data;
        }

    }
    header("Location: login.php");  
 }
?>  