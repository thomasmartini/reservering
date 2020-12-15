<?php
$host = "localhost";
$name = "root";
$password = "";
$database = "reserveringssyteem";

$db = mysqli_connect($host, $name, $password, $database)
        or die("mysql connection failed") . mysqli_connect_error();

$query = "SELECT * FROM klanten";
$result = mysqli_query($db, $query);
$klanten = [];
while($row = mysqli_fetch_assoc($result)){

$klanten[] = $row;
}
print_r($klanten);
