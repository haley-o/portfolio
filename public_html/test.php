<!DOCTYPE html>
<html lang="en">

<head>
</head>

<body>
<?php
$user = "haley059_haley-o";
$pass = "Boston123!";
$host = "localhost";
$db = "haley059_haley_portfolio";

$conn = mysqli_connect($host, $user, $pass, $db);

if(!$conn){
echo "error";
}
else{
echo "conn";
}
?>
</body>
</html>	