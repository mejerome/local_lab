<?php
$ip_server = $_SERVER['SERVER_ADDR'];
echo "Server IP Address is: $ip_server";

$servername = "192.168.3.12";
$username = "example_user";
$password = "secret";
echo "<br>";

try {
    $conn = new PDO("mysql:host=$servername;dbname=example_db", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully to mysql database ip address $servername";
  } catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
  }
?>

<htmL>

<head>
    <title>Example page for devops lab</title>
</head>

<body>
    <h1>FA NO S3 WAGYIMI!!!</h1>
    <?php $date = new DateTime();
    echo $date->format('Y-m-d H:i:s'); ?>
    <br>
    <img src="https://cdn0.iconfinder.com/data/icons/nature-food-and-kitchen/1000/file_light-43-512.png" alt="Google logo"
        width="200">
    <br>
 <?php
 
  ?>
</body>

</htmL>