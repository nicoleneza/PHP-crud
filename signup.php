
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
        }
        form{
            width: 500px;;
            height:340px;
            /* background:blue;  */
            margin:200px 400px; 
        }
        input{
            width: 200px;
            height: 30px;
            margin: 10px 20px
        }
    </style>
</head>
<body>
    <form action="create.php" method="post">
        <label for="fname">Firstname</label><input type="text" name="fname"><br>
        <label for="lname">Lastname</label><input type="text" name="lname"><br>
        <label for="username">Username</label><input type="text" name="username"><br>
        <label for="email">Email</label><input type="text" name="email"><br>
        <label for="password">Password</label><input type="password" name="password"><br>
        <input type="submit" value="Done">
    </form>

    <?php
session_start();

include("db.php");
include("function.php");
?>

</body>
</html>