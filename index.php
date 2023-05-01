 <?php
session_start();

include("db.php");
include("function.php");
$user_data = check_login($conn);

?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>SALUT😃 WELCOME TO THIS PAGE!</h2>
    <p>it's a beautiful day</p><br>
    <p>what may i help yo</p>
    <a href="logout.php">Logout</a>
</body>
</html>