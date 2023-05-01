<?php
$dbHost = 'localhost';
$dbuser = 'root';
$dbpassword = 'nicolebbb';
$dbname = 'student_db';

if(!$conn = mysqli_connect($dbHost,$dbuser,$dbpassword,$dbname)){
    die("failed");
}
?>