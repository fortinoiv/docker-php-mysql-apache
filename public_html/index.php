<h1>Hello World!!!</h1>
<?php
$host = 'mysql';
$user = 'user';
$pass = 'root';
$conn = new mysqli($host, $user, $pass);

if ($conn->connect_error) {
    die("Error: " . $conn->connect_error);
} else {
  echo "Conectada a MySQL con éxito!";
}
phpinfo();
?>
