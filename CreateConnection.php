<<?php
$servername ="localhost";
$port ="3306";
$username="root";
$password ="YES";
$dbname ="gwcourse";

$conn =new mysqli($servername .":".$port. $username, $password,$dbname);

if ($conn->connect_error){
    die("Connection failed:".$conn->connect_error);
}
echo 'done';
?>

